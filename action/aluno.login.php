<?php

require_once('../class/alunoDAO.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$aluno = new alunoDAO();


try {
    $nome = $aluno->login($email, $senha);
    session_start();
    session_regenerate_id();

    $_SESSION['aluno']['nome'] = $nome;
    $_SESSION['aluno']['email'] = $email;

    header("location: ../index.aluno.php?idaluno=$nome");
} catch (Exception $e) {
    header('location: ../login.aluno.php?erro');
}
?>

