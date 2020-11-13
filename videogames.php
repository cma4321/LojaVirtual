<?php 

include('view/header.php');
include('view/menu.php');
?>

    <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto">
                <img src="./img/ps4.jpg" width="260" height="250" alt="notebook acer" />
                <p><b>Playstation 4</b></p>
                <p>1 TB </br>
                    Antes: <strike> R$ 1.500 </strike></br> Depois: R$ 1.350 </br>
                    ou 10x de 140
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="3">
                <input name="nome" style="display:none" value="Playstation 4">
                <input name="valor" style="display:none" value="1350">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>

            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/xbox.jpg" width="260" height="250" alt="imagem lenovo" />
                <p><b>Xbox One X </b></p>
                <p> 1 TB </br>
                    Antes: <strike> R$ 3.000 </strike> </br>
                    Depois: R$ 2.600 </br>
                    ou 10x de R$ 300
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="4">
                <input name="nome" style="display:none" value="Xbox One X">
                <input name="valor" style="display:none" value="2600">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/switch.jpg" width="260" height="250" alt="ps4 imagem" />
                <p><b>Nintendo Switch</b></p>
                <p>R$ 3.400</br>
                    ou 10x de 370
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="45">
                <input name="nome" style="display:none" value="Nintendo Switch">
                <input name="valor" style="display:none" value="3400">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto">
                <img src="./img/ps5.jpg" width="260" height="250" />
                <p><b>Pré-Venda Playstation 5</b></p>

                <p>Nova geracao de consoles</br> RESERVE JA O SEU!! </br>
                    R$ 5.000 </br>
                    ou 10x de R$ 500</br>
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="445">
                <input name="nome" style="display:none" value="Playstation 5 Pre-venda">
                <input name="valor" style="display:none" value="5000">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/xboxsx.jpg" width="260" height="250" />
                <p><b>Pré-Venda Xbox Series X</b></p>
                <p> Nova geracao de consoles </br> RESERVE JA O SEU!! </br>
                    R$ 5.000,00 a vista </br>
                    ou 10x de R$500 sem juros
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="665">
                <input name="nome" style="display:none" value="Xbox Series X Pre-venda">
                <input name="valor" style="display:none" value="5000">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
    </div>



    <div class="col-100 bloco-logos">
        <div class="content">
            <div class="col-4">
                <img alt="logo" title="logo" src="img/logoxbox.png" width="225" height="225" />
            </div>
            <div class="col-4">
                <img alt="logo" title="logo" src="img/logodell.jpg" width="200" height="200" />
            </div>
            <div class="col-4">
                <br />
                <img alt="logo" title="logo" src="img/acer.png" />
            </div>
            <div class="col-4">
                <img alt="samsung" title="samsung" src="img/samsung.png" />
            </div>


            <script type="text/javascript" src="./js/jquery.js"></script>
            <script type="text/javascript" src="./js/jquery-migrate.js"></script>
            <script type="text/javascript" src="./js/slick.min.js"></script>
            <script type="text/javascript" src="./js/main.js"></script>
</body>


</html>

<?php 

include('view/footer.php');

?>
