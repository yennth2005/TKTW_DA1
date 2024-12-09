<?php

// Hỗ trợ show bất kỳ data nào
function showArr($data)
{
    echo "<pre>";

    print_r($data);

    die;
}

// Kết nối CSDL qua PDO
function connect_db(){
    $hostname=DB_HOST;
    $dbname=DB_NAME;
    
    try{
        $cont=new PDO("mysql:host=$hostname;dbname=$dbname",DB_USERNAME,DB_PASSWORD);
        $cont->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // $cont->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $cont;
    }catch(PDOException $e){
        $e->getMessage();
        echo "connect-faile";
        // debug("connect-fail".$e->getMessage());
    }

}
// function post_pro(){
//     global $list_pro;
//     if(isset($_POST['btn_search'])){
//         $result =[];
//         foreach($list_pro as $array){
//             if(stripos($array['name'],$_POST['search'])!==false){
//                 $result[]=$array;
//             }
//         }return $result;
//     } return $list_pro;
//  }
function postuser(){
    global $users;
    if(isset($_POST['btn_search'])){
        $result=[];
        foreach($users as $user){
            if(stripos($user['username'],$_POST['search'])!==false){
                $result[]=$user;
            }
        }return $result;
    }return $users;
}
function check_login(){
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['role'] == 1){
            return;
        }
        if(stripos($_SERVER["REQUEST_URI"], '/admin/')==FALSE){
            return;
        }
    }
    header("location: ".BASE_URL."?act=login");
    exit();
}

function setsession($key, $value)
{
    //khoi tao session va gan gia tri cho no
    $_SESSION[$key] = $value;
}
function getsession($key)
{
    // kiem tra xem co ton tai session hay ko
    if (isset($_SESSION[$key])) {
        $value = $_SESSION[$key]; //gan vao mot bien de luu tru gia tri lai 1 lan
        unset($_SESSION[$key]); // Xóa thông báo sau khi lấy để chỉ hiển thị một lần
        return $value; // tra ve lai ket qua da gan truoc do
    } else {
        return null;
    }
}
function generateRandomNumber()
{
    // Tạo một số ngẫu nhiên từ 0 đến 999999
    $randomNumber = rand(0, 999999);

    // Đảm bảo số có 6 chữ số, nếu ít hơn thì thêm các số 0 phía trước
    return str_pad($randomNumber, 6, "0", STR_PAD_LEFT);
}
function sendResetPasswordMail($to, $resetCode)
{
    $subject = 'Mã Xác Minh Đặt Lại Mật Khẩu';
    $content = '
    <html>
    <head>
        <title>Yêu cầu đặt lại mật khẩu</title>
        <style>
            body { font-family: Arial, sans-serif; }
            .container { background-color: #f4f4f4; padding: 20px; }
            .content { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
            .footer { font-size: 12px; color: #777; text-align: center; padding: 10px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h2>Xin chào bạn!</h2>
                <p>Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn tại [Tên trang web]. Để giúp bạn hoàn tất quá trình này, vui lòng sử dụng mã xác thực bên dưới:</p>
                <h3 style="color: red;">Mã xác minh: <strong>' . $resetCode . '</strong></h3>
                <p> <b>Vui lòng nhập mã này vào trang đặt lại mật khẩu của chúng tôi để tiếp tục.</b></p>
                <p>Nếu bạn không thực hiện yêu cầu này, vui lòng bỏ qua email này. Tài khoản của bạn sẽ không bị ảnh hưởng.</p>
                <p>Cảm ơn bạn đã tin tưởng sử dụng dịch vụ của chúng tôi!</p>
                <p>Trân trọng,<br>Đội ngũ hỗ trợ Baby Store</p>
            </div>
            <div class="footer">
                <p>Đây là email tự động, vui lòng không trả lời.</p>
            </div>
        </div>
    </body>
    </html>
    ';

    // Gọi hàm sendMail để gửi email
    sendMail($to, $subject, $content);
}