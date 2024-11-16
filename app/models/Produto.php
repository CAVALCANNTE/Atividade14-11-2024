<?php
class Produto {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getTeclados() {
        $stmt = $this->db->query("SELECT * FROM teclados");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>