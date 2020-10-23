<?php 

$pacientes = array(
	'Joana'=> 20,
	'Rui' => 25,
	'Ana' =>30,
);

echo ' Idade do paciente Joana ' .
 $pacientes['Joana'] . ' anos ';

 $pacientes['Pedro'] =24;
  $pacientes['Carla'] =23;

foreach($pacientes as $nome => $Idade)
	{
		echo ' O paciente ' .$nome . ' tem ' .$Idade . ' anos.<br>';
	}

 

?>