<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ex1.css">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <?php require "phplibs/header.php";
        headerPage();
    ?>

    <!-- Container principal -->
    <div class="container shadow p-3 mb-1 bg-white rounded ">
        <div class="center bg-light ">
            <img src="img/quiz2.jpg" class="img-fluid center" alt="Responsive image" width="100%">
        </div>

        <!-- Container questionario/resultado -->
        <div class="container bg-light pt-3 text-center " id="Questionario" >

            <?php require "Q&A.php";

                $count=0;
                $avaliacao = null;
                $s = $answer_template;

                for ($i=0; $i<10; $i++) {

                    if ($s["q".($i+1)] == $_POST["q".($i+1)]) {
                        $count++;
                    }

                }

                echo    "<h2>Resultado</h2>".
                        "<p> ".$count." de 10 questoes</p>".
                        $_POST["nome"]." sua pontuação foi <br><br>"; 
            
                if ($count<5) {
                    echo "<h2 class='text-danger'>regular</h2>";
                } else if ($count<7) {
                    echo "<h2 class='text-secondary'>bom</h2>";
                } else if ($count<9) {
                    echo "<h2 class='text-info'>ótimo</h2>";
                } else {
                    echo "<h2 class='text-success'>Mestre</h2>";
                }
            ?>

        </div>

        
    </div>

    <?php require "phplibs/footer.php";
        footerPage();
            
    ?>
</body>
</html>
