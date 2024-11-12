<?php
class UserController {
    public $userModel;
    public function __construct(){
        $this->userModel=new User();   
    }
    public function list(){
        echo "Danh sách user";
        //B1: lấy danh sách user từ db 
        $users=$this->userModel->all();
        // debug($users);
        //B2: gọi views listUser
        require_once './views/Users/list.php';
    }
    public function postCreate() {
        $uploadFile="./uploads/".$_FILES['avatar']['name'];
        if(move_uploaded_file($_FILES['avatar']['tmp_name'],$uploadFile))echo "<h1>Uploaded</h1>";
        $avatar=$uploadFile;
        $fullnameAdd=$_POST['name'];
        $usernameAdd=$_POST['user'];
        $passwordAdd=$_POST['pass'];
        $roleAdd=$_POST['role'];
        $avatarAdd=$avatar;
        $this->userModel->insert($fullnameAdd,$usernameAdd,$passwordAdd,$avatarAdd,$roleAdd);
        // $users=$this->userModel->all();
        header('Location: ?act=list-user');
    }
    public function create() {
        require_once './views/Users/add.php';
    }
    public function delete(){
        $id=$_GET['id'];
        $this->userModel->delete($id);
        header("Location:".BASE_URL_ADMIN."?act=list-user");
    }
    public function update(){
        $id=$_GET['id'];
        $user=$this->userModel->find($id);
        require_once './views/Users/update.php';
    }
    public function postUpdate(){
        $id=$_GET['id'];
        $fullnameEdit = $_POST['name'];
        $usernameEdit = $_POST['user'];
        $passwordEdit = $_POST['pass'];
        $roleEdit = $_POST['role'];
        $user= $this->userModel->find($id);
        $avatar=$user['avatar'];
        if(isset($_FILES['avatar'])){
            // $avatar=$user['$avatar'];
            if($_FILES['avatar']['error']==UPLOAD_ERR_OK){
            $target="./uploads/". $_FILES["avatar"]["name"];
            if(move_uploaded_file($_FILES['avatar']['tmp_name'], $target)){
                // echo "File upload thành công";
                $avatar= $target;
            }}
        }else{
            // $avatar=$user['$avatar'];
            $avatar=$user['avatar'];
        }
        

        $this->userModel->update($id, $fullnameEdit, $usernameEdit, $passwordEdit, $avatar, $roleEdit);

        header("Location:".BASE_URL_ADMIN."?act=list-user");
    }
    // public function searchUser(){
    //     $users=$this->userModel->all();
    //     if(isset($_POST['btn_search'])){
    //         $result=[];
    //         foreach($users as $user){
    //             if(stripos($user['username'],$_POST['search'])!==false){
    //                 $result[]=$user;
    //             }
    //         }return $result;
    //     }return $users;
    //     header("Location:".BASE_URL_ADMIN."?act=list-user");
    // }
}

?>
