<?php

class categoriaController extends controller{

	public function index(){
		$dados = array();
		$this->loadTemplate('categoria', $dados);
	}

	public function lista(){
		$dados = array();
		$cat = new categorias();
		$dados['lista'] = $cat->getAll();
		$this->loadTemplate('categoria', $dados);
	}

	public function add(){
		if(!empty($_POST['txt_categoria'])){
			$categoria = strtoupper($_POST['txt_categoria']);
			
			$cat = new categorias();
			$cat->add($categoria);
			header('Location: '.BASE_URL.'categoria/lista');
		}else{
			echo "Nao tem nada";
		}
	}

	public function del($id){
		if(!empty($id)){
			$cat = new categorias();
			$cat->del($id);
		}
		header('Location:'.BASE_URL.'categoria/lista');
	}

	public function edit($id){
		$dados = array();
		$cat = new categorias();
		$dados['info'] = $cat->getcategoria($id);
		if(isset($dados['info']['id'])){
			$this->loadTemplate('categoria', $dados);
			exit;
		}

	}

	public function editsave($id){
		if(!empty($_POST['txt_categoria'])){
			$categoria = strtoupper($_POST['txt_categoria']);
			$cat = new categorias();

			$cat->edit($id, $categoria);
			header('Location:'.BASE_URL.'categoria/lista');
		}else{
			header('Location:'.BASE_URL.'categoria/lista');
		}

	}

}

?>