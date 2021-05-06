<?php
class Fornecedores extends model{

//funçao para cadastrar
	public function add($fornecedor, $email, $celular){
		$sql = "INSERT INTO fornecedores (fornecedor, email, celular) VALUES (?,?,?)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $fornecedor);
		$sql->bindValue(2, $email);
		$sql->bindValue(3, $celular);
		$sql->execute();
	}


	public function getAll(){ //função para exibir vários resultados
		$array = array();

		$sql = "SELECT * FROM fornecedores ORDER BY fornecedor";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;


    }


    public function del($id){
		$sql = "DELETE FROM fornecedores WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $id);
		$sql->execute();
	}


	public function getFornecedor($id){
		$array = array();
		$sql = "SELECT * FROM fornecedores WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}
		return $array;
	}



	public function edit($id, $fornecedor, $email, $celular){
		$sql = "UPDATE fornecedores SET fornecedor = ?, email = ?, celular = ? WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $fornecedor);
		$sql->bindValue(2, $email);
		$sql->bindValue(3, $celular);
		$sql->bindValue(4, $id);
		$sql->execute();

		return true;
	}




}

?>