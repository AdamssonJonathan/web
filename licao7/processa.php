<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Processamento de formularios com  PHP</title>
<meta charset="utf-8" />

</head>

<body>
    <?php  
    $nome=$_GET['nome'];
    $idade=$_GET['idade'];
    if($nome =="" or $idade==""){
        print('Valores em branco; preencha por favor !');

    }
    else{

        print( "Seja Bem-Vindo <font color ='green'> $nome </font>!");
        //
        print( "Você tem <font color ='green'> $idade </font>");
    }
    ?>

</body>
<footer>
</footer>
</html>