<?php
class Categorias extends model{
	
	public function getTotalCategorias(){
		//função que ira exibir resultado unico
		$sql = "SELECT COUNT(*) AS total FROM CATEGORIAS";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){

			$sql = $sql->fetch();

			return $sql['total'];
		}else{
			return 0;
		}
	}
//----------------------------------------------------------
	public function getAll(){ //função para exibir vários resultados
		$array = array();

		$sql = "SELECT * FROM categorias ORDER BY categoria";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;
	}
//funçao para cadastrar
	public function add($categoria){
		$sql = "INSERT INTO categorias (categoria) VALUES (?)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $categoria);
		$sql->execute();
	}

	public function del($id){
		$sql = "DELETE FROM categorias WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $id);
		$sql->execute();
	}

	public function getCategoria($id){
		$array = array();
		$sql = "SELECT * FROM categorias WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}
		return $array;
	}

	public function edit($id, $categoria){
		$sql = "UPDATE categorias SET categoria = ? WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $categoria);
		$sql->bindValue(2, $id);
		$sql->execute();

		return true;
	}

}
?>