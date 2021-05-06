<?php
//importanto o environment

require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/mvc/");
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	define("BASE_URL", "http://www.sismed.com.br/");
	$config['dbname'] = 'sismed';
	$config['host'] = 'enderecodosservidor';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'senhadoserver';
}

try{
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $erro){
	echo "ERRO: ".$erro->getMessage();
	exit;
}

?>
