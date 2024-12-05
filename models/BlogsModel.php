<?php

class BlogModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connect_db();
    }

    public function getAllBlog()
    {
        $sql = " SELECT * FROM blogs ";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBlogById($id)
    {
        $sql = "SELECT * FROM blogs WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>