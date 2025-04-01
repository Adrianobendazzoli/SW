<?php 
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    if ($email == "aluno@email.com" && $senha == "1234"){
       
        //manda para autorizado.php
        $nome = "Aluno";
        header('location: painel/autorizado.php?nome ');
        
    }else{
        
        //manda para naoautorizado.php
        header('Location: painel/naoautorizado.php');
    }
?>