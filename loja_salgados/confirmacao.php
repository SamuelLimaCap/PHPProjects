<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SalgadosZun</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/index.css">
  
  <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

  <link href="js/index.js">
</head>
<body>
  <?php require "phplibs/header.php";
            headerPage();
    ?>

<div id="null "class="main pt-3 mt-2"></div>

<br>
<br>

  <div class="container text-center bg-light border-1 border-success rounded-2 border" id="Opcoes">

    <?php require "phplibs/salgados.php";

      $lista = array_keys($salgados);
      $itemsEscolhidos = array();
      $chaves = array();

      echo     
        "<p><b>Cliente: </b> ".$_POST["nome"]." -- <b>Telefone: </b> ".$_POST["telefone"]."</p>
        <b>Confira seu pedido</b> <br> <br>";

       
      foreach ($lista as $salgado) {
        if (array_key_exists($salgado,$_POST)) {
          if ($_POST[$salgado] == "on") {

            array_push($chaves, $salgado);

            if ($_POST["qtd".$salgado]==NULL) {
              $itemsEscolhidos[$salgado] = 0;
            } else {
              $itemsEscolhidos[$salgado] = $_POST["qtd".$salgado];
            }
          }
        }
      }


      $total =0;
      $desconto=0;
      echo "<div class='row'>";

      foreach ($chaves as $item) {
        echo "<div class='col border-1 border text-center'>";
        echo "<img class='d-block m-auto ' src='".$images[$item]."' alt='' srcset='' width='100px'>";
        echo "<p>".$titulos[$item]."</p> <p><b> Qtd: ".$itemsEscolhidos["$item"]."</b></p> Valor unitario: R$ ".$salgados["$item"]." </p>";
        $total = $total + $itemsEscolhidos["$item"] * ($salgados["$item"]);
        echo "</div>";
      }

      echo "</div>";

      if (sizeof($chaves)==3) {
        $total = $total - $total*0.03;
        $desconto = $total*0.03;
      } else if (sizeof($chaves)>3) {
        $total = $total - $total*0.05;
        $desconto = $total*0.05;
      }

      if ($_POST["entregar"]=="sim") {
        $total = $total + 5;
      }

      echo "<b>Desconto: </b>R$ ".$desconto."<br>";
      echo "<b>Total a ser pago: </b>R$ ".$total."<br>";
    ?>

    <a href="index.php"><button class="btn btn-danger float-start w-25" >Voltar</button>
    
    <button class="btn btn-info float-end w-25">OK</button> <br> <br>
  </div>

  <?php require "phplibs/footer.php";
                    footerPage();
                
                ?>
</body>
</html>