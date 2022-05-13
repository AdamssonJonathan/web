<!DOCTYPE html>

<html>
   
    <head>
   
    <title>Agrotec</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="windth=device-width, initial-scale=1.0"/>
    <meta name="description" content="Agrotec"/>
     <meta name="keywords" content="PHP,eco"/>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <?php
        date_default_timezone_set('America/Manaus');
        $Hora=date('H:i:s');
        $data=date("d/m/y");
        print "$data <br />";
        print "$Hora <br />"
    
        ?>

  
    <body>
       <div id="corpo-form">
        <form action="http://localhost/agrotec/controle/login.php" method="post">
            <h1>Entrar</h1>
            Login:<input name="nome" type="text" size="10" >
            Senha:<input name="senha" type="password" size="10">           
             <input type="submit" value="Enviar">

            </form>

        </form>
        </div>
    </body>
</html>