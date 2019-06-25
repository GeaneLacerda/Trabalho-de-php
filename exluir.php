<?php 
	include_once('conexao.php');
	$numero = $_GET['id'];

	$sql = "DELETE  FROM livros WHERE id = $numero";

	$r = mysqli_query($con, $sql);

	if($r){
		echo "Deletado";
	}else{
		echo "Ocorreu um Erro";
	}

?>