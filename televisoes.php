<?php 

include('view/header.php');
include('view/menu.php');
?>


<div class="col-100 bloco-imagens-texto">
    <div class="content" style="margin-left: 24%; float: left;">
        <div class="col-3 bloco-texto">
            <img src="./img/tv.jpg" width="260" height="250" alt="tv LG imagem" />
            <p><b>Televisao LG</b></p>
            <p>43 polegadas </br>
                R$ 1.850 a vista</br>
                ou 10x de R$ 190
            </p>
            <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="7">
                <input name="nome" style="display:none" value="Televisao LG">
                <input name="valor" style="display:none" value="1850">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
        </div>
        <div class="col-3 bloco-texto">
            <img src="./img/tvqled.png" width="260" height="250" alt="imagem tv samsung" />
            <p><b>TV samsung QLED</b></p>
            <p>55 polegadas </br>
                R$ 5.400 a vista </br>
                ou 10x de R$ 560
            </p>
            <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="8">
                <input name="nome" style="display:none" value="TV samsung QLED">
                <input name="valor" style="display:none" value="5400">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
        </div>
        <div class="col-3 bloco-texto">
            <img src="./img/tvsamsung.jpg" width="260" height="250" alt="ps4 imagem" />
            <p><b>Televisao Samsung 4K</b></p>
            <p>50 polegadas </br>
                R$ 2.400 </br>
                ou 10x de R$ 260
            </p>
            <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="9">
                <input name="nome" style="display:none" value="Televisao Samsung 4K">
                <input name="valor" style="display:none" value="2400">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
        </div>
    </div>
    <div class="content" style="margin-left: 24%; float: left;">
        <div class="col-3 bloco-texto">
            <img src="./img/philco4k.jpg" width="260" height="250" />
            <p><b>TV Philco 4k</b></p>

            <p>55 polegadas </br>
                R$ 2.100 </br>
                ou 10x de R$ 220
            </p>
            <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="10">
                <input name="nome" style="display:none" value="TV Philco 4K">
                <input name="valor" style="display:none" value="2100">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
        </div>
        <div class="col-3 bloco-texto">
            <img src="./img/lguhdtv.jpg" width="260" height="250" />
            <p><b>LG UHD TV</b></p>
            <p> 86 polegas - 4K </br>
                R$ 20.000,00 a vista </br>
                ou 10x de R$2000 sem juros
            </p>
            <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="11">
                <input name="nome" style="display:none" value="LG UHD TV">
                <input name="valor" style="display:none" value="20000">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
                
        </div>
        <div class="col-3 bloco-texto">
            <img src="./img/philco32.jpg" width="260" height="250" />
            <p><b>Philco</b></p>
            <p>
                32 polegadas </br>
                R$ 920 a vista- </br> ou 10x de R$ 92 sem juros
            </p>
            <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="12">
                <input name="nome" style="display:none" value="Philco 32">
                <input name="valor" style="display:none" value="920">
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
            <img alt="Puma" title="Puma" src="img/samsung.png" />
        </div>


        <script type="text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/jquery-migrate.js"></script>
        <script type="text/javascript" src="./js/slick.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        </body>


        </html>

        <?php

include('view/footer');
?>