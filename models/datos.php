<?php 

$nombres =
[
    // EQUIPO HTML/CSS
    "HTML5/CSS3"=>["pepe","manolo","alberto"],

    // EQUIPO JAVASCRIPT
    "Javascript"=>["manoli","roberto","maria"],

    // EQUIPO PHP
    "PHP"=>["raquel","pepito","marcos"],

    // EQUIPO JSON/XML
    "Json/XML"=>["lorenzo","pilar","mariano"],

    // EQUIPO PYTON
    "Pyton"=>["federico","marta","ramon"],

    // EQUIPO JAVA
    "Java"=>["yaiza","melanie","toni"],

    // EQUIPO SASS/LESS
    "Sass/Less"=>["julia","tomeu","antonio"],

    // EQUIPO LARAVEL
    "Laravel"=>["jose","marco","felix"]
];


// SI HAY MENOS GENTE DE LA QUE ELIGES EN UN EQUIPO LO SELECCIONA AUTOMATICAMENTE



for($i = 0; $i <= 7;$i++){

    if($_POST["cantidad0".$i] < count($nombres[$_POST['select0'.$i]])){


        // te avisa de que hay mas personas en el equipo
        echo('HAY MAS TRABAJADORES EN '. $_POST['select0'.$i]." le buscaremos un trabajador aleatoriamente" .'<br><br>');

        
        echo($nombres[$_POST['select0'.$i]][rand(0,2)]."<br><br>");



    }

    else if($_POST["cantidad0".$i] >= count($nombres[$_POST['select0'.$i]])){ 

        echo('este es tu equipo de '.$_POST['select0'.$i]."<br>");

        echo("<pre>");
        print_r($nombres[$_POST['select0'.$i] ]) ;
        echo("</pre><br>");
    }

}




?>