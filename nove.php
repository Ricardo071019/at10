<?php 

$minha_multa['carro'] = 'Pálio';
$minha_multa['valor'] = 178.00;
//alteração de valores
$minha_multa['carro'] = ' ED 1.0';
$minha_multa['valor'] += 20;
//exibe o aray
var_dump($minha_multa);
echo '<br>';
$comidas[] = 'Lazanha';
$comidas[] = 'Pizza';
$comidas[] = 'Macarrão';
//alteração d valores
$comidas[1] = 'Pizza Calabreza';
//exibe o array
foreach ($comidas as $comidas){
echo '<h1>'. $comidas . '</h1>';

};
?>