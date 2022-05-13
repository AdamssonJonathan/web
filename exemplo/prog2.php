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
            $data_de_hoje = date("d/m/y", time());
           

        ?>
        <p align="center">hoje é dia
           <?php echo $data_de_hoje; ?></p>

    </body>
</html>