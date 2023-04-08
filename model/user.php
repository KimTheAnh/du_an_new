<?php
function get_user($email, $mat_khau)
{
    $sql = "SELECT * FROM khach_hang WHERE khach_hang.email = '$email' AND khach_hang.mat_khau = '$mat_khau'";
    $user = pdo_query_one($sql);
    return $user;
}

function get_user_admin($email, $password)
{
    $sql = "SELECT * FROM khach_hang WHERE khach_hang.email = '$email' AND khach_hang.mat_khau = '$password' AND khach_hang.chuc_nang = 1";
    $user = pdo_query_one($sql);
    return $user;
}

function get_user_id($id)
{
    $sql = "SELECT * FROM khach_hang WHERE khach_hang.ma_khach_hang = $id";
    $user = pdo_query_one($sql);
    return $user;
}

function add_user($email, $mat_khau)
{
    $sql = "SELECT * FROM khach_hang WHERE khach_hang.email = '$email'";
    $user = pdo_query_one($sql);
    if ($user == []) {
        $sql = "INSERT INTO `duan`.`khach_hang` (`email`, `mat_khau`) VALUES ('$email', '$mat_khau');";
        pdo_execute($sql);
        return true;
    } else {
        return false;
    }
}

function update_name_password_user($id, $ten_khach_hang, $mat_khau)
{
    $sql = "UPDATE `duan`.`khach_hang` SET `ten_khach_hang` = '$ten_khach_hang', `mat_khau` = '$mat_khau' WHERE `ma_khach_hang` = $id";
    pdo_execute($sql);
}


//function user_insert($mat_Khau, $ten_khach_hang, $email, $chuc_nang)
//{
//    $sql = "insert into khach_hang values(null,'$ten_khach_hang','','$email','','','$mat_khau','$chuc_nang')";
//    pdo_execute($sql);
//}

function insert_user($ten_khach_hang, $so_dt, $email, $chuc_nang, $mat_khau, $dia_chi)
{
    $sql = "insert into khach_hang values(null,'$ten_khach_hang','$so_dt','$email','$chuc_nang','$mat_khau','$dia_chi')";
    pdo_execute($sql);
}

function update_user($id, $ten_khach_hang, $so_dt, $email, $chuc_nang, $mat_khau, $dia_chi)
{
    $sql = "update khach_hang set ten_khach_hang ='$ten_khach_hang',so_dt ='$so_dt',email='$email',
                                    chuc_nang='$chuc_nang',mat_khau='$mat_khau',dia_chi='$dia_chi'
                                    where ma_khach_hang='$id' ";
    pdo_execute($sql);
}

function delete_user($id)
{
    $sql = "delete from khach_hang where ma_khach_hang =" . $id;
    pdo_execute($sql);
}

function user_login($ten_khach_hang, $mat_Khau)
{
    $sql = "select * from khach_hang where ten_khach_hang='$ten_khach_hang' and mat_Khau='$mat_Khau'";
    $tk = pdo_query_one($sql);
    return $tk;
}

function user_all($kyw = "", $id = 0)
{
    $sql = "select * from khach_hang where 1";
    if ($kyw != "") {
        $sql .= " and ten_khach_hang like '%" . $kyw . "%' or ma_khach_hang like '%" . $kyw . "%'";
    }
    if ($id > 0) {
        $sql .= " and chuc_nang = '" . $id . "'";
    }
    $sql .= " order by ma_khach_hang desc";
    $list_user = pdo_query($sql);
    return $list_user;
}

function loadone_user($id)
{
    $sql = "select * from khach_hang where ma_khach_hang=" . $id;
    $user = pdo_query_one($sql);
    return $user;
}
