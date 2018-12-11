<?php

require_once('Database.php');
require_once ('aluno.php');
require_once ('turma.php');


/**
 * Description of alunoDAO
 *
 * @author Erickson
 */
class alunoDAO {

    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    
    
    public function findAll() {
        try {
            $query = $this->conn->prepare(
                    "SELECT aluno.idaluno, aluno.nome, aluno.nome_gerra,aluno.cpf ,turma.nome_turma,
                turma.materia_1, turma.materia_2,turma.materia_3,turma.materia_4, turma.materia_5
                FROM aluno INNER JOIN turma on
                (aluno.idaluno = turma.idaluno)");
            $query->execute();
            $alunos = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $alunos[] = $row;
            }
            return $alunos;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function find($idaluno) {
        try {
            $query = $this->conn->prepare(
                    "SELECT aluno.email, aluno.nome, aluno.sobrenome, aluno.cpf,aluno.nome_gerra,aluno.tipo_sanguineo ,turma.nome_turma,
                turma.materia_1, turma.materia_2,turma.materia_3,turma.materia_4, turma.materia_5
                FROM aluno INNER JOIN turma on
                (aluno.idaluno = turma.idaluno) 
                WHERE aluno.idaluno = :idaluno and aluno.ativo =1");

            $query->bindValue(':idaluno', $idaluno);
            $query->execute();

            return $aluno = $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostraTurma($nome_turma) {
        try {
            $query = $this->conn->prepare(
                    "SELECT aluno.idaluno, aluno.nome, 
                    aluno.nome_gerra,aluno.cpf ,turma.nome_turma,
                     turma.materia_1, turma.materia_2,
                    turma.materia_3,turma.materia_4, turma.materia_5 
                     FROM aluno INNER JOIN turma on(aluno.idaluno = turma.idaluno)
                     WHERE turma.nome_turma = :nome_turma and aluno.ativo =1");

            $query->bindValue(':nome_turma', $nome_turma);
            $query->execute();
            $alunos = [];

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $alunos[] = $row;
            }
            return $alunos;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    

    public function store(aluno $aluno) {
        try {
            $query = $this->conn->prepare(
                    "INSERT into aluno ( nome, sobrenome, cpf, usuario, tipo_sanguineo, nome_gerra, senha, email)
                     VALUES(:nome,:sobrenome, :cpf,:usuario, :tipo_sanguineo, :nome_gerra,:senha,:email);");

            $query->bindValue(':nome', $aluno->nome);
            $query->bindValue(':sobrenome', $aluno->sobrenome);
            $query->bindValue(':cpf', $aluno->cpf);
            $query->bindValue(':usuario', $aluno->usuario);
            $query->bindValue(':tipo_sanguineo', $aluno->tipo_sanguineo);
            $query->bindValue(':nome_gerra', $aluno->nome_gerra);
            $query->bindValue(':senha', password_hash($aluno->senha, PASSWORD_DEFAULT));
            $query->bindValue(':email', $aluno->email);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function storeTurma(turma $turma) {
        try {
            $query = $this->conn->prepare(
                    "INSERT into turma(nome_turma, idaluno)
                     VALUES(:nome_turma, LAST_INSERT_ID());
                     ");

            $query->bindValue(':nome_turma', $turma->nome_turma);

            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function findByEmail($email) {
        try {
            $query = $this->conn->prepare("SELECT * FROM aluno WHERE email = :email");
            $query->bindValue(':email', $email);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update(turma $turma) {
        try {
            $query = $this->conn->prepare(
                    "UPDATE turma SET 
                    materia_1 = :materia_1,
                    materia_2 = :materia_2,
                    materia_3 = :materia_3,
                    materia_4 = :materia_4,
                    materia_5 = :materia_5
                    WHERE idaluno = :idaluno");

            $query->bindValue(':idaluno', $turma->idaluno);
            $query->bindValue(':materia_1', $turma->materia_1);
            $query->bindValue(':materia_2', $turma->materia_2);
            $query->bindValue(':materia_3', $turma->materia_3);
            $query->bindValue(':materia_4', $turma->materia_4);
            $query->bindValue(':materia_5', $turma->materia_5);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
//disable para "apaga o usuario", Não apaga, mais para de mostra o usuario;
    public function disable($id) {
        try {
            $query = $this->conn->prepare(
                    "UPDATE aluno SET ativo = 2 
                WHERE idaluno = :idaluno");

            $query->bindValue(':idaluno', $id);
            $query->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
     public function login($email, $senha): string {
        $aluno = $this->findByEmail($email);
        if(password_verify($senha, $aluno->senha)) {
            return $aluno->idaluno;
        } else {
            throw new Exception();
        }
    }
    

}
