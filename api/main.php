<?php
session_start();

require "../model/pdo.php";
require "../model/product.php";
require "../model/user.php";
require "../model/bill.php";
require "../global.php";


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

        case "listProShop":
            $page = $_POST['page'];
            $cate = $_POST['cate'];
            $sort = $_POST['sort'];
            $listPro = get_list_pro_shop($cate, $page, $sort);
            echo_json($listPro);
            break;

        case "listCate":
            $listCate = get_list_cate();
            echo_json($listCate);
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
                $qty = $_POST['qty'];
                $id = $_POST['id'];
                $add = 1;
                foreach ($cart as $index => $item) {
                    if ($item['id'] == $id) {
                        $add = 0;
                        $_SESSION['cart'][$index]['qty'] += $qty;
                        break;
                    }
                }
                if ($add == 1) {
                    $sp = [
                        'id' => $id,
                        'qty' => $qty,
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
                $qty = $item['qty'];
                $pro = get_product($id);
                $name = $pro['ten_san_pham'];
                $img = explode(", ", $pro['anh_san_pham'])[0];
                $price = ($pro['gia_khuyen_mai'] == -1) ? $pro['don_gia'] : $pro['gia_khuyen_mai'];
                $proLoad = [
                    'id' => $id,
                    "name" => $name,
                    'qty' => $qty,
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

        case "getCountCate":
            $ma_loai = $_POST['ma_loai'];
            $so_luong = get_count_cate($ma_loai);
            echo_json($so_luong);
            break;

        case "updateCart":
            $_id = $_POST['id'];
            $_qty = $_POST['qty'];
            $_id = explode(",", $_id);
            $_qty = explode(",", $_qty);
            $cart = [];
            $ms = [];
            for ($i = 0; $i < count($_id); $i++) {
                if ($_qty[$i] == 0) {
                    $ms = ['error', 'Có sản phẩn chưa có số lượng xin vui lòng bổ xung'];
                }
                $sp = [
                    'id' => $_id[$i],
                    'qty' => $_qty[$i],
                ];
                $cart[] = $sp;
            };
            if ($ms == []) {
                if ($_SESSION['cart'] == $cart) {
                    $ms = ['error', 'Giỏ hàng chưa có thay đổi'];
                } else {
                    $ms = ['success', 'Giỏ hàng đã được cập nhật'];
                    $_SESSION['cart'] = $cart;
                }
            }
            echo_json($ms);

            break;

        case "login":
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = get_user($email, $password);
            if($user != []) {
                $_SESSION['user'] = [
                    "id" => $user['ma_khach_hang'],
                    "name" => $user['ten_khach_hang'],
                    "email" => $user['email'],
                ];
                echo_json(true);
            } else {
                echo_json(false);
            }
            break;

        case "loginAdmin":
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = get_user_admin($email, $password);
            if($user != []) {
                $_SESSION['user_admin'] = [
                    "id" => $user['ma_khach_hang'],
                    "name" => $user['ten_khach_hang'],
                    "email" => $user['email'],
                    "role" => $user['chuc_nang'],
                ];
                echo_json(true);
            } else {
                echo_json(false);
            }
            break;
            
        case "logout":
            unset($_SESSION['user']);
            break;

        case "logout_admin":
            unset($_SESSION['user_admin']);
            break;

        case "register":
            $email = $_POST['email'];
            $password = $_POST['password'];
            echo_json(add_user($email, $password));
            break;

        case "checkPassword":
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = get_user($email, $password);
            if($user != []) {
                echo_json(true);
            } else {
                echo_json(false);
            }
            break;

        case "changeInfo":
            $password = $_POST['password'];
            $passwordNew = $_POST['passwordNew'];
            $id = $_SESSION['user']['id'];
            update_name_password_user($id, $name, $passwordNew);
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
            break;
        case "getListHoaDon":
            $sort = $_POST['sort'];
            $list_bill = get_list_bill($sort);
            echo_json($list_bill);
            break;

        case "updateTrangThai":
            $ma_don_hang = $_POST['ma_don_hang'];
            $trang_thai = $_POST['trang_thai'];
            update_trang_thai($ma_don_hang, $trang_thai);
            break;

        case "updateBill":
            $ten_nguoi_nhan = $_POST['ten_nguoi_nhan'];
            $dia_chi = $_POST['dia_chi'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $ngay_dat_hang = $_POST['ngay_dat_hang'];
            $ma_trang_thai = $_POST['ma_trang_thai'];
            $pt_ship = $_POST['pt_ship'];
            $ma_don_hang = $_POST['ma_don_hang'];
            update_bill($ma_don_hang ,$ten_nguoi_nhan, $dia_chi, $so_dien_thoai, $ngay_dat_hang, $ma_trang_thai, $pt_ship);
            break;

        case "getTrangThai":
            $ma_don_hang = $_POST['ma_don_hang'];
            $trang_thai = get_trang_thai_bill($ma_don_hang);
            echo_json($trang_thai);
            break;

        
        default:
    }
} else {
}
