<?php

class DashboardController
{
    public $statidticModel;
    public function __construct()
    {
        $this->statidticModel = new Statistic();
    }
    // public function showStatistic(){
    //     $bestSeller = $this->statidticModel->selectTop5ProductSoldHighly();
    //     require_once './views/dashboard.php';
    // }
    public function dashboard()
    {
        $bestSellers = $this->statidticModel->selectTop5ProductSoldHighly();
        $revenueDatas = $this->statidticModel->getMonthlyRevenue();
        $totalCustomers = $this->statidticModel->totalCustomers();
        $totalOrders = $this->statidticModel->totalOrders();
        $totalRevenues = $this->statidticModel->totalRevenues();
        require_once './views/dashboard.php';
    }
}