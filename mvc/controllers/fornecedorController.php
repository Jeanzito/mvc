<?php

class fornecedorController extends controller{

	public function index(){
		$dados = array();
		$this->loadTemplate('fornecedor', $dados);
	}

	public function add(){
		if(!empty($_POST['txt_fornecedor'])){
			$fornecedor = strtoupper($_POST['txt_fornecedor']);
			$email = $_POST['txt_email'];
			$celular = $_POST['txt_celular'];

			$forn = new fornecedores();
			$forn->add($fornecedor, $email, $celular);
			header('Location: '.BASE_URL.'fornecedor/lista');
		}else{
			echo "Nao tem nada";
		}
	}


	public function lista(){
		$dados = array();
		$forn = new Fornecedores();
		$dados['listaforn'] = $forn->getAll();
		$this->loadTemplate('fornecedor', $dados);
	}


	public function del($id){
		if(!empty($id)){
			$forn = new Fornecedores();
			$forn->del($id);
		}
		header('Location:'.BASE_URL.'fornecedor/lista');
	}


	public function edit($id){
		$dados = array();
		$forn = new Fornecedores();
		$dados['lista'] = $forn->getFornecedor($id);
		if(isset($dados['lista']['id'])){
			$this->loadTemplate('fornecedor', $dados);
			exit;
		}

	}



	public function editsave($id){
		if(!empty($_POST['txt_fornecedor'])){
			$fornecedor = strtoupper($_POST['txt_fornecedor']);
			$email = $_POST['txt_email'];
		    $celular = $_POST['txt_celular'];
			$forn = new Fornecedores();

			$forn->edit($id, $fornecedor, $email, $celular);
			header('Location:'.BASE_URL.'fornecedor/lista');
		}else{
			header('Location:'.BASE_URL.'fornecedor/lista');
		}

	}

}


?>