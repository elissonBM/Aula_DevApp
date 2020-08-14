<?php

function teste()
{
    $num = 0;
    $r = 0;
    $e = 0;

    $num = readline("informe um numero\n"); 
    
    while($num < 0 )
    {
        $num = readline("informe um numero\n"); 
    }

    $e = pow($num, $num);
    $r = sqrt($num);
    echo("potencia: $e\n");
    echo("raiz: $r");


}
teste();

?>