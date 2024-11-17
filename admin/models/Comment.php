<?php
class Comment
{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    public function showComment()
    {
        $sql = "SELECT p.product_name, p.product_id, MIN(c.date) as cu_nhat , MAX(c.date) as moi_nhat, COUNT(*) as so_luong
             FROM comments c JOIN products p ON c.product_id = p.product_id 
             GROUP BY p.product_name, p.product_id
             HAVING so_luong>0
             ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
    public function showCommentByProduct($idPro)
    {
        $sql = "SELECT * FROM comments cmt JOIN customer c ON cmt.customer_id = c.customer_id WHERE cmt.product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$idPro]);
        return $stmt->fetchAll();
    }
    public function deleteComment($comment_id)
    {
        try {
            
            $sql = "DELETE FROM comments WHERE comments.comment_id = ?  ";
            $stmt = $this->conn->prepare($sql);
            if (is_array($comment_id)) {
                foreach ($comment_id as $id) {
                    $stmt->execute([$id]);
                }
            } else {
                $stmt->execute([$comment_id]);
            }
        } catch (PDOException $e) {
            throw $e;

        }

    }
    public function __destruct()
    {
        $this->conn = null;
    }
}
?>