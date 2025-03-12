<?php 
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    if ($email == "dri@email.com" && $senha == "1234"){
        //manda para autorizado.php
        header('Location: painel/autorizado.html');
    }else{
        //manda para naoautorizado.php
        header('Location: painel/naoautorizado.html');
    }
?>