<?php 

include('view/header.php');
include('view/menu.php');
?>

    <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto">
                <img src="./img/iphone.jpg" width="260" height="250" alt="notebook iphone" />
                <p><b>Iphone XR</b></p>
                <p> 128GB </br>
                    Antes: <strike> R$ 5.000 </strike></br> Depois: R$ 4.500 </br>
                    ou 10x de 450
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="5">
                <input name="nome" style="display:none" value="Iphone XR">
                <input name="valor" style="display:none" value="4500">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>

            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/motorola.jpg" width="260" height="250" alt="imagem motorola" />
                <p><b>Moto G </b></p>
                <p> 1 TB </br>
                    Antes: <strike> R$ 1.200 </strike> </br>
                    Depois: R$ 1.080 </br>
                    ou 10x de R$ 108
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="2">
                <input name="nome" style="display:none" value="Celular Motorola">
                <input name="valor" style="display:none" value="1080">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
                
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/s20.jpg" width="260" height="250" alt="s20 imagem" />
                <p><b>Samsung S20 </b></p>
                <p>Galaxy S20 Cinza, com Tela Infinita de 6,2” - 128GB </br>
                    R$ 3.500</br>
                    ou 10x de 350
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="20">
                <input name="nome" style="display:none" value="Samsung S20">
                <input name="valor" style="display:none" value="3500">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto">
                <img src="./img/iphonese.jpg" width="260" height="250" />
                <p><b>iPhone SE </b></p>
                <p>Iphone SE - Apple 64GB - Branco 4,7</br>
                    R$ 2.900 </br>
                    ou 10x de R$ 290</br>
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="21">
                <input name="nome" style="display:none" value="Iphone SE">
                <input name="valor" style="display:none" value="2900">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/xiaomi.jpg" width="260" height="250" />
                <p><b>Xiaomi Mi 10</b></p>
                <p> Xiaomi Mi 10 Pro - 256GB - Azul </br>
                    R$ 4.600,00 a vista </br>
                    ou 10x de R$460 sem juros
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="22">
                <input name="nome" style="display:none" value="Xiaomi Mi 10 Pro">
                <input name="valor" style="display:none" value="4600">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/pixel.jpg" width="260" height="250" />
                <p><b>Google Pixel</b></p>
                <p> R$ 3.200 a vista</br>
                    ou 10x de R$320 sem juros </br>

                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="23">
                <input name="nome" style="display:none" value="Google Pixel">
                <input name="valor" style="display:none" value="3200">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
    </div>

<?php 

include('view/footer.php');
?>
