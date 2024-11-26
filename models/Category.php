<?php
class Category
{
    public $connect;
    public function __construct()
    {
        $this->connect = connect_db();
    }
    public function show()
    {
        $sql = "SELECT * FROM `categories`";
        $stmt = $this->connect->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }


}
?>