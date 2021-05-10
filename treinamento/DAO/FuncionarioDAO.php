<?php

require_once dirname(__FILE__)."/../DBConexao.php";


class FuncionarioDAO{
    private static $conexao;

    public function __construct(){
        self::$conexao = DBConexao::getInstancia();
    }

    public function inserir(Funcionario $funcionario){
        $query = self::$conexao->prepare("INSERT INTO funcionario(ra,nome,idade,nacionalidade,sexo,endereco,telefone) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->bindValue(1,$funcionario->getRa());
        $query->bindValue(2,$funcionario->getNome());
        $query->bindValue(3,$funcionario->getIdade());
        $query->bindValue(4,$funcionario->getNacio());
        $query->bindValue(5,$funcionario->getSexo());
        $query->bindValue(6,$funcionario->getEnde());
        $query->bindValue(7,$funcionario->getFone());       


        $query->execute();
    }

    public function atualizar(Funcionario $funcionario){
        //$query = self::$conexao->prepare("UPDATE funcionario SET ra = ?,nome = ?,idade = ?,nacionalidade = ?,sexo = ?,endereco = ?,telefone ? WHERE id = ?");
        $query = self::$conexao->prepare("UPDATE funcionario SET ra = ?, nome = ?, idade = ?, nacionalidade = ?, sexo = ?, endereco = ?, telefone = ? WHERE id = ?");
		$query->bindValue(1,$funcionario->getRa());
        $query->bindValue(2,$funcionario->getNome());
        $query->bindValue(3,$funcionario->getIdade());
        $query->bindValue(4,$funcionario->getNacio());
        $query->bindValue(5,$funcionario->getSexo());
        $query->bindValue(6,$funcionario->getEnde());
        $query->bindValue(7,$funcionario->getFone());
        $query->bindValue(8,$funcionario->getId());
        $query->execute();
    }

    public function deletar($id_funcionario){
        $query = self::$conexao->prepare("DELETE FROM funcionario WHERE id = ?");
        $query->bindValue(1,$id_funcionario);

        $query->execute();
    }

    public function listar(){
        $query = self::$conexao->prepare("SELECT id, ra, nome, idade, nacionalidade, sexo, endereco, telefone FROM funcionario ORDER BY id");
        $query->execute();
        return $query->fetchAll();
    }
     
    public function procurar($id){
        $query = self::$conexao->prepare("SELECT id, ra, nome, idade, nacionalidade, sexo, endereco, telefone FROM funcionario WHERE id = ?");
        //$query->bindValue(1,$id_funcionario);  
		$query->bindValue(1,$id);  
        
        $query->execute();
        //return $query->fetchAll();
		return $query->fetch();
    }

    
    
}
