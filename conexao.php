<?php 

	$con = mysqli_connect("localhost", "root", "", "biblioteca");

	if ($con) {
		echo "Conectado com Sucesso";
	}else{
		echo "Erro na conexão";
	}

 ?>
