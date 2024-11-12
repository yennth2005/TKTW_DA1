<?php 
    class ProductControllerAdmin{
        public $proAdminModel;
        public function __construct(){
            $this->proAdminModel=new ProductAdmin();
        }
        public function showPro(){
            // $cates=$this->proAdminModel->showCate();
            $products=$this->proAdminModel->show();
            require_once './views/Products/home.php';
        }
        public function create(){
            require_once './views/Products/create.php';

        }
        public function postCreate(){
            $upload='./uploads/'.$_FILES['avatar']['name'];
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $upload)) {
              echo "<h1>Uploaded</h1>";
              $avatarPro=$upload;
            } else {
              echo "<h1>Upload failed</h1>";
              return;
            }
            $proName = $_POST['name'];
            $proPrice = $_POST['price'];
            $idCate = $_POST['id_cate'];
            $nameCate = $_POST['cate_name'];
            $amount=$_POST['amount'];
            $description=$_POST['desc'];
            $avatar = $avatarPro;
            $this->proAdminModel->add($proName,$avatar,$proPrice,$amount,$idCate,$nameCate,$description);
            // $users = $this->proAdminModel->show();
            header("Location:?act=list-pro");
        }
        public function update(){
            $id=$_GET['id'];
            $product=$this->proAdminModel->find($id);
            require_once './views/Products/edit.php';

        }
        public function postPro(){
            $id=$_GET['id'];
            $proName = $_POST['name'];
            $proPrice = $_POST['price'];
            $idCate = $_POST['id_cate'];
            $nameCate = $_POST['cate_name'];
            $amount=$_POST['amount'];
            $description=$_POST['desc'];
            $product=$this->proAdminModel->find($id);
            $avatar=$product['product_img'];
            if(isset($_FILES['avatar'])){
                if($_FILES['avatar']['error']==UPLOAD_ERR_OK){
                    $upload="./uploads/". $_FILES["avatar"]["name"];
                    if(move_uploaded_file($_FILES['avatar']['tmp_name'],$upload)){
                        $avatar=$upload;
                    }
                }
            }else{
                $avatar=$product['product_img'];
            }
            $this->proAdminModel->edit($id,$proName,$avatar,$proPrice,$amount,$idCate,$nameCate,$description);
            header("Location: ?act=list-pro");
        }
        public function delete(){
            $id=$_GET['id'];
            $this->proAdminModel->delete($id);
            header("Location: ?act=list-pro");
        }
    }
?>