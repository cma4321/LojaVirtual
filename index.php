<?php
include 'view/header.php';
?>

    <div class="col-100">
        <div class="slider-principal">
            <img src="./img/banner.jpg" />
        </div>
    </div>
    <div class="col-100">
        <div class="content texto-destaque">
            <h1>Loja Virtual, <strong>OFERTAS</strong> do dia.</h1>
            <p>Promoção imperdível: os produtos mais vendidos da nossa loja com 10% de desconto!</p>
    </div>
    </div>
    <?php
$query = "select * from produtos where idProduto = 1";
$db = mysqli_query($conn, $query);
$array = mysqli_fetch_array($db);

echo '  <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/motorola.jpg" alt ="celular imagem">
                <p><b>' . $array['nome'] . '</b></p>
                <p><strike>Antes: R$ ' . $array['precoantes'] . '</strike> </br>
                    Depois: R$ ' . $array['precodepois'] . '
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="' . $array['idProduto'] . '">
                <input name="nome" style="display:none" value="' . $array['nome'] . '">
                <input name="valor" style="display:none" value="' . $array['precodepois'] . '">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>';
?>
            <?php
$query = "select * from produtos where idProduto = 2";
$db = mysqli_query($conn, $query);
$array = mysqli_fetch_array($db);

echo '<div class="col-3 bloco-texto bloco-imagem">
                <img src ="./img/monitor.jpeg" alt = "imagem monitor">
                <p><b>' . $array['nome'] . '</b></p>
                <p><strike>Antes: R$ ' . $array['precoantes'] . '</strike> </br> Depois: R$ ' . $array['precodepois'] . '
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="' . $array['idProduto'] . '">
                <input name="nome" style="display:none" value="' . $array['nome'] . '">
                <input name="valor" style="display:none" value="' . $array['precodepois'] . '">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>';

?>
   <?php
$query = "select * from produtos where idProduto = 3";
$db = mysqli_query($conn, $query);
$array = mysqli_fetch_array($db);

echo ' <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/ps4.jpg" alt = "ps4 imagem">
                <p><b>' . $array['nome'] . '</b></p>
                <p><strike>Antes: R$ ' . $array['precoantes'] . ' </strike> </br> Depois: R$ ' . $array['precodepois'] . '
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="' . $array['idProduto'] . '">
                <input name="nome" style="display:none" value="' . $array['nome'] . '">
                <input name="valor" style="display:none" value="' . $array['precodepois'] . '">
                <button name="submit" name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>';
?>


          <?php
$query = "select * from produtos where idProduto = 4";
$db = mysqli_query($conn, $query);
$array = mysqli_fetch_array($db);

echo '<div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto bloco-imagem">
                <img src="./img/xbox.jpg" width="20" height = "20"/>
                <p><b>' . $array['nome'] . '</b></p>

                <p><strike>Antes: R$ ' . $array['precoantes'] . '</strike> </br> Depois: R$ ' . $array['precodepois'] . '
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="' . $array['idProduto'] . '">
                <input name="nome" style="display:none" value="' . $array['nome'] . '">
                <input name="valor" style="display:none" value="' . $array['precodepois'] . '">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>';
?>

<?php
$query = "select * from produtos where idProduto = 5";
$db = mysqli_query($conn, $query);
$array = mysqli_fetch_array($db);

echo '<div class="col-3 bloco-texto">
                <img  src="./img/iphone.jpg" width="260" height="250"/>
                <p><b>' . $array['nome'] . '</b></p>
                <p> <strike>Antes: R$ ' . $array['precoantes'] . '</strike></br> Depois: R$ ' . $array['precodepois'] . '
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="' . $array['idProduto'] . '">
                <input name="nome" style="display:none" value="' . $array['nome'] . '">
                <input name="valor" style="display:none" value="' . $array['precodepois'] . '">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>';
?>

            <?php
$query = "select * from produtos where idProduto = 6";
$db = mysqli_query($conn, $query);
$array = mysqli_fetch_array($db);

echo '<div class="col-3 bloco-texto">
                <img src="./img/acer.jpg" width="260" height = "250"/>
                <p><b>' . $array['nome'] . '</b></p>
                <p><strike> Antes: R$ ' . $array['precoantes'] . ' </strike> </br> Depois: R$ ' . $array['precodepois'] . '
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="' . $array['idProduto'] . '">
                <input name="nome" style="display:none" value="' . $array['nome'] . '">
                <input name="valor" style="display:none" value="' . $array['precodepois'] . '">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
    </div>';

?>

            <?php

            include('view/footer.php');
?>

