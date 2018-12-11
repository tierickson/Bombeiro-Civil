<?php
require_once '../class/alunoDAO.php';

    $turma = new turma();
    $turma->idaluno = $_POST['idaluno'];
    $turma->materia_1 = $_POST['materia_1'];
    $turma->materia_2 = $_POST['materia_2'];
    $turma->materia_3 = $_POST['materia_3'];
    $turma->materia_4 = $_POST['materia_4'];
    $turma->materia_5 = $_POST['materia_5'];

    $turmadao = new alunoDAO();
    $turmadao->update($turma);

    header('location: ../index.professor.php?page=alfa');
?>
