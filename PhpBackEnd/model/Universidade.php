<?php	
	include __DIR__.'/Conexao.php';

	class Universidade extends Conexao {
		private $id;
		private $nome;
		private $campus;		

	public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getCampus() {
		return $this->campus;
	}

	public function setCampus($campus) {
		$this->campus = $campus;
	}

	public function insert($obj){    
    	$sql = "INSERT INTO universidade(id,nome,campus) VALUES (:id,:nome,:campus)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',  $obj->id);
        $consulta->bindValue('nome' , $obj->idade);
        $consulta->bindValue('campus' , $obj->campus);
    	$consulta->execute();
        return Conexao::lastId(); /*Aqui vc tem o ID da universidade, vocъ pode nуo retornar ele e adicionar uma nova query para inserчуo e inserir nas duas tabelas ao mesmo tempo se for sempre assim */        
	}

	public function update($obj,$id = null){
		$sql = "UPDATE universidade SET 
            id = :id, 
            nome = :nome,
            campus = :campus, 
			WHERE
			id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id' , $obj->id);
		$consulta->bindValue('nome' , $obj->nome);		
        $consulta->bindValue('campus' , $obj->campus);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM universidade WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM universidade WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM universidade";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
?>