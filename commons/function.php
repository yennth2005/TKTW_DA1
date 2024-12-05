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
function sendResetPasswordMail($to, $resetCode)
{
    $subject = 'Yêu cầu đặt lại mật khẩu';
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
                <h2>Chào bạn!</h2>
                <p>Chúng tôi nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.</p>
                <p>Để hoàn tất quá trình, vui lòng sử dụng mã dưới đây:</p>
                <h3 style="color: #007BFF;">Mã đặt lại mật khẩu: <strong>' . $resetCode . '</strong></h3>
                <p>Hãy nhập mã vào trang đặt lại mật khẩu của chúng tôi để tiếp tục.</p>
                <p>Nếu bạn không yêu cầu thay đổi mật khẩu, vui lòng bỏ qua email này.</p>
                <p>Trân trọng,<br>Đội ngũ hỗ trợ</p>
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