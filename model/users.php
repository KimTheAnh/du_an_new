<?php
function checkuser($user, $pass) {
    $conn =pdo_get_connection();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode (PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq[0]['role'];
    }
?>