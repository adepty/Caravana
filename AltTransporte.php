<?php
	require_once 'transporte.class.php';
	$id=$_GET['IDTransporte'];

	$transporte = new transporte();
	$IDTransporte=$_POST['IDTransporte'];
	$IDEvento=$_POST['IDEvento'];
	$Tipo=$_POST['Tipo'];
	$Capacidade=$_POST['Capacidade'];
	$Valor=$_POST['Valor'];

	$IDTransporte=$_POST['IDTransporte'];
	$IDEvento=$_POST['IDEvento'];
	$Tipo=$_POST['Tipo'];
	$Capacidade=$_POST['Capacidade'];
	$Valor=$_POST['Valor'];

	$transporte->setIDTransporte($IDTransporte);
	$transporte->buscarID();
?>

	<h3>Alterar Transporte</h3>
	<form action="AltTransporte.php" method="POST">
		<p>IDTransporte: <input type="hidden" name="IDTransporte" value="<?php echo $resp['IDTransporte'];?>"></p>
		<p>IDEvento: <input type="int" name="IDEvento" value="<?php echo $resp['IDEvento'];?>"></p>
		<p>Tipo: <input type="int" name="Tipo" value="<?php echo $resp['Tipo'];?>"></p>
		<p>Capacidade: <input type="text" name="Capacidade" value="<?php echo $resp['Capacidade'];?>"></p>
		<p>Valor: <input type="float" name="Valor" value="<?php echo $resp['Valor'];?>"></p>
		<p><input type="submit" name="Alterar"></p>
	</form>