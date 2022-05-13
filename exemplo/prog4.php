<!DOCTYPE html>
<html>
    <head>
    <title>Desenvolvimento de websites com PHP</title>
     <meta charset="utf-8" />
        <meta name="viewport" content="windth=device-width, initial-scale=1.0"/>
       <meta name="description" content="Primeiro exemplo PHP"/>
        <meta name="keywords" content="PHP,eco"/>
    </head>
    <body>
        <?php
           $time="Flamengo";
           $ano="1983";
           $frase1 ="O $time é o melhor time do mundo";
           $frase2 ="O $time foi campeão em $ano";

        ?>
        <p align="center"> <?php echo date("d/m/y") ?>
           <?php echo "<h3> $frase1 </h3>"; ?> 
           <?php echo "<h3> $frase2 </h3>"; ?> 

    </body>
</html>