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
    Login :<input name="login" type="text" size="10">
    <br>
    Senha :<input name="pass" type="password" size="10">
    <br>
    <input type="submit" value="Acessar">
    <br>
    <input type="reset" value="limpar">
    <br>
    </form>

    <?php

    if($_POST){

        $login=$_POST['login'];
        $pass=$_POST['pass'];
        if(empty($login) or empty($pass)){
            print("Invalido");
        }
        else{
            if($login=="Adam" and $pass=="123"){
            print("Login efetuado com sucesso!");
            }
            else{
                print("Login ou senha incorreto");
            }
        }
    }
    ?>

</body>
<footer>
</footer>
</html>