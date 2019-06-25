<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
</head>
	<style type="text/css">
		table{
			background-color: lightblue;
			font-family: arial;
			color: red;
			width: 400px;
			height: 300px

		}
	h1{
			color: red;
			font-family: italic
		}
		
	body{
  
       background: url("painel.jpg") no-repeat;
       background-size: cover;
   }
	</style>
<body>
	<div id="a">
	</div>
	<div id="b">
			<h1 align="center">Livros emprestados</h1>
	<table border="2px" align="center">
	<button align="center"><a href="listar.php">Listar</a></button>
	<button align="center"><a href="cadastro.html">Cadastrar</a></button>
		
		<tr>
			<th>Data de emprestimo</th>
			<th>Livro</th>
			<th>Autor</th>
			<th>Excluir</th>
		</tr>
		<?php
		include_once('conexao.php');
		  $sql = "SELECT * FROM livros";

		  $r = mysqli_query($con, $sql);
		  ?>
		  
		  	<?php while($dados = mysqli_fetch_assoc($r)) { ?>

		  		<tr>
		  			<td> <?php echo $dados['Dat']; ?></td>
		  			<td> <?php echo $dados['livros']; ?></td>
		  			<td> <?php echo $dados['autor']; ?></td>
		  			<td> <a href="exluir.php?id=<?php echo $dados['id']; ?>"><img src="excluir.png" width="20" height="20"></a> </td>
		  		</tr>
		  		<?php 
		  	}
		  ?>

	</table>
</div>

	<div id="c">
		
	</div>
</body>
</html>