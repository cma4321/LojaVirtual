<?php 

include('view/header.php');
include('view/menu.php');
?>

    <div class="col-100 bloco-imagens-texto">
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto">
                <img src="./img/acer.jpg" width="260" height="250" alt="notebook acer" />
                <p><b>Notebook gamer ACER</b></p>
                <p>Gamer Acer Aspire Nitro 5 AN515-43-R9K7 - AMD Ryzen 5 8GB 1TB </br>
                    Antes: R$ 3000 </br> Depois: R$2600 </br>
                    10x de 260
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="6">
                <input name="nome" style="display:none" value="Notebook Gamer ACER">
                <input name="valor" style="display:none" value="2600">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>

            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/lenovo.jpg" width="260" height="250" alt="imagem lenovo" />
                <p><b>Lenovo Ideapad </b></p>
                <p> Ideapad S145 - 8ª Intel Core I3 4GB 1TB W10 15.6" - Prata </br>
                    R$ 2.750 a vista </br>
                    ou 10x de R$ 300
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="13">
                <input name="nome" style="display:none" value="Lenovo Ideapad">
                <input name="valor" style="display:none" value="2750">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/dell.jpg" width="260" height="250" alt="ps4 imagem" />
                <p><b>Dell Inspiron 4K</b></p>
                <p>Dell Inspiron I15-3583-A3XP - 8ª Intel Core I5 8GB 1TB15,6" W10 - Preto </br>
                    R$ 3.800 a vista </br>
                    ou 10x de R$ 420
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="14">
                <input name="nome" style="display:none" value="Dell Inspiron 4k">
                <input name="valor" style="display:none" value="3800">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
        <div class="content" style="margin-left: 24%; float: left;">
            <div class="col-3 bloco-texto">
                <img src="./img/aspire3.jpg" width="260" height="250" />
                <p><b>Acer Aspire 3</b></p>

                <p>Acer Aspire 3 - Intel Celeron 4GB 1TB Endless - preto </br>
                    R$ 2.050 a vista</br>
                    ou 10x de R$ 220
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="15">
                <input name="nome" style="display:none" value="Acer Aspire 3">
                <input name="valor" style="display:none" value="2050">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/dellgaming.jpg" width="260" height="250" />
                <p><b>Dell Gaming</b></p>
                <p> Notebook Gamer Dell G3-3590-A40P </br>
                    9ª Intel Core I5 8GB (Geforce GTX1050 com 3GB) 256GB SSD 15,6" W10
                    </br>
                    R$ 5.600,00 a vista </br>
                    ou 10x de R$600 sem juros
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="16">
                <input name="nome" style="display:none" value="Notebook Gamer Dell G3-3590-A40P">
                <input name="valor" style="display:none" value="5600">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
            <div class="col-3 bloco-texto">
                <img src="./img/hp.jpg" width="260" height="250" />
                <p><b>Philco</b></p>
                <p>
                    Notebook 240-G7 18W13LA - Processador i3 de 2.2ghz, 4gb de Memória, 128gb SSD de Armazenamento, Tela de 14" </br>
                    R$ 2500 a vista - </br> ou 10x de R$ 250 sem juros
                </p>
                <form action="controller/carinhoadd.php" method="get">
                <input type="number" value="1" name="quantidade">
                <input name="id" style="display:none" value="17">
                <input name="nome" style="display:none" value="Philco 240-G7">
                <input name="valor" style="display:none" value="2500">
                <button name="submit" type="submit">Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
    </div>

<?php 

include('view/footer.php');

?>
