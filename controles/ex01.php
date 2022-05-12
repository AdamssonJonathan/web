<?php

$estoque =65;
date_default_timezone_set('America/Manaus');
$Hora=date('H:i:s');
$data=date("d/m/y");
print "Estoque : $estoque <br />";
print "$data <br />";
print "$Hora <br />";


if($estoque>=80){

    print("O estoque esta muito alto");

}
elseif($estoque >=70 and $estoque>80){

    print("O estoque esta alto");

}
elseif($estoque >=50 and $estoque>70){

    print("O estoque esta acima da media");

}
elseif($estoque >=20 and $estoque>50){

    print("O estoque normal");

}
else{
    print("O estoque está no nivel minimo");
}

?>