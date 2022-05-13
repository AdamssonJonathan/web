<!DOCTYPE html>

<html>
   
    <head>
   
    <title>Distribuidora FX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="windth=device-width, initial-scale=1.0"/>
    <meta name="description" content="Distribuidora"/>
     <meta name="keywords" content="PHP,eco"/>
     <?php
        date_default_timezone_set('America/Manaus');
        $Hora=date('H:i:s');
        $data=date("d/m/y");
        print "$data <br />";
        print "$Hora <br />"
    
       
        
        ?>

  
    <body>
       
        <form action="http://localhost/distribuidorafx/controle/login.php" method="post">
            
            <br>
            <center>
            Login:<input name="nome" type="text" size="30" >
            <br>
            Senha:<input name="senha" type="password" size="30">
            <br>
            <input type="submit" value="Enviar">
            <br>
            </center>
            </form>
  

        </form>
        
    </body>
</html>