<?php

class Produtos extends model{

	public function add($produto, $fornecedor, $categoria, $valor, $quant){
		$sql = "INSERT INTO produtos (produto, idfornecedor, idCat, valor, estoque) VALUES (?,?,?,?,?)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $produto);
		$sql->bindValue(2, $fornecedor);
		$sql->bindValue(3, $categoria);
		$sql->bindValue(4, $valor);
		$sql->bindValue(5, $quant);
		$sql->execute();
	}

	public function getAll(){ //função para exibir vários resultados
		$array = array();

$sql = "SELECT p.id, p.produto, f.fornecedor, c.categoria, p.valor, p.estoque
FROM produtos p
INNER JOIN categorias c
ON p.idCat = c.id
INNER JOIN fornecedores f
ON p.idfornecedor = f.id
ORDER BY p.produto
";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function del($id){
		$sql = "DELETE FROM produtos WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $id);
		$sql->execute();
	}


	public function getProduto($id){
		$array = array();
		$sql = "SELECT * FROM produtos WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}
		return $array;
	}


	public function edit($id, $produto, $fornecedor, $categoria, $valor, $quant){
		$sql = "UPDATE produtos SET produto = ?, idfornecedor = ?, idcat = ?, valor = ?, estoque = ? WHERE id = ?";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(1, $produto);
		$sql->bindValue(2, $fornecedor);
		$sql->bindValue(3, $categoria);
		$sql->bindValue(4, $valor);
		$sql->bindValue(5, $quant);
		$sql->bindValue(6, $id);
		$sql->execute();

		return true;
	}

	



}



?>