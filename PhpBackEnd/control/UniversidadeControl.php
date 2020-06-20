<?php
include __DIR__.'/../model/Universidade.php';

class UniversidadeControl{
	function insert($obj){		
		$universidade = new Universidade();	
		/* CHANCE DE MANIPULAR A REQUISI��O ANTES DE ACESSAR O MODEL */			
		return $universidade->insert($obj);		
	}

	function update($obj,$id){
		$universidade = new Universidade();
		return $universidade->update($obj,$id);
	}

	function delete($obj,$id){
		$universidade = new Universidade();
		return $universidade->delete($obj,$id);
	}

	function find($id = null){
		$universidade = new Universidade();
		return $universidade->find($id);
	}

	function findAll(){
		$universidade = new Universidade();
		return $universidade->findAll();
	}
}

?>