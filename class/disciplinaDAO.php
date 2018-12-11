<?php
require_once('Database.php');
require_once ('disciplina.php');

class disciplinaDAO {
    
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }
  public function mostraDisciplina() {
        try {
            $query = $this->conn->prepare(
                    "SELECT * FROM disciplina");
            $query->execute();
            $disciplinas = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $disciplinas[] = $row;
            }
            return $disciplinas;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
