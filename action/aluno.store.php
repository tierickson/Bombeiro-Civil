<?php

require_once('../class/alunoDAO.php');

$aluno = new aluno();
$aluno->nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
$aluno->sobrenome = filter_var($_POST['sobrenome'], FILTER_SANITIZE_STRING);
$aluno->cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_STRING);
$aluno->usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
$aluno->tipo_sanguineo = filter_var($_POST['tipo_sanguineo'], FILTER_SANITIZE_STRING);
$aluno->nome_gerra = filter_var($_POST['nome_gerra'], FILTER_SANITIZE_STRING);
$aluno->senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$aluno->email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$alunodao = new alunoDAO();
$alunodao->store($aluno);
//------------------------------
$turma = new turma();
$turma->nome_turma = filter_var($_POST['nome_turma'], FILTER_SANITIZE_STRING);
$turmadao = new alunoDAO();
$turmadao->storeTurma($turma);
//------------------------------


header('location: ../index.professor.php');
?>