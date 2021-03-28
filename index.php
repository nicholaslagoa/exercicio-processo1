<?php
function seculoAno($ano){
	if ($ano <= 0){
        echo'Ano negativo e nulo não permitidos';
	}else if($ano <= 100){
        echo 'Século 1\n';
	}else if ($ano % 100 == 0){
        echo 'Século ' . $ano / 100;
    }else{
        echo 'Século ', floor($ano / 100) + 1;
    }
}
$ano = 2097;
echo SeculoAno($ano);