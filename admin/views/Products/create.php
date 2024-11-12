<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm sản phẩm</h1>
    <form action="?act=post-create-pro" method="POST" enctype="multipart/form-data">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name"> <br><br>
        <label for="">Giá</label>
        <input type="text" name="price"><br><br>
        <label for="">Số lượng</label>
        <input type="text" name="amount"><br><br>
        <label for="">Mã loại</label>
        <select name="id_cate" id="">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <label for="">Tên loại</label>
        <select name="cate_name" id="">
            <option value=""></option>
            <option value="Phone">Phone</option>
            <option value="Laptop">Laptop</option>
            <option value="Tablet">Tablet</option>
        </select>
        <label for="">Ảnh</label>
        <input type="file" name="avatar"><br><br>
        <label for="">Mô tả</label>
        <input type="text" name="desc"><br><br>
        <input type="submit" name="btn_submit" value="Đăng kí">
    </form>
</body>
</html>