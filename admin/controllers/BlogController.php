<?php

class BlogController{
    public $BlogModel;

    public function __construct(){
        $this->BlogModel = new BlogModel()
    }

    public function showAllBlog() {
        $post = $this->BlogModel->getAllBlogs();

        include "./views/Blogs/listBlogs.php"
    }
}

?>