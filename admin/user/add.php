
<div style="margin-left: 350px" class="container">
    <h2>Nhập thông tin khách hàng</h2>

    <form action="index.php?act=add_user" method="POST" >
        <div class="form-body">

            <div style="width:50%;">
                <div class="form-label">
                    <input type="text" name="ten_khach_hang" placeholder="Tên đăng nhập" required="Vui lòng không bỏ trống ô này">
                </div>

                <div class="form-label">
                    <input type="text" name="mat_khau" placeholder="Mật khẩu">
                </div>
                <div class="form-label">
                    <select name="chuc_nang" >
                        <option value="1">Nhân viên</option>
                        <option value="2">Khách hàng</option>
                    </select>
                </div>
            </div>

            <div style="width:50%;">
                <div class="form-label">
                    <input type="email" name="email" placeholder="Email">
                </div>

                <div class="form-label">
                    <input type="number" name="so_dt" placeholder="Số điện thoại">
                </div>

                <div class="form-label">
                    <input type="text" name="dia_chi" placeholder="Địa chỉ">
                </div>
            </div>

        </div>

        <div class="them">
            <input class="reset" type="submit" name="themmoi" value="Thêm mới">
            <input  type="reset" value="Nhập lại" class="reset">
            <a href="index.php?act=list_user"><input type="button" value="Danh sách" class="reset"></a>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!=""))
            echo '<p style="color:red">'.$thongbao.'</p>';
        ?>
    </form>
</div>