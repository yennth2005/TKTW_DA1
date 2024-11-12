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
    <center><a href="?act=create-user" class="btn btn-warning" >Create User</a></center>
    <table class="table table-bordered border-primary">
        <tr>
            <td>User_ID</td>
            <td>Fullname</td>
            <td>Username</td>
            <td>Password</td>
            <td>Avatar</td>
            <td>Vai trò</td>
            <td>Thao tác</td>
        </tr>
        <?php 
        foreach($users as $user){?>
        <tr>
            <td><?php echo $user['user_id']?></td>
            <td><?php echo $user['fullname']?></td>
            <td><?php echo $user['username']?></td>
            <td><?php echo $user['password']?></td>
            <td><img src="<?php echo $user['avatar']?>" width="66px" alt=""></td>
            <td><?php echo $user['role']?></td>
            <td>
            <a href="?act=delete-user&id=<?=$user['user_id']?>" name="delete" class="btn btn-danger" onclick="xoa()">Xoá</a>
            <a href="?act=update-user&id=<?= $user['user_id']?>" class="btn btn-success">Sửa</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>