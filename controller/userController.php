<?php

require("../db/connection.php");
if(isset($_POST['submit'])){ 

    $nome = $_POST['nome']; 
    $email =  strtolower($_POST['email']);
    $cpf = $_POST['cpf']; 
    $endereco = $_POST['endereco']; 
    $password = $_POST['password'];
    $user = strtolower($_POST['user']);

    $verificaUsuario = "select * from usuarios where usuario = '$user'";


    $verificado = mysqli_query($conn, $verificaUsuario); 

    $ver = mysqli_fetch_array($verificado); 
  
    if($ver['usuario'] == $user){ 
        echo "<script>alert('Usuário já existente na base de dados')</script>"; 
        echo "<script>window.location.href='../index.php'</script>";
    }

    $query = "insert into usuarios(nomeCompleto, email, cpf, endereco, pass,usuario) values( 
        '$nome', '$email','$cpf','$endereco','$password','$user'
        )";


        if(mysqli_query($conn, $query)){ 
            echo "<script>alert('cadastrado com sucesso')</script>"; 
            echo "<script>window.location.href='../index.php'</script>";
        }else{ 
            echo "err";
        }
    

}else{ 
    echo "<script> window.location.href='../index.php' </script>";
}