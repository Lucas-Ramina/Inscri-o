<?php
	require_once "DAO/CursoDAO.php";
	require_once "modelo/Curso.php";
	
    $id = $_GET["id"];
	$cursoDAO = new CursoDAO();
	$linha = $cursoDAO->procurar($id);

    //var_dump($linha);

	$curso = new Curso();
	//$curso->setId($linha[0]["id"]);
	//$curso->setNm_curso($linha[0]["nome"]);
	//$curso->setId_funci($linha[0]["id_funcionario"]);
	$curso->setId($linha["id"]);
	$curso->setNm_curso($linha["nome"]);
	$curso->setId_funci($linha["id_funcionario"]);

    
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <title>Atualização de Cursos</title>
    </head>

    <body>
        <h1>Altualizar cadastro de Cursos:</h1>
        <form action="Cursos/atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?= $curso->getId() ?>">
            <br><br>
            <div>Ra</div>
            <input type="text" name="nome" value="<?= $curso->getNm_curso() ?>">
            <br><br>
            <div>Nome</div>
            <input type="number" name="id_funcionario" value="<?= $curso->getId_funci() ?>">
            <br><br>
            <input type="submit" name="atualizar" value="Atualizar">
        </form>
    </body>

    </html>