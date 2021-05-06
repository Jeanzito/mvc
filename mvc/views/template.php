<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SISMED</title>
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/css.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Open Sans', sans-serif;">
	<div class="container">
		<h1 class="text-center">BEM VINDO AO PAINEL 1.0</h1>
<div class="text-center">	
<a class="btn btn-dark" href="<?php echo BASE_URL;?>">Home</a> | <a class="btn btn-warning" href="<?php echo BASE_URL;?>categoria/lista">Categoria</a> | <a class="btn btn-success" href="<?php echo BASE_URL;?>produto/lista">Produtos</a>  | <a class="btn btn-primary" href="<?php echo BASE_URL;?>fornecedor/lista">Fornecedores</a>  | <a class="btn btn-primary" href="<?php echo BASE_URL;?>vender/lista">Vender</a>
</div>
<hr>
<?php
$this->loadView($viewName, $viewData);
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
<h1>ESTE É O RODAPE DO SITE</h1>	
	</div>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>