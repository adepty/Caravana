<?php
	require_once 'evento.class.php';
	$id=$_GET['IDEvento'];

	$IDEvento = new evento();
	$IDEvento->setIDEvento($IDEvento);
	$IDEvento->Delete();
	print "<p>Evento apagado com sucesso!</p>";
	print "<p><a href='index.php'>Voltar</a></p>";
?>