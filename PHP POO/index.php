<?php 

// CLASSE PROFESSOR 

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

	public function retornaClasse(){
		
		get_class($obj);

	}

}

$obj = new Professor('Bruno', 24, '2131312');

// CLASSE PROFESSOR HORISTA 

class ProfessorHorista extends Professor{

	private $salarioHora;
	private $horastrabalhadas;

	public function __construct($nome, $idade, $matricula, $salariohora, $horastrabalhadas){

		Professor::setNome($nome);
		Professor::setIdade($idade);
		Professor::setMatricula($matricula);
		$this->salariohora = $salariohora;
		$this->horastrabalhadas = $horastrabalhadas;
		echo __CLASS__;
	}


	public function getSalarioHora(){

		return $this->salariohora;

	}

	public function setSalarioHora($salariohora){

		$this->salariohora = salariohora;

	}

	public function getHorasTrabalhadas(){

		return $this->horastrabalhadas;

	}

	public function setHorasTrabalhadas($horastrabalhadas){

		$this->horastrabalhadas = horastrabalhadas;

	}

	public function calcularSalario($salariohora, $horastrabalhadas){

		$this->calcularSalario = $salariohora*$horastrabalhadas;
		return $this->calcularSalario;
		
	}

	public function retornaClasse(){
		
		get_class($obj);

	}

}

// CLASSE PROFESSOR FIXO 

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

		return $this->salariofixo;

	}

	public function setSalarioFixo($salariofixo){

		$this->salariofixo = $salariofoxp;

	}

	public function retornaClasse(){
		
		get_class($obj);

	}
}

// PROGRAMA PARA REPETIR NÚMEROS

for($i = 5; $i <=15; $i++){
	echo $i;
}

// CLASSE USUÁRIO

class Usuario{

	private $login;
	private $senha;

	public function getLogin(){

		return $this->login;

	}

	public function setLogin($login){

		$this->login = $login;
	}

	public function getSenha(){

		return $this->login;
	}

	public function setSenhasenha($senha){

		$this->senha = $senha;
	}

	public function senhaPadrao(){

		$this->setSenha('12345');		
			
	}

	public function validarSenha($senhaPadrao, $senha){

		if($senha === $senhaPadrao){
			echo("Senha corresponde!");
		}
		else{
			echo("Senha incorreta");
		}

	}
}

?>