<?php 
class ProductController{
    public $proModel;
    public function __construct(){
        $this->proModel=new Product();
    }
    public function showList(){
        $cates=$this->proModel->showCate();
        $products=$this->proModel->show();
        require_once './views/home.php';
    }
    public function category(){
        $id=$_GET['id'];
        $list=$this->proModel->showCate();
        $cate=$this->proModel->showCateHome($id);
        $products=$this->proModel->show();
        // require_once './views/category.php'
        include 'views/category.php';

    }
    public function desc(){
        $id=$_GET['id'];
        $cates=$this->proModel->showCate();
        $pro=$this->proModel->findDesc($id);
        include 'views/descProduct.php';
    }
    // public function search(){
    //     $pro=$this->proModel->show();  
    //         if(isset($_POST['search'])){
    //         if(isset($_POST['btn_search'])){
    //             $result=[];
    //             foreach($pro as $li){
    //                 if(stripos($li['product_name'],$_POST['search'])!==false){
                        
    //                 $result[]=$li;
    //             }
    //         }
    //         }
           
        
    //     }
        
    // }
}
?>