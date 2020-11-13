<?php
session_start();
if (isset($_GET['submit']) and isset($_SESSION['user'])) {

    $id = $_GET['id'];
    $quantidade = $_GET['quantidade'];
    $nome = $_GET['nome'];
    $valor = $_GET['valor'];

    if ($quantidade <= 0) {
        echo '<script>alert("Quantidade incorreta! Não é possível adicionar no carrinho")</script>';
        echo '<script>window.location.href="../index.php"</script>';
    } else {

        $_SESSION['cart'][$id] = array('nome' => $nome, 'quantidade' => $quantidade, 'preco' => $valor, 'id' => $id);
        echo '<script>alert("Produto adicionado no carrinho!!")</script>';

        echo '<script>window.location.href="../index.php"</script>';
    }
} else {

    echo '<script>alert("Erro ao adicionar produto: Caminho incorreto ou necessidade de login")</script>';

    echo '<script>window.location.href="../index.php"</script>';

}
