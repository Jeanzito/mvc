<?php 

class venderController extends controller{

    public function index(){
		$dados = array();
		$this->loadTemplate('vender', $dados);
	}


    public function lista(){
		$dados = array();

		$prod = new produtos();
		$dados['listaprod'] = $prod->getAll();


		$forn = new Fornecedores();
		$dados['listaforn'] = $forn->getAll();

		$cat = new categorias();
		$dados['lista'] = $cat->getAll();
		$this->loadTemplate('vender', $dados);
	}


    public function ven(){
        $dados = array();
        $estoque = $_POST['estoque'];

        $vender = new Vender();
        $dados['vender'] = $vender->getAll();


    }
    


}

?>