<?php
	require_once 'evento.class.php';

	$Nome=$_POST['Nome'];
	$Endereco=$_POST['Endereco'];
	$Data=$_POST['Data'];
	$Inicio=$_POST['Inicio'];
	$Termino=$_POST['Termino'];
	$Valor=$_POST['Valor'];

	$Evento = new Evento();
	$Evento->setNome($Nome);
	$Evento->setEndereco($Endereco);
	$Evento->setData($Data);
	$Evento->setInicio($Inicio);
	$Evento->setTermino($Termino);
	$Evento->setValor($Valor);
	$Evento->inserir();
	header("refresh:3;index.php");
?>
<script>
	setInterval("document.getElementById('tempo').innerHTML--;",1000);
</script>
<h2>Evento incluido com sucesso!</h2>";
<p>Você será redirecionado 
<strong id='tempo'>3</strong> segundos.</p>