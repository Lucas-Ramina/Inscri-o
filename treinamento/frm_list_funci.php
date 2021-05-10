<?php
	require_once "DAO/FuncionarioDAO.php";
	
	$funcionarioDAO = new FuncionarioDAO();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Funcionarios cadastrados</title>
</head>
<body>
	<h1>Funcionarios Cadastrados:</h1>
	<table border=2>
		<tr>
			<td>ID</td>
			<td>R.A.</td>
			<td>nome</td>
			<td>idade</td>
			<td>Nacionalidade</td>
			<td>Sexo</td>
			<td>Endereco</td>
			<td>Telefone</td>
			<td>Editar</td>
		</tr>
		<?php foreach($funcionarioDAO->listar() as $linha) { ?>
		<tr>
			<td><?php echo $linha["id"] ?></td>
			<td><?php echo $linha["ra"] ?></td>
			<td><?php echo $linha["nome"] ?></td>
			<td><?php echo $linha["idade"] ?></td>
			<td><?php echo $linha["nacionalidade"] ?></td>
			<td><?php echo $linha["sexo"] ?></td>
			<td><?php echo $linha["endereco"] ?></td>
			<td><?php echo $linha["telefone"] ?></td>
			<td>
				<a href="frm_att_funci.php?id=<?=$linha["id"]?>">Editar</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>