<div style="margin-left: 350px" class="container">
<div class="alert alert-success" role="alert">
    <h2>QUẢN LÝ LOẠI HÀNG</h2>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã loại</th>
            <th scope="col">Tên loại</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php foreach ($results as $key => $value) { ?>
            <tr>
                <th scope="row"><input type="checkbox"></th>
                <!-- <td><?php echo $value[''] ?></td> -->
                <td><?php echo $value['ma_loai'] ?></td>
                <td><?php echo $value['ten_loai'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="location.href='index.php?act=btn-edit&editId=<?php echo $value['ma_loai']; ?>'">Sửa</button>
                    <button type="button" class="btn btn-danger" onclick="
                    const result = confirm('Bạn có chắc chắn muốn xóa không?');
                    if(result){
                    location.href='index.php?act=list_category&deleteId=<?php echo $value['ma_loai']; ?>'
                    }">Xóa</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="actions" style="margin-top: 10px;">

    <a href="index.php?act=btn-add" type="button" class="btn btn-outline-secondary">Thêm mới</a>
</div>
</div>
</div>