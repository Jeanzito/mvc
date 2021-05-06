<?php

class homeController extends controller{
	public function index(){
		$dados = array(
			'nome' => 'Jean',
			'sobrenome' => 'Lourenço',
			'idade' => 18
		);

		$this->loadTemplate('home', $dados);
	}
}

?>