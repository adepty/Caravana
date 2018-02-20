<?php
	require_once 'evento.class.php';
	$id=$_GET['evento'];

	$evento = new evento();
	$IDEvento=$_POST['IDEvento'];
	$Endereco=$_POST['Endereco'];
	$Data=$_POST['Data'];
	$Inicio=$_POST['Inicio'];
	$Termino=$_POST['Termino'];
	$Valor=$_POST['Valor'];
	$Nome=$_POST['Nome'];

	$IDEvento=$_POST['IDEvento'];
	$Endereco=$_POST['Endereco'];
	$Data=$_POST['Data'];
	$Inicio=$_POST['Inicio'];
	$Termino=$_POST['Termino'];
	$Valor=$_POST['Valor'];
	$Nome=$_POST['Nome'];


	$evento->setIDEvento($IDEvento);
	$evento->buscarID();
?>

	<h3>Alterar Evento</h3>
	<form action="AltEvento.php" method="POST">
		<p>IDEvento: <input type="hidden" name="IDEvento" value="<?php echo $resp['IDEvento'];?>"></p>
		<p>Endereco: <input type="text" name="Endereco" value="<?php echo $resp['Endereco'];?>"></p>
		<p>Data: <input type="date" name="Data" value="<?php echo $resp['Data'];?>"></p>
		<p>Nome: <input type="text" name="Nome" value="<?php echo $resp['Nome'];?>"></p>
		<p>Valor: <input type="float" name="Valor" value="<?php echo $resp['Valor'];?>"></p>
		<p>Inicio: <input type="time" name="Inicio" value="<?php echo $resp['Inicio'];?>"></p>
		<p>Termino: <input type="time" name="Termino" value="<?php echo $resp['Termino'];?>"></p>
		<p><input type="submit" name="Alterar"></p>
	</form>