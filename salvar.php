<?php
	$descricao = $_POST["descricao"];
	$valor = $_POST["valor"];
	$data = $_POST["data"];
	
	$db = new SQLite3("contas.db");
	$db->exec("INSERT INTO CONTAS (DESCRICAO, VALOR, DATA) VALUES ('$descricao','$valor','$data')");
?>