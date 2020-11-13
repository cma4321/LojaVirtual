<?php 

include("dbschema.php");
include("insert.php");


$conn = mysqli_connect("localhost", "php", "123") or die("Erro ao conectar-se com banco de dados"); 


$createDb = "create database projectphp";

$productInsert = false; 

if(mysqli_query($conn, $createDb)){ 
    echo "Criando banco de dados...";
    echo "<br>";
    echo "banco de dados conectado com sucesso<br>";
    echo "Aguarde por favor!";
    echo "<script>window.location.reload()</script>";

}else{ 
    $conn = mysqli_connect("localhost", "php", "123", "projectphp"); 
}
if(mysqli_query($conn, $user)){ 
    echo "criando tabela de usuários...<br>";
    sleep(3);
    //echo "<script>window.location.reload()</script>";

}

if(mysqli_query($conn, $produto)){ 
    echo "criando tabela de produtos...<br>";
   // echo "<script>window.location.reload()</script>";
    sleep(3);
}else{ 
    $productInsert = true; 
}

//insert list 
if($productInsert == false){ 
if(mysqli_query($conn, $insertProdutos)){ 
    echo "Inserindo produtos no banco de dados através de arquivo...<br>";
    sleep(3);
    echo "<script>window.location.reload()</script>";
}
    if(mysqli_query($conn, $insertProdutos2)){ 
        echo "Inserindo produto 2 no banco de dados através de arquivo...<br>";
        sleep(3);
        echo "<script>window.location.reload()</script>";
    }
        if(mysqli_query($conn, $insertProdutos3)){ 
            echo "Inserindo produto 3 no banco de dados através de arquivo...<br>";
            sleep(1);
            echo "<script>window.location.reload()</script>";
        }
        


        
            if(mysqli_query($conn, $insertProdutos4)){ 
                echo "Inserindo produto 4 no banco de dados através de arquivo...<br>";
                sleep(1);
                echo "<script>window.location.reload()</script>";
            }
            

         
                if(mysqli_query($conn, $insertProdutos5)){ 
                    echo "Inserindo produto 5 no banco de dados através de arquivo...<br>";
                    sleep(1);
                    echo "<script>window.location.reload()</script>";
                }
                

                    if(mysqli_query($conn, $insertProdutos6)){ 
                        echo "Inserindo produto 6 no banco de dados através de arquivo...<br>";
                        sleep(1);
                        echo "<script>window.location.reload()</script>";
                    }
                    sleep(5);
                   

                    }


                    