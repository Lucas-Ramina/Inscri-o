<?php

require_once dirname(__FILE__)."/../DBConexao.php";


class CursoDAO{
    private static $conexao;

    public function __construct(){
        self::$conexao = DBConexao::getInstancia();
    }

    public function inserir(Curso $curso){
        $query = self::$conexao->prepare("INSERT INTO curso(nome, id_funcionario ) VALUES (?, ?)");
        $query->bindValue(1,$curso->getNm_curso());
        $query->bindValue(2,$curso->getId_funci());

        $query->execute();
    }

    public function atualizar(Curso $curso){
        $query = self::$conexao->prepare("UPDATE curso SET nome = ?, id_funcionario = ? WHERE id = ?");
        $query->bindValue(1,$curso->getNm_curso());
        $query->bindValue(2,$curso->getId_funci());
        $query->bindValue(3,$curso->getId());
        $query->execute();
    }

    public function deletar($id_curso){
        $query = self::$conexao->prepare("DELETE FROM curso WHERE id = ?");
        $query->bindValue(1,$id_curso);

        $query->execute();
    }

    public function listar(){
        $query = self::$conexao->prepare("SELECT id, nome, id_funcionario FROM curso ORDER BY id");
        $query->execute();
     
        return $query->fetchAll();
    }

    public function procurar($id){
        $query = self::$conexao->prepare("SELECT id, nome, id_funcionario FROM curso WHERE id = ?");
        $query->bindValue(1,$id);
        
        $query->execute();
        //return $query->fetchAll();
		return $query->fetch();

    }

    
    
}
