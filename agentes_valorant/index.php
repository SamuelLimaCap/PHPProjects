<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
</head>
<body>
  <?php require "phplibs/header.php";
          headerPage();
      ?>
  <div id="Campeao"class="main pt-3 mt-2">

  <div class="mt-5 mx-auto  pt-2 pb-5 container bg-light colorDark rounded w-50">
    <?php require "phplibs/agentes.php";
      if (!isset($_GET["agentes"]) || $_GET["agentes"]=="inicio") {
        echo "<h3 class='text-center'>Selecione um agente</h2>".
        "<p class='text-justify'>Por favor, carregue esta página em qualquer navegador, <bold>EXCETO<bold> no firefox</p>";
      } else {
        $description = $data[$_GET["agentes"]];
        $title = strtoupper( $_GET["agentes"]);
        $image = $images[$_GET["agentes"]];
        
        echo 
        "<h3>".$title."</h3>".
        "<img id='img-agent' src='".$image."' alt='".$title."'>".
        "<p class='text-justify'>".$description."</p>";
      }
    ?>
  </div>

      <div class="container select-agent pt-5">
        <form action="index.php" method="get">
          <select name="agentes">
            <option value="raze">Raze</option>
            <option value="omen">Omen</option>
            <option value="sage">Sage</option>
            <option value="jett">Jett</option>
            <hidden><option value="inicio">Voltar a pagina inicial</option></hidden>
          </select>

          <br>
          <button type="submit" class="mt-3 btn btn-outline-danger font-weight-bold">
            Buscar
          </button>
        </form>
      </div>
  </div>



  <br>
  <br>
  <?php require "phplibs/footer.php";
                  footerPage();
              
              ?>
</body>
</html>