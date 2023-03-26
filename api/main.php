<?php
session_start();

require "../model/pdo.php";
require "../model/product.php";
require "../model/user.php";
require "../global.php";

include "view/header.php";

if (isset($_GET['act'])) {

    $act = $_GET['act'];

    switch ($act) {
        case "listPro":
            if (isset($_POST['st'])) {
                $st = $_POST['st'];
                $step = $_POST['step'];
            } else {
                $st = 0;
                $step = 8;
            }
            $listPro = get_list_product($st, $step);
            echo_json($listPro);
            break;

        case "getPro":
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $pro = get_product($id);
                echo_json($pro);
            }
            break;

        case "addCart":
            if ($_POST['id']) {
                $cart = $_SESSION['cart'];
                $qtt = $_POST['qtt'];
                $id = $_POST['id'];
                $add = 1;
                foreach ($cart as $index => $item) {
                    if ($item['id'] == $id) {
                        $add = 0;
                        $_SESSION['cart'][$index]['qtt'] += $qtt;
                        break;
                    }
                }
                if ($add == 1) {
                    $sp = [
                        'id' => $id,
                        'qtt' => $qtt,
                    ];
                    $_SESSION['cart'][] = $sp;
                }
            }
            break;

        case "loadCart":
            $cart = $_SESSION['cart'];
            $listPro = [];
            foreach ($cart as $item) {
                $id = $item['id'];
                $qtt = $item['qtt'];
                $pro = get_product($id);
                $name = $pro['ten_san_pham'];
                $img = explode(", ", $pro['anh_san_pham'])[0];
                $price = ($pro['gia_khuyen_mai'] == -1) ? $pro['don_gia'] : $pro['gia_khuyen_mai'];
                $proLoad = [
                    'id' => $id,
                    "name" => $name,
                    'qtt' => $qtt,
                    'img' => $img,
                    'price' => $price,
                ];
                $listPro[] = $proLoad;
            }
            echo_json($listPro);
            break;

        case "removeCart":
            $cart = $_SESSION['cart'];
            $id = $_POST['id'];

            foreach ($cart as $index => $item) {
                if ($item['id'] == $id) {
                    unset($_SESSION['cart'][$index]);
                }
                break;
            }
            break;


//            Use
        case 'list_user':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id = $_GET['id'];
            }else{
                $id =  0;
            }
            $list_user = user_all($kyw, $id);
            include 'admin/user/list.php';
            break;
        case 'add_user':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $so_dt = $_POST['so_dt'];
                $email = $_POST['email'];
                $chuc_nang = $_POST['chuc_nang'];
                $mat_khau = $_POST['mat_Khau'];
                $dia_chi = $_POST['dia_chi'];

                insert_user($ten_khach_hang, $so_dt,$email, $chuc_nang, $mat_khau,$dia_chi);
                $thongbao = "Thêm thành công";
            }

            $list_user = user_all("",0);
            include 'admin/user/add.php';
            break;

        case "checkLogin":
            if(isset($_SESSION['user'])) echo_json(true);
            else echo_json(false);
            break;

        case "checkLogin":
            if(isset($_SESSION['user'])) echo_json(true);
            else echo_json(false);
            break;
            
        case "addbill":
            $ten_nguoi_nhan = $_POST['ten_nguoi_nhan'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $dia_chi = $_POST['dia_chi'];
            $ngay_dat_hang = $_POST['ngay_dat_hang'];
            $pttt = $_POST['pttt'];
            $pt_ship = $_POST['pt_ship'];
            $don_gia = $_POST['don_gia'];
            $chu_thich = $_POST['chu_thich'];
            $cart = $_SESSION['cart'];
            $ma_khach_hang = $_SESSION['user']['id'];
            $ma_don_hang = add_bill($ten_nguoi_nhan, $so_dien_thoai, $dia_chi, $ngay_dat_hang, $pttt, $pt_ship, $don_gia, $chu_thich, $ma_khach_hang);
            foreach ($cart as $item) {
                $ma_san_pham = $item['id'];
                $so_luong = $item['qty'];
                $pro = get_product($ma_san_pham);
                $gia = ($pro['gia_khuyen_mai'] == -1) ? $pro['don_gia'] : $pro['gia_khuyen_mai'];
                add_bill_detail($ma_don_hang, $ma_san_pham, $so_luong, $gia);
                unset($_SESSION['cart']);
            }
            echo_json($ma_don_hang);
        default:
    }
    include "view/footer.php";
} else {
}
