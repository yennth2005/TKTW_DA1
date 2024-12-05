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

    public function deleteBlog($id)
    {
        $sql = "DELETE FROM blogs WHERE id = $id";
        $this->conn->query($sql);
    }

    public function insertBlog($title, $img, $description, $content)
    {
        $sql = "INSERT INTO blogs (title,img, description, content) VALUES ('$title','$img','$description','$content') ";
        $this->conn->query($sql);


    }

    public function updateBlog($id, $title, $img, $description, $content)
    {
        $sql = "UPDATE blogs SET `title` = '$title',`img` ='$img',`description` ='$description',`content` ='$content' WHERE `blogs` . `id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM blogs WHERE id='$id'";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetch();
        return $data;
    }


}

?>