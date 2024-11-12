<?php 
// echo "danh sách";
// require './'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <!-- <form action="?act=search-user">
        <input type="text" name="search">
        <input type="submit" name="btn_search" value="Search">
    </form> -->
    <center><a href="?act=create-pro" class="btn btn-warning" >Create User</a></center>
    <table class="table table-bordered border-primary">
        <tr>
            <td>Pro_ID</td>
            <td>Pro_name</td>
            <td>Pro_price</td>
            <td>Pro_img</td>
            <td>Amount</td>
            <td>Description</td>
            <td>Thao tác</td>
        </tr>
        <?php 
        foreach($products as $user){?>
        <tr>
            <td><?php echo $user['product_id']?></td>
            <td><?php echo $user['product_name']?></td>
            <td><?php echo $user['product_price']?></td>
            <td><img src="<?php echo $user['product_img']?>" width="66px" alt=""></td>
            <td><?= $user['amount']?></td>
            <td><?= $user['description']?></td>
            <td>
            <a href="?act=delete-pro&id=<?=$user['product_id']?>" name="delete" class="btn btn-danger" onclick="xoa()">Xoá</a>
            <a href="?act=update-pro&id=<?= $user['product_id']?>" class="btn btn-success">Sửa</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>