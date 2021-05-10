<?php

class Curso{
    private $id;
    private $nm_curso;
    private $id_funci;

    public function setId($valor){
		$this->id = $valor;
	}

    public function getId(){
		return $this->id;
	}

    public function setNm_curso($valor){
		$this->nm_curso = $valor;
	}

    public function getNm_curso(){
		return $this->nm_curso;
	}

    public function setId_funci($valor){
		$this->id_funci = $valor;
	}

    public function getId_funci(){
		return $this->id_funci;
	}

}

?>