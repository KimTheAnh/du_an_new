<?php
if(is_array($user)){
    extract($user);
}
?>
<div style="margin-left: 350px" class="container">
    <h2>Sửa thông tin khách hàng</h2>

    <form action="index.php?act=updateuser" method="POST" >
        <div class="form-body">
            <div style="width:50%;">
                <div class="form-label">
                    <h3>Tên đăng nhập</h3>
                    <input type="text" name="ten_khach_hang" value="<?php echo $ten_khach_hang;?>" placeholder="Tên đăng nhập" required>
                </div>

                <div class="form-label">
                    <h3>Mật khẩu</h3>
                    <input type="text" name="mat_khau" value="<?php echo $mat_khau;?>" placeholder="Mật khẩu">
                </div>
                <div class="form-label">
                    <h3>Vai trò</h3>
                    <select name="chuc_nang" >
                        <?php
                        if($chuc_nang == 1) {
                            echo '<option value="1" selected>Nhân viên</option>';
                            echo '<option value="2">Khách hàng</option>';
                        }else if($chuc_nang == 0){
                            echo '<option value="1">Nhân viên</option>';
                            echo '<option value="2" selected>Khách hàng</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div style="width:50%;">
                <div class="form-label">
                    <h3>Email</h3>
                    <input type="email" name="email" value="<?php echo $email;?>" placeholder="Email">
                </div>

                <div class="form-label">
                    <h3>Số điện thoại</h3>
                    <input type="number" name="so_dt" value="<?php echo $so_dt;?>" placeholder="Số điện thoại">
                </div>

                <div class="form-label">
                    <h3>Địa chỉ</h3>
                    <input type="text" name="dia_chi" value="<?php echo $dia_chi;?>" placeholder="Địa chỉ">
                </div>
            </div>

        </div>

        <div class="them">
            <input class="reset" type="hidden" name="id" value="<?php echo $ma_khach_hang;?>">
            <input class="reset" type="submit" name="update_user" value="Update">
            <input  type="reset" value="Nhập lại" class="reset">
            <a href="index.php?act=list_user"><input type="button" value="Danh sách" class="reset"></a>

        </div>
        <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo '<p style="color:red">'.$thongbao.'</p>';
        ?>
    </form>
</div>