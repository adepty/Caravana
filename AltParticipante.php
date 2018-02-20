<?php
	require_once 'participante.class.php';
	$id=$_GET['IDParticipante'];

	$participante = new participante();
	$IDParticipante=$_POST['IDParticipante'];
	$IDEvento=$_POST['IDEvento'];
	$Nome=$_POST['Nome'];
	$Idade=$_POST['Idade'];
	$Sexo=$_POST['Sexo'];
	$Autorizacao=$_POST['Autorizacao'];

	$IDParticipante=$_POST['IDParticipante'];
	$IDEvento=$_POST['IDEvento'];
	$Nome=$_POST['Nome'];
	$Idade=$_POST['Idade'];
	$Sexo=$_POST['Sexo'];
	$Autorizacao=$_POST['Autorizacao'];

	$participante->setIDParticipante($IDParticipante);
	$participante->buscarID();
?>

	<h3>Alterar Transporte</h3>
	<form action="AltParticipante.php" method="POST">
		<p>IDParticipante: <input type="hidden" name="IDParticipante" value="<?php echo $resp['IDParticipante'];?>"></p>
		<p>IDEvento: <input type="int" name="IDEvento" value="<?php echo $resp['IDEvento'];?>"></p>
		<p>Nome: <input type="text" name="Nome" value="<?php echo $resp['Nome'];?>"></p>
		<p>Idade: <input type="int" name="Idade" value="<?php echo $resp['Idade'];?>"></p>
		<p>Sexo: <input type="text" name="Sexo" value="<?php echo $resp['Sexo'];?>"></p>
		<p>Autorizacao: <input type="text" name="Autorizacao" value="<?php echo $resp['Autorizacao'];?>"></p>
		<p><input type="submit" name="Alterar"></p>
	</form>