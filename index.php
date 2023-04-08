<?php
session_start();
require "model/pdo.php";
require "model/product.php";
require "model/user.php";
require "model/bill.php";
require "model/comment.php";
require "global.php";
ob_start();

require "view/header.php";
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$user = [];
if (isset($_GET['act'])) {

    $act = $_GET['act'];

    require "view/navbar.php";

    switch ($act) {
        case "shop-details":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                flus_luot_xem($id);
                $pro = get_product($id);
                $listBinhLuan = get_list_cmt_product($id);
                $so_luong_binh_luan = count_cmt($id)['so_luong'];
                require "view/shop-details.php";
            } else {
                require "view/page-404.php";
            }

            break;

        case "binhluan":
            if (isset($_POST['submit'])) {
                $ma_khach_hang = $_SESSION['user']['id'];
                $date = getdate();
                $day = $date['mday'];
                $mon = $date['mon'];
                $year = $date['year'];
                $ngay_binh_luan = ($day . "/" . $mon . '/' . $year);
                $noi_dung = $_POST['comment'];
                $ma_san_pham = $_POST['id'];
                $rate = (int)$_POST['star'];
                binh_luan_insert($ma_khach_hang, $ngay_binh_luan, $noi_dung, $ma_san_pham, $rate);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                ob_end_flush();
                
            } 
            break;

        case "shop-cart":
            require "view/shop-cart.php";
            break;

        case "shop-grid-left":
            if(isset($_GET['cate'])) $id_cate = $_GET['cate'];  
            else $id_cate = 1;
            if(isset($_GET['page'])) $page = $_GET['page'];
            else $page = 1;
            $listCate = get_list_cate();
            $count = get_count_cate($id_cate);
            require "view/shop-grid-left.php";
            break;

        case "page-my-account":

            if (isset($_SESSION['user'])) {
                $ma_khach_hang = $_SESSION['user']['id'];
                $listBill = get_list_bill_user($ma_khach_hang);
                require "view/page-my-account.php";
            }
            else require "view/page-404.php";
            break;

        case "shop-checkout":
            if (isset($_SESSION['user'])) {
                $user = get_user_id($user['id']);
                $ship = "";
                if (isset($_GET['ship'])) $ship = $_GET['ship'];
                extract($user);
                require "view/shop-checkout.php";
            } else require "view/page-404.php";
            break;

        case "page-login":
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            require "view/page-login.php";
            break;

        case "bill":
            if ($_GET['madonhang']) {
                $ma_don_hang = $_GET['madonhang'];
                $id = $_SESSION['user']['id'];
                $bill = get_bill($id, $ma_don_hang);
                if ($bill != []) {
                    $bill_detail = get_bill_detail($ma_don_hang);
                    extract($bill);
                    $totalAll = $don_gia;
                    require "view/bill.php";
                } else {
                    require "view/page-404.php";
                }
            } else {
                require "view/page-404.php";
            }
            break;

        case "bill-user":
            if ($_GET['madonhang']) {
                $ma_don_hang = $_GET['madonhang'];
                $id = $_SESSION['user']['id'];
                $bill = get_bill($id, $ma_don_hang);
                if ($bill != []) {
                    $bill_detail = get_bill_detail($ma_don_hang);
                    extract($bill);
                    $totalAll = $don_gia;
                    require "view/bill-user.php";
                } else {
                    require "view/page-404.php";
                }
            } else {
                require "view/page-404.php";
            }
            break;

        default:
            require "view/page-404.php";
            break;
    }
} else {
    require "view/navbar.php";
    require "view/home.php";
}

require "view/footer.php";
