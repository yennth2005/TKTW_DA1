<?php ?>
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
    <h1>Cập nhật thông tin thành viên</h1>
    <form action="?act=post-update-user&id=<?= $user['user_id']?>" method="POST" enctype="multipart/form-data">
        <label for="">Họ tên</label>
        <input type="text" name="name" value="<?= $user['fullname']?>"> <br><br>
        <label for="">Tên đăng nhập</label>
        <input type="text" name="user" value="<?= $user['username']?>"><br><br>
        <label for="">Mật khẩu</label>
        <input type="password" name="pass" value="<?= $user['password']?>"><br><br>
        <label for="">Ảnh</label>
        <input type="file" name="avatar"><br><br>
        <label for="">Vai trò</label>
        <select name="role" id="">
            <option value=""></option>
            <option value="Admin" <?php if($user['role']=="Admin") echo "selected"?>>Admin</option>
            <option value="User"<?php if($user['role']=="User") echo "selected"?>>User</option>
        </select><br><br>
        <input type="submit" name="btn_submit" value="Cập nhật">
    </form>
</body>
</html>