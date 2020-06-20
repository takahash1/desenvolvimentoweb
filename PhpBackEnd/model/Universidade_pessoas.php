<?php

include __DIR__.'/Conexao.php';

class Universidade_pessoas extends Conexao {
    private $id_pessoa; 
	private $id_universidade;

    public function getId_pessoa() {
        return $this->id_pessoa;
    }

    public function setId_pessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
    }

    public function getId_universidade() {
        return $this->id_universidade;
    }
    public function setId_universidade($id_universidade) {
        $this->id_universidade = $id_universidade;
    }

    public function insert($obj){    
    	$sql = "INSERT INTO universidade_pessoas(id_pessoa,id_universidade) VALUES (:id_pessoa,:id_universidade)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_pessoa',  $obj->id_pessoa);
        $consulta->bindValue('id_universidade' , $obj->id_universidade);
    	$consulta->execute();
        return Conexao::lastId();         
	}

	public function update($obj,$id = null){
		$sql = "UPDATE universidade_pessoas SET 
            id_pessoa = :id_pessoa, 
            id_universidade = :id_universidade,
        WHERE id_pessoas = :id_pessoa ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id_pessoa', $obj->nome);
		$consulta->bindValue('id_universidade' , $obj->idade);		
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM universidade_pessoas WHERE id_pessoa = :id_pessoa";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id_pessoa',$id_pessoa);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT id_pessoa FROM universidade_pessoas 
        WHERE id_universidade is NOT null";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_pessoa',$id_pessoa);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM universidade_pessoas";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
?>