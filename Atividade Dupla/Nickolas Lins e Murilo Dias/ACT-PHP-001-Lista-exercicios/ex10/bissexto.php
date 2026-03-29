<?php

function bissexto($ano){
    if(($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)){
        return true;
    } else {
        return false;
    }
}

$ano = $_POST["ano"];

if(bissexto($ano)){
    echo "O ano $ano é bissexto.";
} else {
    echo "O ano $ano não é bissexto.";
}

?>