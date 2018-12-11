<?php
    require('class/alunoDAO.php');
    
    $alunodao = new alunoDAO();
    $aluno = $alunodao->findByEmail($_GET['email']);

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header('content-type: application/json; charset=utf-8');
    
    echo json_encode($aluno ? true : false);
?>