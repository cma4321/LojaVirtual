<?php 
session_start();
require("../db/connection.php");
$usuario = strtolower($_POST['usuario']); 
$senha = $_POST['senha']; 


$query = "select * from usuarios where usuario = '$usuario'"; 

$result = mysqli_query($conn, $query) or die("Invalid query or connection"); 

$array = mysqli_fetch_array($result);

if($array['usuario'] == $usuario and $array['pass'] == $senha){ 
    echo "<script>alert('Logado com sucesso!')</script>"; 
    $_SESSION['user'] = $array['usuario'];
    echo "<script>window.location.href='../index.php'</script>";
}else{ 
    echo "<script>alert('Usuário e/ou senha incorretos!')</script>"; 
    echo "<script>window.location.href='../index.php'</script>";


}