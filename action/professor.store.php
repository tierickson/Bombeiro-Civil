<?php
    require_once('../class/professorDAO.php');

    $professor = new professor();
    $professor->nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $professor->email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $professor->senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);

    $professordao = new professorDAO();
    $professordao->store($professor);

    header('location: ../login.professor.php');
?>


