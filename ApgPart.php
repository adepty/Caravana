<?php
	require_once 'Participante.class.php';
	$id=$_GET['IDParticipante'];

	$IDParticipante = new Participante();
	$IDParticipante->setIDParticipante($IDParticipante);
	$IDParticipante->Delete();
	print "<p>Participante apagado com sucesso!</p>";
	print "<p><a href='index.php'>Voltar</a></p>";
?>