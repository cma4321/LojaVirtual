<?php 
session_start();
if(isset($_SESSION['cart'])){ 
    echo "<script>alert('COMPRA FINALIZADA COM SUCESSO')</script>";
    echo "<script>alert('OBRIGADO')</script>";
    unset($_SESSION['cart']);
    echo "<script>window.location.href='../'</script>";
}else{ 
    echo "<script>alert('COMPRA NÃO REALIZADA: Sem produtos no carrinho')</script>";
    echo "<script>window.location.href='../'</script>";

}