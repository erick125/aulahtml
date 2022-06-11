<?php

	//echo $_GET["nome"];
	//echo "<br>";
	//echo $_GET["email"];
	//echo "<br>";
	//echo $_GET["tipo-contato"];
	//echo "<br>";
	//echo $_POST["numero1"];
	//echo "<br>";
	
	$nome = $_GET["nome"];
	$email = $_GET["email"];
	$tipo_contato = $_GET["tipo-contato"];
	
	echo $nome;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $tipo_contato;
	echo "<br>";
	
	
	$num1 = $_GET["numero1"];
	$num2 = $_GET["numero2"];
	$resultado = $num1 + $num2;
	echo $resultado;
	
	//var_dump($_GET);
	
	