<?php
	require_once 'caravana.class.php';
	$id=$_GET['IDCaravana'];

	$caravana = new caravana();
	$IDCaravana=$_POST['IDCaravana'];
	$IDEvento=$_POST['IDEvento'];
	$IDTransporte=$_POST['IDTransporte'];
	$Nome=$_POST['Nome'];
	$Valor=$_POST['Valor'];
	$Partida=$_POST['Partida'];

	$IDCaravana=$_POST['IDCaravana'];
	$IDEvento=$_POST['IDEvento'];
	$IDTransporte=$_POST['IDTransporte'];
	$Nome=$_POST['Nome'];
	$Valor=$_POST['Valor'];
	$Partida=$_POST['Partida'];


	$caravana->setIDCaravana($IDCaravana);
	$caravana->buscarID();
?>

	<h3>Alterar Caravana</h3>
	<form action="AltCaravana.php" method="POST">
		<p>IDCaravana: <input type="hidden" name="IDCaravana" value="<?php echo $resp['IDCaravana'];?>"></p>
		<p>IDEvento: <input type="int" name="IDEvento" value="<?php echo $resp['IDEvento'];?>"></p>
		<p>IDTransporte: <input type="int" name="IDTransporte" value="<?php echo $resp['IDTransporte'];?>"></p>
		<p>Nome: <input type="text" name="Nome" value="<?php echo $resp['Nome'];?>"></p>
		<p>Valor: <input type="float" name="Valor" value="<?php echo $resp['Valor'];?>"></p>
		<p>Partida: <input type="text" name="Partida" value="<?php echo $resp['Partida'];?>"></p>
		<p><input type="submit" name="Alterar"></p>
	</form>