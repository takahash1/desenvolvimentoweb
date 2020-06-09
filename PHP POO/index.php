<?php 

class Professor{

	private $nome;
	private $idade;
	private $matricula;

	public function __construct($nome, $idade, $matricula){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->matricula = $matricula;
		echo __CLASS__;
	}

	public function getNome(){

		return $this-> nome;

	}

	public function setNome($nome){

		$this->nome = $nome;

	}

	public function getIdade(){

		return $this-> idade;

	}

	public function setIdade($idade){

		$this->idade = $idade;

	}

	public function getMatricula(){

		return $this-> matricula;

	}

	public function setMatricula($matricula){

		$this->matricula = $matricula;

	}
}

class ProfessorHorista extends Professor{

	private $salarioHora;
	private $horastrabalhadas;

	public function __construct($nome, $idade, $matricula, $salariohora, $horastrabalhadas){

		$this->nome = $nome;
		$this->idade = $idade;
		$this->matricula = $matricula;
		$this->salariohora = $salariohora;
		$this->horastrabalhadas = $horastrabalhadas;
		echo __CLASS__;
	}


	public function getSalarioHora(){

		return $this-> salariohora;

	}

	public function setSalarioHora($salariohora){

		$this->salariohora = salariohora;

	}

	public function getHorasTrabalhadas(){

		return $this-> horastrabalhadas;

	}

	public function setHorasTrabalhadas($horastrabalhadas){

		$this->horastrabalhadas = horastrabalhadas;

	}

}

class ProfessorFixo extends Professor{

	private $salariofixo;

	public function __construct($nome, $idade, $matricula, $salariofixo){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->matricula = $matricula;
		$this->salariofixo = $salariofixo;
		echo __CLASS__;
	}


	public function getSalarioFixo(){

		return $this-> salariofixo;

	}

	public function setSalarioFixo($salariofixo){

		$this->salariofixo = $salariofoxp;

	}
}

?>