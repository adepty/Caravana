<?php
	require_once 'participante.class.php';

	$IDEvento=$_POST['IDEvento'];
	$Nome=$_POST['Nome'];
	$Idade=$_POST['Idade'];
	$Sexo=$_POST['Sexo'];
	$Autorizacao=$_POST['Autorizacao'];

	$Participante = new Participante();
	$Participante->setIDEvento($IDEvento);
	$Participante->setNome($Nome);
	$Participante->setIdade($Idade);
	$Participante->setSexo($Sexo);
	$Participante->setAutorizacao($Autorizacao);
	$Participante->inserir();
	header("refresh:3;index.html");
?>
<script>
	setInterval("document.getElementById('tempo').innerHTML--;",1000);
</script>
<h2>Participante incluido com sucesso!</h2>";
<p>Você será redirecionado 
<strong id='tempo'>3</strong> segundos.</p>