<?php
 require_once('../class/professorDAO.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $professor = new professorDAO();
    
    try {
        $nome = $professor->login($email, $senha); 
        session_start();
        session_regenerate_id();
        $_SESSION['professor']['nome'] = $nome;
        $_SESSION['professor']['email'] = $email;    
    
    header("location: ../index.professor.php?page=alfa");   
    }
  catch(Exception $e) {
     header('location: ../login.professor.php?erro');
  }
?>
