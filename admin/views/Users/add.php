<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Đăng kí thành viên</h1>
    <form action="?act=post-create-user" method="POST" enctype="multipart/form-data">
        <label for="">Họ tên</label>
        <input type="text" name="name"> <br><br>
        <label for="">Tên đăng nhập</label>
        <input type="text" name="user"><br><br>
        <label for="">Mật khẩu</label>
        <input type="password" name="pass"><br><br>
        <label for="">Ảnh đẹp</label>
        <input type="file" name="avatar"><br><br>
        <label for="">Vai trò</label>
        <select name="role" id="">
            <option value=""></option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select><br><br>
        <input type="submit" name="btn_submit" value="Đăng kí">
    </form>
</body>

</html>