<?php

$letra ='';
$v=false;
switch($letra){
    case'a':
    print("<p> Você escolheu a letra 'a' ");
    break;
    case'b' |'B':
    print("<p> Você escolheu a letra 'b' OU 'B' !");
    break;
    case'c':
    print("<p> Você escolheu a letra 'C'");
    break;
    case'xy':
    print("<p> Você escolheu a letra 'XY'");
    break;
    default:
    print("<p> Escolha uma letra ou expressão");
    $v= true;
    break;

}
print ("Finaliznado <br />");
while($v==true){


print("Finalizando ");
break;
}

?>