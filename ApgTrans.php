<?php
	require_once 'transporte.class.php';
	$id=$_GET['IDTransporte'];

	$IDTransporte = new transporte();
	$IDTransporte->setIDTransporte($IDTransporte);
	$IDTransporte->Delete();
	print "<p>Transporte apagado com sucesso!</p>";
	print "<p><a href='index.php'>Voltar</a></p>";
?>