<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTANCIA MOTO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class = "moto">
<?php 
    class Moto{ //definição da classe moto//
        public $marca;  //usar o public pra fazer uma variavel//
        public $modelo;
        public  function pilotar(){ //fazer uma função pra ação da classe//
            echo "Atualmente, estou pilotando uma moto da  $this->marca, uma  $this->modelo";  //usar o "this-> é pra chamar a função//
        }
    }

   //isso é uma instancia da CLASSE MOTO//
    $minhamoto = new Moto();

    $minhamoto->marca = "Honda"; //atribui o valor para a MARCA//

    $minhamoto->modelo = "Honda CG 160 Titan"; //atribui o valor de o MODELO//


    $minhamoto->pilotar();  //CHAMA A FUNÇÃO, sáida : Atualmente, estou pilotando uma moto da Honda, uma Honda CG 160 Titan//
    ?>

</h1>

<img src="moto.webp" alt="" class = "foto" >


<h3>
    <?php
    class livro{ 
        public $titulo;   //OBS: SEMPRE USA PUBLIC//
        public $genero;
        public $autor;

        public function leitura(){
            echo "estou lendo um livro chamada $this->titulo, do genero $this->genero, do autor $this->autor";
        }
    }

    $meulivro = new livro();
    $meulivro->titulo = "Diario de um banana";
    $meulivro->genero = "comédia";
    $meulivro->autor = "Jeff Kinney";
$meulivro->leitura();
    ?>

</h3>







   
</html>