<?php 
session_start(); 

$id = $_GET['id'];
$quantidade = $_GET['quantidade'];
$nome = $_GET['nome'];
$valor = $_GET['valor'];


$_SESSION['cart'] = array();
$_SESSION['cart'][$id] = array('nome' => $nome, 'quantidade' => $quantidade, 'preco' => $valor);


echo '<script>window.location.href="../index.php"</script>';


