<?php
	require_once 'transporte.class.php';

	$Tipo=$_POST['Tipo'];
	$IDEvento=$_POST['IDEvento'];
	$Capacidade=$_POST['Capacidade'];
	$Valor=$_POST['Valor'];

	$transporte = new transporte();
	$transporte->setTipo($Tipo);
	$transporte->setIDEvento($IDEvento);
	$transporte->setCapacidade($Capacidade);
	$transporte->setValor($Valor);
	$transporte->inserir();
	header("refresh:3;index.html");
?>
<script>
	setInterval("document.getElementById('tempo').innerHTML--;",1000);
</script>
<h2>Transporte incluido com sucesso!</h2>";
<p>Você será redirecionado 
<strong id='tempo'>3</strong> segundos.</p>