<?php
    if(is_array($user)){
        extract($user);
}
?>
<div class="boxx"></div>
<div class="del">
    <form action="index.php?act=deleteuser" method="POST" enctype="multipart/form-data">
        <div class="box">
            <input class="hidden" type="hidden" name="id" value="<?php echo $ma_khach_hang ?>">
            <h2>Bạn chắc chắn muốn xóa? </h2>
            <input type="submit" value="Yes" name="delete">
            <input type="submit" value="No">

        </div>
    </form>
</div>