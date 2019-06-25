<?php  include_once('index.html');
	include_once('conexao.php');
	$data = $_GET['data'];
	$livro = $_GET['livro'];
	$autor = $_GET['autor'];
	
	$sql = "INSERT INTO livros (Dat, livros, autor) VALUES ('$data', '$livro', '$autor')";

	$r = mysqli_query($con, $sql);
	if ($r) {
		echo "Livro cadastrado com sucesso!";
	}else{
		echo "Erro ao cadastrar.";
	}
?>/