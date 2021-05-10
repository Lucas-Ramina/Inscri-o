<?php

require_once "../modelo/Curso.php";
require_once "../DAO/CursoDAO.php";

if(isset($_POST["atualizar"])){
    //$curso = new Funcionario();
	$curso = new Curso();
    //$curso->setId($_POST["id_curso"]);
    //$curso->setNm_curso($_POST["nm_curso"]);
    //$curso->setId_funci($_POST["id_funci"]);
	//no formulário de edição esses são os nomes do campos
	$curso->setId($_POST["id"]);
    $curso->setNm_curso($_POST["nome"]);
    $curso->setId_funci($_POST["id_funcionario"]);
    
    $cursoDAO = new CursoDAO();
    $cursoDAO->atualizar($curso);

}