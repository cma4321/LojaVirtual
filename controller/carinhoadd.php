<?php
session_start();
if (isset($_GET['submit'])) {

    $id = $_GET['id'];
    $quantidade = $_GET['quantidade'];
    $nome = $_GET['nome'];
    $valor = $_GET['valor'];

    $_SESSION['cart'][$id] = array('nome' => $nome, 'quantidade' => $quantidade, 'preco' => $valor, 'id' => $id);

    echo '<script>window.location.href="../index.php"</script>';
} else {

    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    echo '<script>window.location.href="../index.php"</script>';

}
