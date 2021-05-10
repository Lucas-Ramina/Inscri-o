<?php

require_once "../modelo/Funcionario.php";
require_once "../DAO/FuncionarioDAO.php";

if(isset($_POST["atualizar"])){

    $funcionario = new Funcionario();
    //$funcionario->setId($_POST["id"]);
	$funcionario->setId($_POST["id_funcionario"]);
    $funcionario->setRa($_POST["ra"]);
    $funcionario->setIdade($_POST["idade"]);
    $funcionario->setNome($_POST["nome"]);
    $funcionario->setNacio($_POST["nacionalidade"]);
    $funcionario->setSexo($_POST["sexo"]);
    $funcionario->setEnde($_POST["endereco"]);
    $funcionario->setFone($_POST["telefone"]);

    $funcionarioDAO = new FuncionarioDAO();

    $funcionarioDAO->atualizar($funcionario);

}