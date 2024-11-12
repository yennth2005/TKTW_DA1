<?php 
class calculator{
    public $a;
    public $b;
    public function __construct($a,$b) {
        // echo "hello <br>";
        $this->a=$a;
        $this->b=$b;
    }
    public function plus(){
        return $this->a+$this->b;
    }
    public function minus(){
        return $this->a-$this->b;
    }
    public function multi(){
        return $this->a*$this->b;
    }
    public function device(){
        return $this->$this->a/$this->b;
    }
    // public function demoThis(){
    //     return $this;
    // }
    public function tinhtoan($pt){
        switch($pt){
            case '+': return $this->plus();
            case '-': return $this->minus();
            case '*': return $this->multi();
            case '/': return $this->device();
        }
    }
}
class CalculatorController{
    public $modelProduct;
    public function __construct() {
        // echo "hello <br>";
    }
    public function home() {
        echo "form nhập các tham số cần thiết";
        
        require_once './views/calculator.php';
    }
    public function process(){ 
        // echo "xử lí tính toán tại đây <br>";
        $error=array();
        if(isset($_POST['btn_submit'])){
            if($_POST['valueA']==null){$error['valueA']="Không được bỏ trống";}
            if($_POST['valueB']==null){$error['valueB']="Không được bỏ trống";}
            if($_POST['pheptinh']==null){$error['pheptinh']="Hãy chọn phép tính";}
            if(!empty($error)){
                require_once './views/calculator.php';
            }
            else if(empty($error)){
                $a=$_POST['valueA'];
                $b=$_POST['valueB'];
                $pt=$_POST['pheptinh'];
                $calc=new calculator($a,$b);
                $result= $calc->tinhtoan($pt);
                require_once './views/showresult.php';
            }

        }
            
        
    }
 }
    
?>