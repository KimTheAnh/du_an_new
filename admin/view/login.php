<?php
session_start();
ob_start();
include "../model/pdo.php";
include "../model/users.php";
if ((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role=checkuser($user,$pass);
    $_SESSION['role']=$role;
    if($role==1) header('location: header.php');
    else  header('location: header.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="view/style.css">
</head>

<body>
    <div class="main">
        <h2>LOGIN</h2>
        <form action="<?php echo $_SERVER['PHP-SELF']; ?>" method="post">
            <input type="text" name="user" id="">
            <input type="text" name="pass" id="">
            <input type="submit" name="themmoi" value="Đăng Nhập">
        </form>
    </div>
</body>

</html>