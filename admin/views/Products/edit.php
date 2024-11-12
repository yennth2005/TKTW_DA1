<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cập nhật sản phẩm</h1>
    <form action="?act=post-update-pro&id=<?= $product['product_id']?>" method="POST" enctype="multipart/form-data">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name" value="<?= $product['product_name']?>"> <br><br>
        <label for="">Giá</label>
        <input type="text" name="price" value="<?= $product['product_price']?>"><br><br>
        <label for="">Số lượng</label>
        <input type="text" name="amount" value="<?= $product['amount']?>"><br><br>
        <label for="">Mã loại</label>
        <select name="id_cate" id="">
            <option value=""></option>
            <option value="1" <?php if($product['cate_id']=='1') echo 'selected'?>>1</option>
            <option value="2" <?php if($product['cate_id']=='2') echo 'selected'?>>2</option>
            <option value="3" <?php if($product['cate_id']=='3') echo 'selected'?>>3</option>
        </select>
        <label for="">Tên loại</label>
        <select name="cate_name" id="">
            <option value=""></option>
            <option value="Phone" <?php if($product['name_cate']=='Phone') echo 'selected'?>>Phone</option>
            <option value="Laptop" <?php if($product['name_cate']=='Laptop') echo 'selected'?>>Laptop</option>
            <option value="Tablet" <?php if($product['name_cate']=='Tablet') echo 'selected'?>>Tablet</option>
        </select>
        <label for="">Ảnh</label>
        <input type="file" name="avatar"><br><br>
        <label for="">Mô tả</label>
        <input type="text" name="desc" value="<?= $product['description']?>"><br><br>
        <input type="submit" name="btn_submit" value="Cập nhật">
    </form>
</body>
</html>