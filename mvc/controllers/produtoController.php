<?php

class produtoController extends controller{

	public function index(){

		$dados = array();
		$cat = new categorias();
		$dados['lista'] = $cat->getAll();
		$this->loadTemplate('produto', $dados);
	}

	public function add(){
		if(!empty($_POST['txt_produto'])){
			$produto = strtoupper($_POST['txt_produto']);
			$fornecedor = $_POST['txt_fornecedor'];
			$categoria = $_POST['txt_categoria'];
			$valor = $_POST['txt_valor'];
			$quant = $_POST['txt_quant'];
			
			$prod = new Produtos();
			$prod->add($produto, $fornecedor, $categoria, $valor, $quant);
			header('Location: '.BASE_URL.'produto/lista');
		}else{
			echo "Nao tem nada";
		}
	}

	public function lista(){
		$dados = array();

		$prod = new produtos();
		$dados['listaprod'] = $prod->getAll();


		$forn = new Fornecedores();
		$dados['listaforn'] = $forn->getAll();

		$cat = new categorias();
		$dados['lista'] = $cat->getAll();
		$this->loadTemplate('produto', $dados);
	}

	public function del($id){
		if(!empty($id)){
			$prod = new Produtos();
			$prod->del($id);
		}
		header('Location:'.BASE_URL.'produto/lista');
	}

	public function edit($id){
		$dados = array();
		$prod = new Produtos();
		$dados['info'] = $prod->getProduto($id);
		if(isset($dados['info']['id'])){

		$cat = new categorias();
		$dados['lista'] = $cat->getAll();

		$forn = new Fornecedores();
		$dados['listaforn'] = $forn->getAll();
		$this->loadTemplate('produto', $dados);
		
			exit;
		}

	}


	public function editsave($id){
			$produto = strtoupper($_POST['txt_produto']);
			$fornecedor = $_POST['txt_fornecedor'];
			$categoria = $_POST['txt_categoria'];
			$valor = $_POST['txt_valor'];
			$quant = $_POST['txt_quant'];
			$prod = new produtos();
			$prod->edit($id, $produto, $fornecedor, $categoria, $valor, $quant);
			header('Location:'.BASE_URL.'produto/lista');

	}
}

?>