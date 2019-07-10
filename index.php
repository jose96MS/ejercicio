<!-- PHP 7-->
<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- LINKS EXTERNOS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- FontAwesome -->
</head>
<body>
    
<!-- HEADER -->

    <header>
       <h2>ELIJA LOS TRABAJADORES Y SU SECCION</h2>
    </header>

<!-- SECTION -->
<?php 

$secciones = array('HTML5/CSS3','Javascript','PHP','Json/XML','Pyton','Java','Sass/Less','Laravel');

?>


    <section>
        <article>
        <form action="models/datos.php" method="POST">

        <?php

        // FUNCION PARA HACER 7 IMPUTS Y SELECTS
        for($n = 0; $n < 8; $n++ ){
        echo("<select name=select0$n id=> ");
    
        // FUNCION PHP PARA SACAR TODA LA LISTA DE LAS SECCIONES Y METERLAS EN UN SELECT
        for($i = 0; $i < 8;$i++){
            echo(" <option value=$secciones[$i]>$secciones[$i]</option>");
            }

           
        echo("</select>");
        echo("<select type=number name=cantidad0$n id=>
        
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>

        </select><br><br>");
    }
        ?>

<button type="submit" > PEDIR </button>
        </form>
        </article>
    </section>

<!-- FOOTER -->

    <footer></footer>

</body>
</html>