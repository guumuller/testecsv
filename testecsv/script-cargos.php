<?php

//identificar para abrir abrir
//w= escrita | r= leitura
$arquivo = fopen('cargos.csv','r');



//contador de registros
$contador = 0;

//laço de rapetição dos dados
while ($linha = fgetcsv($arquivo, 1000, ",")) {
    //teste para verificar os dados em fiormato de array

    /*
    echo '<pre>';
    print_r($linha);
    echo'</pre>';
    */
    if ($contador > 0 ){
        echo "CARGO: ".$linha[1]." NUM DE DIGITOS: ".$linha[2].'<hr>';
    }

    $contador++;
}
// -- = -1
$contador--;
echo 'TOTAL DE DAODS:'.$contador;

?>