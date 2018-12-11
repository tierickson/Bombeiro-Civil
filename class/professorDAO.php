<?php

require_once('Database.php');
require_once('professor.php');

class professorDAO {

    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function findByEmail($email) {
        try {
            $query = $this->conn->prepare("SELECT * FROM professor WHERE email = :email");
            $query->bindValue(':email', $email);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
        public function login($email, $senha): string {
        $professor = $this->findByEmail($email);
        if(password_verify($senha, $professor->senha)) {
            return $professor->nome;
        } else {
            throw new Exception();
        }
    }
    
    public function store(professor $professor) {
        try {
            $query = $this->conn->prepare(
                "INSERT INTO professor (nome, email, senha)
                    VALUES (:nome, :email, :senha)");

            $query->bindValue(':nome', $professor->nome);
            $query->bindValue(':email', $professor->email);
            $query->bindValue(':senha', password_hash($professor->senha, PASSWORD_DEFAULT));
           

            $query->execute();
            
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

}

?>