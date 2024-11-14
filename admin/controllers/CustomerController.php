<?php
class CustomerController {
    public $customerModel;
    public function __construct(){
        $this->customerModel=new Customer();   
    }
    public function list(){
        // echo "Danh sách user";
        //B1: lấy danh sách user từ db 
        $customers=$this->customerModel->all();
        // debug($customers);
        //B2: gọi views listUser
        include './views/Users/list.php';
    }
    public function postCreate() {
        $uploadFile="../uploads/Customer/".$_FILES['image']['name'];
        if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadFile))echo "<h1>Uploaded</h1>";
        $images=$uploadFile;
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $image = $images;
        $address= $_POST['address'];
        $phone= $_POST['phone'];
        $role=$_POST['role'];
        $this->customerModel->insert($name,$email,$password,$image,$address,$phone,$role);
        // $customers=$this->customerModel->all();
        header('Location: ?act=list-user');
    }
    public function create() {
        require_once './views/Users/create.php';
    }
    public function delete(){
        $id=$_GET['id'];
        $this->customerModel->delete($id);
        header(header: "Location:".BASE_URL_ADMIN."?act=list-user");
    }
    public function update(){
        $id=$_GET['id'];
        $customer = $this->customerModel->find($id);
        require_once './views/Users/update.php';
    }
    public function postUpdate(){
        $id=$_GET['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $address= $_POST['address'];
        $phone= $_POST['phone'];
        $role=$_POST['role'];
        $customer= $this->customerModel->find($id);
        $image=$customer['image'];
        if(isset($_FILES['image'])){
            if($_FILES['name']['error']==UPLOAD_ERR_OK){
                $uploadFile = "../uploads/Customer/".$_FILES['image']['name'];
                if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadFile)){
                    $image=$uploadFile;
                }
            }
        }else{
            $image=$customer['image'];
        };
        $this->customerModel->edit($id, $name, $email, $password, $image, $address, $phone, $role);
        header("Location:".BASE_URL_ADMIN."?act=list-user");
    }
    // public function searchUser(){
    //     $customers=$this->customerModel->all();
    //     if(isset($_POST['btn_search'])){
    //         $result=[];
    //         foreach($customers as $user){
    //             if(stripos($user['username'],$_POST['search'])!==false){
    //                 $result[]=$user;
    //             }
    //         }return $result;
    //     }return $customers;
    //     header("Location:".BASE_URL_ADMIN."?act=list-user");
    // }
}

?>
