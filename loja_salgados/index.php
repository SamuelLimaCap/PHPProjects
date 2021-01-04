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



  <div id="select" class="whiteTransparent">

  <form id="Opcoes" action="confirmacao.php" class="container d-flex flex-wrap" method="POST">

  <div class="container bg-dark m-2 mx-5" style="height:8px; color:transparent;">a</div>


  <?php require "phplibs/salgados.php";

  // CHECKBOX EM PHP

  $lista = array_keys($salgados);
    foreach($lista as $salgado) {
      echo "    <div class='input m-4 cardzin'>

      <input id='$salgado' class='top-0' type='checkbox' name='$salgado' id=''>
      <label class=' p-1 m-1' style='height:97%;'for='$salgado'>
      <br>
      

      <div class='p-1 row'>
        <div class='col-4 p-1 m-2'>
          <img class='d-block' src='".$images[$salgado]."' alt='' srcset='' width='100px'>
        </div>
        <div class='col p-2'>
            <h4>".$titulos[$salgado]."</h4>
            $descricao[$salgado]
         </div>
         
          <div class='p-2'>
            <p class=''><b>Preço: ".$salgados[$salgado]."</b></p>
            Qtd: <input  class='bg-transparent border-light w-25' type='number' name='qtd".$salgado."' id='qtd".$salgado."' value='0' placeholder='Qtd' min='0'>
            <p class='float-end' style='font-size:12px'>   Clique pra </br>selecionar o <br>produto</p>
          </div>

      </div>
      </label>
  </div>";
    }

  //fim da CHECKBOX EM PHP
  ?>
 
 <div class="container bg-dark m-1 mx-5" style="height:8px; color:transparent;">a</div>

  <div class="container bg-light p-3 border-1 border-dark border rounded-2">
    Nome: <input class="mx-3" type="text" name="nome" id="" required> <br>
    Telefone:  <input class="" type="number" name="telefone" id="" placeholder="11 99999999" min="00" max="99999999999" required> <br>

    Entregar em casa? 
    <select name="entregar" id="">
      <option value="sim">Sim, eu pago pra entregar</option>
      <option value="nao">Nao, eu mesmo vou buscar</option>
    </select>
    <button class=" mx-1 mt-1 btn btn-outline-info"type="submit">Enviar</button>
  </div>
  <br>

  </form>

  
  </div>

  <?php require "phplibs/footer.php";
                  footerPage();
              
              ?>
</body>
</html>