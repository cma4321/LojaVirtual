<?php 

session_start(); 

include('db/connection.php');


$query = "drop database projectphp"; 


if(mysqli_query($conn, $query)){ 

    echo "banco de dados deletado";
    unset($_SESSION['user']);
    header("refresh:1;url= ./");
}else{ 
    echo "erro ao deletar banco de dados";
}