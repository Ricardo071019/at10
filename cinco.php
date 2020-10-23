<?php
$pessoa['nome'] = ' Maria da Silva ';
$pessoa['rua'] = ' Sao João ';
$pessoa['bairro'] = 'Bairro Lindo da Cidade ';
$pessoa['cidade'] = ' Uma cidade ';

foreach($pessoa as $dados)
{
	echo $dados;
	echo '<br>';
}
?>