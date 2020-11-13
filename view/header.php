<!DOCTYPE html>
<?php
session_start();
//nosso include de conexão com o banco
require "db/connection.php";
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="utf-8"/>
    <link href="main.css" rel="stylesheet" type="text/css"/>
    <link href="slick.css" rel="stylesheet" type="text/css"/>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Loja Virtual</title>
</head>
<body>

    <header class="menu-principal">
        <main>

            <div class="header-1">

                <div class="logo">
                    <img src="img/loja.logo4.png" alt="imagem logo"/>
                </div>

            </div>



                <div class="redes-sociais">
                    <div class="busca">
                     <input placeholder="Search Something" type="text" />
                    </div>
                    <ul>
                        <li>
                            <a href="">
                                <img src="./img/rss.png" />
                            </a>
                        </li>
                        <li>
                            <a href="https://pt-br.facebook.com/">
                                 <img src="./img/face.png" />
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/">
                                <img src="./img/tw.png"/>
                            </a>
                        </li>
                    </ul>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href="./">Inicio</a>
                    </li>
                    <li>
                        <a href="sobrenos.php">Sobre Nos</a>
                    </li>
                    <li>
                        <a href="faleconosco.php">Fale Conosco</a>
                    </li>
                    <li>
                        <a href="produtos.php">Produtos</a>
                    </li>


                </ul>
            </div>

            <div>
                <link href="main.css" rel="stylesheet" type="text/css"/>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post" action="./controller/userController.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Nome Completo</b></label>
      <input type="text" placeholder="Enter nome" name="nome" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="CPF"><b>CPF</b></label>
      <input type="text" placeholder="Enter CPF" name="cpf" required>

      <label for="endereco"><b>Endereco</b></label>
      <input type="text" placeholder="Enter Endereco" name="endereco" required>

      <label for="CPF"><b>Usuario</b></label>
      <input type="text" placeholder="Enter Usuario" name="user" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
<!-- <a href="controller/logout.php"> <button onclick="document.getElementById('id02').style.display='block'" style='width:auto;'>Login</button></a> -->
<?php
if ($_SESSION['user'] == null) {
    echo "<button onclick=" . "document.getElementById('id02').style.display='block'" . " style='width:auto;'>Login</button>";
} else {
    echo "<button onclick=" . "logout()" . " style='width:auto;'>" . $_SESSION['user'] . "</button>";
}
?>
        </button>

        <div id="id02" class="moda2">

        <form class="modal-content animate"  action="./controller/loginController.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Moda2">&times;</span>
      <img src="img/img_avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="usuario" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="senha" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

    </div>

    <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div> -->
  </form>
</div>
        <button onclick="<?php

if (isset($_SESSION['user'])) {
    echo "document.getElementById('id03')";
} else {
    echo "document.getElementById('id02')";
}

?>.style.display='block'" style="width:auto;">Carrinho</button>
<div id="id03" class="moda3">

  <form class="moda3-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Moda">&times;</span>
    </div>

    <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="finalizar.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">


            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
      </form>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <a href="controller/finalizar.php" ><input type="button" value="Continue to checkout" class="btn"></a>

    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <?php
$total;
foreach ($_SESSION['cart'] as $quant) {
    $total += $quant['quantidade'];
}

echo '<b>' . $total . '</b>
        </span>
      </h4>
      <!-- <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p> -->';
echo '<table>
      <thead>
      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
      </tr>
      </thead>';

echo '
            <tbody>';
foreach ($_SESSION['cart'] as $arr) {
    echo '
            <tr>
              <td style="text-align: center">' . $arr['nome'] . '</td>
              <td style="text-align: center">R$' . $arr['preco'] . '</td>
              <td style="text-align: center">' . $arr['quantidade'] . 'x</td>
              <td style="text-align: center"><a href="controller/removerproduto.php?id=' . $arr['id'] . '" "><button type="button">Remover</button></a></td>
            </tr>';
}
echo '
            </tbody>

            </table>';

?>
      <hr>
      <p>Total <span class="price" style="color:black"><b>R$
      <?php
$fullprice;
foreach ($_SESSION['cart'] as $price) {
    $fullprice += ($price['preco'] * $price['quantidade']);
}

echo $fullprice;
?>
      </b></span></p>
    </div>
  </div>
</div>
</div>


    <div class="container" style="background-color:#f1f1f1">
      <!-- <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
</div>
        </div>



    </main>

    
    