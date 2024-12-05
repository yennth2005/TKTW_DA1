<?php

class BlogModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connect_db();
    }

    public function getAllBlogs()
    {
        $sql = "SELECT * FROM blogs";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>