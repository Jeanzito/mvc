<?php
class Core{
	public function run(){
		$url = '/';
		//se existir o get URL
		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}

		//Se o envio nao estiver vazio e $url for diferente de /
		$params = array();
		if(!empty($url) && $url != '/'){
			//explode separa os dados pela /
			$url = explode('/', $url);
			//array shift revome primeira posiçao da lista
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}

			if(count($url) > 0){
				$params = $url;
			}

		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}
		
		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);

	}
}
?>