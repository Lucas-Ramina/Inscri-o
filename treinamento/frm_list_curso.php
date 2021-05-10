<?php
	require_once "DAO/CursoDAO.php";
	
	$cursoDAO = new CursoDAO();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cursos cadastrados</title>
</head>
<body>
	<h1>Cursos Cadastrados:</h1>
	<table border=2>
		<tr>
			<td>ID</td>
			<td>Nome do Curso</td>
			<td>Id do Funcionario</td>
			<td>Editar</td>
		</tr>
		<?php foreach($cursoDAO->listar() as $linha) { ?>
		<tr>
			<td><?php echo $linha["id"] ?></td>
			<td><?php echo $linha["nome"] ?></td>
			<td><?php echo $linha["id_funcionario"] ?></td>
			
			<td>
				<a href="frm_att_cursos.php?id=<?=$linha["id"]?>">Editar</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>