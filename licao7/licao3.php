<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Processamento de formularios com  PHP</title>
<meta charset="utf-8" />
<meta name="viewport" content="windth=device-width, initial-scale=1.0"/>
<meta name="description" content="Primeiro exemplo PHP"/>
<meta name="keywords" content="PHP,eco"/>

</head>

<body>
    <form  method="post">

    <br>
    Primeiro valor :<input name="a" type="text" size="5">
    <br>
    Segundo Valor :<input name="b" type="int" size="5">
    <br>
    <input type="submit" value="Enviar">
    <br>
    <input type="reset" value="limpar">
    <br>
    </form>
    <?php
    if($_POST){

        $v1=$_POST['a'];
        $v2=$_POST['b'];
        if(is_numeric($v1) and is_numeric($v2)){
            $res=$v1*$v2;
        print("A multiblicação resultou em:$res");
        }
        else{
            print("Valor invalido!");
        }
    }
    ?>

</body>
<footer>
</footer>
</html>