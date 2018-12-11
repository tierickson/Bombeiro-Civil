<?php
 require_once 'Database.php';
 require_once 'turma.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turmaDAO
 *
 * @author Erickson
 */
class turmaDAO {
    
    
    
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

            $query->bindValue(':materia_1', $turma->materia_1);
            $query->bindValue(':materia_2', $turma->materia_2);
            $query->bindValue(':materia_3', $turma->materia_3);
            $query->bindValue(':materia_4', $turma->materia_4);
            $query->bindValue(':materia_5', $turma->materia_5);
            $query->execute();

        } catch(Exception $e) {
            die($e->getMessage());
        }
    } 
}
