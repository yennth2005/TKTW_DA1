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