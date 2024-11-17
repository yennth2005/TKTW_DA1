<?php 
class CommentController{
    public $commentModel;
    public function __construct(){
        $this->commentModel = new Comment();
    }
    public function list(){
        $comments = $this->commentModel->showComment();
        require './views/Comments/list.php';
        
    }
    public function viewDetail(){
        $id = $_GET['id-product'];
        $comment = $this->commentModel->showCommentByProduct($id);
        require './views/Comments/viewDetail.php';
    }
    public function delete(){
        $comment_id = $_GET['id-comment'];
        $product_id = $_GET['id-product'];
        $this->commentModel->deleteComment($comment_id,);
        header("Location: index.php?act=view-detail&id-product=$product_id");
    }
}
?>