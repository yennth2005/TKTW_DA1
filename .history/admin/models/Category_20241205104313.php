<?php

class CategoryModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connect_db();
    }

    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    //xóa
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM categories WHERE category_id = $id";
        $this->conn->query($sql);

    }

    //thêm
    public function insertCategory($category_name)
    {
        $sql = "INSERT INTO categories (category_name) VALUES ('$category_name') ";
        $this->conn->query($sql);


    }

    public function updateCategory($id, $category_name, $image)
    {
        $sql = "UPDATE categories SET `category_name` = '$category_name',`image` ='$image' WHERE `categories` . `category_id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM categories WHERE category_id='$id'";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetch();
        return $data;
    }
}


?>