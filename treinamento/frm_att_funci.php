<?php
	require_once "DAO/FuncionarioDAO.php";
	require_once "modelo/Funcionario.php";
	
	$id = $_GET["id"];
	$funcionarioDAO = new FuncionarioDAO();
	$linha = $funcionarioDAO->procurar($id);
	
	//var_dump($linha);
	
	$funcionario = new Funcionario();
	$funcionario->setId($linha["id"]);
	$funcionario->setRa($linha["ra"]);
	$funcionario->setNome($linha["nome"]);
	$funcionario->setIdade($linha["idade"]);
	$funcionario->setNacio($linha["nacionalidade"]);
	$funcionario->setSexo($linha["sexo"]);
	$funcionario->setEnde($linha["endereco"]);
	$funcionario->setFone($linha["telefone"]);


?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <title>Atualização de Funcionario</title>
    </head>

    <body>
        <h1>Altualizar cadastro de funcionarios:</h1>
        <form action="Funcionario/atualizar.php" method="POST">
            <input type="hidden" name="id_funcionario" value="<?= $funcionario->getId() ?>" >
            <br><br>
            <div>Ra</div>
            <input type="text" name="ra" value="<?= $funcionario->getRa() ?>">
            <br><br>
            <div>Nome</div>
            <input type="text" name="nome" value="<?= $funcionario->getNome() ?>">
            <br><br>
            <div>Idade</div>
            <input type="number" name="idade" value="<?= $funcionario->getIdade() ?>">
            <br><br>
            <div>Nacionalidade</div>
            <input type="text" name="nacionalidade" value="<?= $funcionario->getNacio() ?>">
            <br><br>
            <div>Sexo</div>
            <input type="text" name="sexo" value="<?= $funcionario->getSexo() ?>">
            <br><br>
            <div>Endereço</div>
            <input type="text" name="endereco" value="<?= $funcionario->getEnde() ?>">
            <br><br>
            <div>Telefone</div>
            <input type="text" name="telefone" value="<?= $funcionario->getFone() ?>">
            <br><br>
            <input type="submit" name="atualizar" value="atualizar">
        </form>
    </body>

    </html>