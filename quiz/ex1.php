<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ex1.css">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <script src="js/header.js"></script>
    <title>Document</title>
</head>
<body>
    
    <?php require "phplibs/header.php";
        headerPage();
    ?>


    <div class="container shadow p-3 mb-1 bg-white rounded ">
        <div class="center bg-light ">
            <img src="img/quiz2.jpg" class="img-fluid center" alt="Responsive image" width="100%">
        </div>

        <div class="container bg-light " id="Questionario" >
            <form action="resultado.php" method="post">

            <?php 
                include "Q&A.php";
                for ($j=0; $j<10; $j++) {
                    echo "
                    <p id='Questao".($j+1)."'>
                    <br>
                    <h5>Questao ".($j+1).":</h5>
                    <p>".$questions[$j]."</p>
                    <div class='opcoes'> </div>";

                                    
                    for ($i=1; $i<=4;$i++) {
                        $answer = ${"r".($j+1)};
                        echo "<div class='custom-control custom-radio pb-1'>
                        <input  name=q".($j+1)." id='".$j.$i."' type='radio' value=r".$i." class='custom-control-input' required/>
                        <label class='custom-control-label' for='".$j.$i."'>".$answer[$i-1]."</label>
                        </div>";
                    }
                }
            ?>
        </div>

    </div>


        <div class="container bg-light p-3 rounded ">
            <div class="form-row">
                <div class="col-sm"> 
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" required> </div>
                <div class="col"> 
                    <p style="padding:7px;"></p>
                    <button type="submit" class="btn btn-primary">Enviar respostas</button> </div>
                <div class="col"></div>
            </div>

            </form>
        </div>

            <?php require "phplibs/footer.php";
                footerPage();
            
            ?>
    </div>

</body>
</html>