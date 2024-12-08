<?php
class CustomerController
{
    public $customerModel;
    public function __construct()
    {
        $this->customerModel = new Customer();
    }
    public function list()
    {
        // echo "Danh sách user";
        //B1: lấy danh sách user từ db 
        $customers = $this->customerModel->all();
        // debug($customers);
        //B2: gọi views listUser
        include './views/Users/list.php';
    }
    public function postCreate()
    {
        $uploadDir = __DIR__ . '/../../uploads/Customer/';
        $fileName = basename($_FILES['image']['name']);
        $uploadFile = $uploadDir . $fileName;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "<h1>Uploaded</h1>";
            $relativePath = "uploads/Customer/" . $fileName;
            $image = $relativePath;
            echo "<p>Image URL: <a href='$image'>$image</a></p>";
        } else {
            echo "<h1>Error uploading file</h1>";
            return; 
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $create_at = date("Y-m-d H:i:s");
        $role = $_POST['role'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->customerModel->insert($name, $email, $hashedPassword, $image, $address, $phone, $role, $create_at);
        header('Location: ?act=list-user');
        exit(); 
    }
    public function create()
    {
        require_once './views/Users/create.php';
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->customerModel->deleteComments($id);
        $this->customerModel->delete($id);

        header(header: "Location:" . BASE_URL_ADMIN . "?act=list-user");
    }
    public function update()
    {
        $id = $_GET['id'];
        $customer = $this->customerModel->find($id);
        require_once './views/Users/update.php';
    }
    public function postUpdate()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $id = $_GET['id'];
        $customer = $this->customerModel->find($id);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $create_at = date("Y-m-d H:i:s");
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $image = $customer['image'];
        $password = $customer['password'];
        if (isset($_POST['password']) && $_POST['password']) {
            $pass = $_POST['password'];
            $password = $pass;
        } else {
            $password = $customer['password'];

        }
        if (isset($_FILES['image'])) {
            if ($_FILES['name']['error'] == UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../uploads/Customer/';
                $fileName = basename($_FILES['image']['name']);
                $uploadFile = $uploadDir . $fileName;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    // echo "<h1>Uploaded</h1>";
                    $relativePath = "uploads/Customer/" . $fileName;
                    $image = $relativePath;
                    // echo "<p>Image URL: <a href='$images'>$images</a></p>";
                } else {
                    echo "<h1>Error uploading file</h1>";
                }
            }
        } else {
            $image = $customer['image'];
        }
        ;

        $this->customerModel->edit($id, $name, $email, $password, $image, $address, $phone, $role, $create_at);
        header("Location:" . BASE_URL_ADMIN . "?act=list-user");
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