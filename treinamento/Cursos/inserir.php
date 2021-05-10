<?php

require_once "../modelo/Curso.php";
require_once "../DAO/CursoDAO.php";

if(isset($_POST["cadastrar"])){

    $curso = new Curso();

    $curso->setNm_curso($_POST["nm_curso"]);
    $curso->setId_funci($_POST["id_funci"]);
    

    $cursoDAO = new CursoDAO();

    $cursoDAO->inserir($curso);

}