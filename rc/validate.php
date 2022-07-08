<?php 
    $password = $_POST['password'];
    $login = $_POST['login'];

    if(!($password == "123" && $login == "aluno")){
        header("location:error.php");
    }else{
        header("location:main.html");
    }
?>