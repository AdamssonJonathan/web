<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Login</title>
<meta charset="utf-8" />

</head>

<body>
    <?php  
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];
    if($nome=="" or $senha==""){
        print('Valores em branco; preencha por favor !');

    }
    else{

        if($nome=="fernando" and $senha=="espiral22"){
            print("Login efetuado com sucesso!");
            ?> <meta http-equiv='REFRESH' content='2;URL=/distribuidorafx/setor/seleciona.php'> <?php
            }
            else{
                print("Login ou senha incorreto");
               
            }
    }
    ?>

</body>
<footer>
</footer>
</html>