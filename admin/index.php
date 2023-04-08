<?php
session_start();

require "../model/pdo.php";
require "../model/product.php";
require "../model/user.php";
require "../model/bill.php";
require "../global.php";
require "../model/comment.php";

include "view/header.php";

if (isset($_GET['act'])) {

    $act = $_GET['act'];

    switch ($act) {
            //            Use----------------------------------     //
        case 'list_user':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
            } else {
                $id =  0;
            }
            $list_user = user_all($kyw, $id);
            include 'user/list.php';
            break;
        case 'add_user':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $so_dt = $_POST['so_dt'];
                $email = $_POST['email'];
                $chuc_nang = $_POST['chuc_nang'];
                $mat_khau = $_POST['mat_khau'];
                $dia_chi = $_POST['dia_chi'];

                insert_user($ten_khach_hang, $so_dt, $email, $chuc_nang, $mat_khau, $dia_chi);
                $thongbao = "Thêm thành công";
            }

            $list_user = user_all("", 0);
            include 'user/add.php';
            break;
        case 'update_user':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $user = loadone_user($_GET['id']);
            }
            include 'user/update.php';
            break;
        case 'updateuser':
            if (isset($_POST['update_user']) && ($_POST['update_user'])) {
                $id = $_POST['id'];
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $so_dt = $_POST['so_dt'];
                $email = $_POST['email'];
                $chuc_nang = $_POST['chuc_nang'];
                $mat_khau = $_POST['mat_khau'];
                $dia_chi = $_POST['dia_chi'];

                $update = update_user($id, $ten_khach_hang, $so_dt, $email, $chuc_nang, $mat_khau, $dia_chi);
                $thongbao = "Update thành công";
                $list_user = user_all("", 0);
            }
            include 'user/list.php';
            break;

        case 'delete_user':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $user = loadone_user($_GET['id']);
            }
            include 'user/delete.php';
            break;
        case 'deleteuser':
            if (isset($_POST['delete']) && ($_POST['delete'])) {
                $id = $_POST['id'];
                delete_user($id);
            }
            $list_user = user_all("", 0);
            include 'user/list.php';
            break;


        case 'bill':
            include 'view/hoadon.php';
            break;

        case 'bill_detail':
            $ma_don_hang = $_GET['id'];
            $bill = get_bill_admin($ma_don_hang);
            $bill_detail = get_bill_detail($ma_don_hang);
            $list_trang_thai = get_list_trang_thai();
            $list_pttt = get_list_pttt();
            $list_pt_ship = get_list_pt_ship();
            // dd($bill);
            extract($bill);
            $totalAll = $don_gia;

            include 'view/bill_detail.php';
            break;

        case 'test':
            include 'view/products.php';
            break;


//            Comment ///////////////////////////
        case 'list_com':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            $list_cmt = cmt_all($kyw);
            include 'comment/list.php';
            break;
        case 'delete_cmt':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $cmt = cmt_one($_GET['id']);
            }
            include 'comment/delete.php';
            break;
        case 'deletecmt':
            if(isset($_POST['delete']) && ($_POST['delete'])){
                $id = $_POST['id'];
                cmt_delete($id);
            }
            $list_cmt = cmt_all("");
            include 'comment/list.php';
            break;
        default:
            include "view/home.php";
    }
    include "view/footer.php";
} else {
    include "view/home.php";
    include "view/footer.php";
//    hihi
}
