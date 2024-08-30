<?php
require_once "validator.php";
?>

<?php
  $chamado=array(); // criamos um array vazio pra por informações que queremos
  $arquivo= fopen("arquivo.hd","r"); //fopen é uma função nativa do php, ele vai abrir o arquivo, e o 'r' vai ler

  while(!feof($arquivo)) { //while é um loop,colocamos/ feof ele vai passar por todas as linhas, nosso código nunca vai ter fim porq a cada linha gerada, 
    // ele pula uma linha e assim a funçao nunca ia funcionar, ia ser falso
     // '!' para q assim nos retorne dando 'true' /vai repetir ate ser satisfeito
    $registro= fgets($arquivo); // criamos uma variavel chamada registro, para assim conseguirmos guardar nossas informações de cada linha
    $chamados[]=$registro;  //criamos outra variavel com o nome chamados com o indice vazio, e colocamos seu valor com um variavel registro
    //assim vamos armazenar o valor de cada linha em uma posição do array
  }
?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

      <div class="container">    
          <div class="row">

          <div class="card-consultar-chamado">
            <div class="card">
              <div class="card-header">
                Consulta de chamado
              </div>
            
              <div class="card-body">

              $array=['chamado1', 'chamado2', 'chamado3'];
              
              <?php foreach($chamados as $chamado){ ?> <!-- é um laço de de repetição, e o as é igual  ao apelido. usamos o foreach
              temos uma caixa com o nome chamados, nessa caixa sao guardados varios chamados. então chamados é um array gigantesco 
            que guarda cada chamado em uma posição. O foreach faz de cada chamado, um novo array --> 

              <?php
                $chamado_dados = explode('#', $chamado); // explode e # é pra separar as informações do chamado que é o array novo, que é gerado
                //pelo foreach a cada repetição.

                if(count($chamado_dados) < 3){ //é pra continuar (pular) mesmo se tiver menos q 3 dados 
                  continue;
                }
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[0]?></h5> <!-- a posição zero do array é o titulo -->
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[1]?></h6> <!-- a posição um do array é categoria-->
                  <p class="card-text"><?= $chamado_dados[2]?></p> <!-- a posição dois do array é a descrição -->

                </div>
              </div>

              <?php } ?>



                <div class="row mt-5">
                  <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>