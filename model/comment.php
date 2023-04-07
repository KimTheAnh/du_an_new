<?php
// require_once 'pdo.php';

function binh_luan_insert($ma_khach_hang,$ngay_binh_luan,$noi_dung,$ma_san_pham, $rate){
    // $sql = "insert into binh_luan values(null,'$ma_khach_hang','$ngay_binh_luan','$noi_dung','$ma_san_pham')";
    $sql = "INSERT INTO `duan`.`binh_luan` (`ma_khach_hang`, `ngay_binh_luan`, `noi_dung`, `ma_san_pham`, `rate`) ".
    "VALUES ($ma_khach_hang, '$ngay_binh_luan', '$noi_dung', $ma_san_pham, $rate);";
    pdo_execute($sql);
}

function loai_cmt($ma_san_pham){
   $sql = "select * from binh_luan where ma_san_pham=$ma_san_pham order by ma_binh_luan desc";
   $list_cmt = pdo_query($sql);
   return $list_cmt;
}

function get_list_cmt_product($ma_san_pham){
   $sql = "select * from binh_luan ".
   "INNER JOIN khach_hang ON binh_luan.ma_khach_hang = khach_hang.ma_khach_hang ".
   "where ma_san_pham= $ma_san_pham order by ma_binh_luan desc";
   $list_cmt = pdo_query($sql);
   return $list_cmt;
}

function cmt_all($kyw=""){
    $sql = "select * from binh_luan where 1";
    if($kyw!=""){
        $sql .= " and ma_san_pham like '%".$kyw."%'";
    }
    $sql.=" order by ma_binh_luan desc";
    $list_cmt = pdo_query($sql);
    return $list_cmt;
}
function cmt_one($id){
    $sql = "select * from binh_luan where ma_binh_luan=$id";
    $cmt = pdo_query_one($sql);
    return $cmt;
}
function cmt_update($ma_binh_luan,$ma_khach_hang,$ngay_binh_luan,$noi_dung,$ma_san_pham){
    $sql = "update binh_luan set ma_khach_hang='$ma_khach_hang',ngay_binh_luan='$ngay_binh_luan',noi_dung='$noi_dung',ma_san_pham='$ma_san_pham' where ma_binh_luan=".$ma_binh_luan;
    pdo_execute($sql);
}
function cmt_delete($id){
    $sql = "delete from binh_luan where ma_binh_luan=".$id ;
    pdo_execute($sql);
}
function count_cmt($id)
{
    $sql = "SELECT COUNT(binh_luan.ma_san_pham) as so_luong FROM binh_luan WHERE binh_luan.ma_san_pham = $id";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

?>