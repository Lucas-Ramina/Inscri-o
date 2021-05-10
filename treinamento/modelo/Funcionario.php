<?php
class Funcionario{
    private $id;
    private $ra;
    private $nome;
    private $idade;
    private $nacionalidade;
    private $sexo;
    private $endereco;
    private $telefone;

    public function setId($valor) {
        $this->id = $valor;
    }

    /*public function getId($valor) {
        return $this->id;
    }*/
	public function getId() {
        return $this->id;
    }

    public function setRa($valor) {
        $this->ra = $valor;
    }

    public function getRa() {
        return $this->ra;
    }

    public function setNome($valor) {
        $this->nome = $valor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdade($valor) {
        $this->idade = $valor;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNacio($valor) {
        $this->nacionalidade = $valor;
    }

    public function getNacio() {
        return $this->nacionalidade;
    }

    public function setSexo($valor) {
        $this->sexo = $valor;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setEnde($valor) {
        $this->endereco = $valor;
    }

    public function getEnde() {
        return $this->endereco;
    }

    public function setFone($valor) {
        $this->telefone = $valor;
    }

    public function getFone() {
        return $this->telefone;
    }
}