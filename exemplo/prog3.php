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
            $dia= date("d/m/y", time());
            $base = 5.5;
            $altura = 10;
            $area= $base * $altura;

        ?>
        <p align="center">hoje é dia
           <?php echo $dia; ?> 
           <?php echo $area?></p>


    </body>
</html>