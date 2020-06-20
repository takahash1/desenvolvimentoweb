<?php
include __DIR__.'/../model/Universidade_universidade_pessoass.php';

class Universidade_universidade_pessoassControl{
	function insert($obj){		
		$universidade_pessoas = new Universidade_universidade_pessoass();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $universidade_pessoas->insert($obj);		
	}

	function update($obj,$id){
		$universidade_pessoas = new Universidade_universidade_pessoass();
		return $universidade_pessoas->update($obj,$id);
	}

	function delete($obj,$id){
		$universidade_pessoas = new Universidade_universidade_pessoass();
		return $universidade_pessoas->delete($obj,$id);
	}

	function find($id = null){
		$universidade_pessoas = new Universidade_universidade_pessoass();
		return $universidade_pessoas->find($id);
	}

	function findAll(){
		$universidade_pessoas = new Universidade_universidade_pessoass();
		return $universidade_pessoas->findAll();
	}
}

?>