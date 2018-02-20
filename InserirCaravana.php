<?php
	require_once 'caravana.class.php';

	$IDEvento=$_POST['IDEvento'];
	$IDTransporte=$_POST['IDTransporte'];
	$Nome=$_POST['Nome'];
	$Valor=$_POST['Valor'];
	$Partida=$_POST['Partida'];

	$Caravana = new Caravana();
	$Caravana->setIDEvento($IDEvento);
	$Caravana->setIDTransporte($IDTransporte);
	$Caravana->setNome($Nome);
	$Caravana->setValor($Valor);
	$Caravana->setPartida($Partida);
	$Caravana->inserir();
	header("refresh:3;index.html");
?>
<script>
	setInterval("document.getElementById('tempo').innerHTML--;",1000);
</script>
<h2>Caravana incluida com sucesso!</h2>";
<p>Você será redirecionado 
<strong id='tempo'>3</strong> segundos.</p>