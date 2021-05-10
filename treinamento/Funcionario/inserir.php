<?php

require_once "../modelo/Funcionario.php";
require_once "../DAO/FuncionarioDAO.php";

if(isset($_POST["cadastrar"])){

    $funcionario = new Funcionario();
    $funcionario->setRa($_POST["ra"]);
    $funcionario->setIdade($_POST["idade"]);
    $funcionario->setNome($_POST["nome"]);
    $funcionario->setNacio($_POST["nacionalidade"]);
    $funcionario->setSexo($_POST["sexo"]);
    $funcionario->setEnde($_POST["endereco"]);
    $funcionario->setFone($_POST["telefone"]);

    $funcionarioDAO = new FuncionarioDAO();

    $funcionarioDAO->inserir($funcionario);

}