<?php
class State {
    public $conn;

    public function __construct() {
        $this->conn = connect_db(); // Kết nối tới cơ sở dữ liệu
    }

    public function __destruct() {
        $this->conn = null; // Đóng kết nối
    }

    public function show() {
        $sql = "SELECT * FROM states";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function delete($id) {
        $sql = "DELETE FROM states WHERE state_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]); // Truyền tham số an toàn
    }

    public function find($id) {
        $sql = "SELECT * FROM states WHERE state_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]); // Thực thi với tham số an toàn
        return $stmt->fetch();
    }

    public function add($state_name) {
        $sql = "INSERT INTO states (state_name) VALUES (?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$state_name]); // Thực thi với tham số an toàn
    }

    public function edit($state_id, $state_name) {
        $sql = "UPDATE states SET state_name = ? WHERE state_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$state_name, $state_id]); // Thực thi với tham số an toàn
    }
}
?>
