<?php 

class DashboardController
{
    public $statidticModel;
    public function __construct(){
        $this->statidticModel = new Statistic();
    }
    public function dashboard() {
        $bestSellers = $this->statidticModel->selectTop5ProductSoldHighly();
        $revenueDatas = $this->statidticModel->getMonthlyRevenue();
        $totalCustomers = $this->statidticModel->totalCustomers();
        $totalOrders = $this->statidticModel->totalOrders();
        $totalRevenues= $this->statidticModel->totalRevenues();
        $viewHighest= $this->statidticModel->selectTopViewHighest();
        require_once './views/dashboard.php';
    }
}