<?php

   require_once('../class/alunoDAO.php');

    $idaluno = (int) $_GET['idaluno'];

    $alunodao = new alunoDAO();
    $alunodao->disable($idaluno);

    header('location: ../index.professor.php?page=alfa');
?>
