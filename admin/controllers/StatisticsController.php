<?php 
class StatisticsController{
    public $statidticModel;
    public function __construct(){
        $this->statidticModel = new Statistic();
    }
    public function showStatistic(){
        $bestSeller = $this->statidticModel->selectTop5ProductSoldHighly();
        require_once './views/dashboard.php';
    }
    public function __destruct(){

    }
}

?>