<?php
	require_once 'caravana.class.php';
	$id=$_GET['IDCaravana'];

	$caravana = new caravana();
	$caravana->setIDCaravana($IDCaravana);
	$caravana->Delete();
	print "<p>Caravana apagada com sucesso!</p>";
	print "<p><a href='index.php'>Voltar</a></p>";
?>