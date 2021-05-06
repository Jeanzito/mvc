<h1 class="text-center">Cadastrar Produtos
<a href="#exampleModal" data-bs-toggle="modal"><img class="icon" src="<?php echo BASE_URL;?>assets/img/add-icon.png" alt=""></a>
</h1>

<hr>

<!-- Modal FORMULARIO-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Produtos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo BASE_URL;?>produto/add">
		  <div class="mb-3">
		    <input class="form-control" type="text" name="txt_produto" placeholder="Digite o produto">
		  </div>

      <div class="mb-3">

		    <select name="txt_fornecedor" class="form-select">

		    	<option disabled="true" value="Escolha a opção" placeholder="Escolha a opção">Escolha a opçao</option>

		    	<?php

		    	
		    	if(isset($listaforn)){

		    		foreach($listaforn as $item) {
		    	
		    	?>

		    	<option value="<?php echo $item['id'];?>">

		    		<?php echo $item['fornecedor'];?>
		    	</option>
		    	
		    	<?php 
		    		}

		    	}

		    	?>

		    </select>
		  </div>

		  <div class="mb-3">

		    <select name="txt_categoria" class="form-select">

		    	<option disabled="true" value="Escolha a opção" placeholder="Escolha a opção">Escolha a opçao</option>

		    	<?php

		    	
		    	if(isset($lista)){

		    		foreach($lista as $item) {
		    	
		    	?>

		    	<option value="<?php echo $item['id'];?>">

		    		<?php echo $item['categoria'];?>
		    	</option>
		    	
		    	<?php 
		    		}

		    	}

		    	?>

		    </select>
		  </div>

		  <div class="mb-3">
		    <input class="form-control" type="text" name="txt_valor" placeholder="Digite o valor do produto">
		  </div>

		  <div class="mb-3">
		    <input class="form-control" type="text" name="txt_quant" placeholder="Digite a quantidade">
		  </div>
	
      </div>
      <div class="modal-footer">  
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- FIM -->

<!-- LISTA--> 
<?php 
if(isset($listaprod)){
?>

<table class="table bg-light">
  <thead>
    <tr class="bg-success">
      <th scope="col">ID</th>
      <th scope="col">PRODUTO</th>
      <th scope="col">FORNECEDOR</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">VALOR</th>
      <th scope="col">ESTOQUE</th>
      <th scope="col">AÇÕES</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($listaprod as $item){ ?>
    <tr>
      <th scope="row"><?php echo $item['id'];?></th>
      <td><?php echo $item['produto'];?></td>
      <td><?php echo $item['fornecedor'];?></td>
      <td><?php echo $item['categoria'];?></td>
      <td><?php echo $item['valor'];?></td>
      <td><?php echo $item['estoque'];?></td>
      <td>
      	<a href="<?php echo BASE_URL;?>produto/edit/<?php echo $item['id'];?>" class="btn btn-primary">EDITAR</a>
      	<a href="<?php echo BASE_URL;?>produto/del/<?php echo $item['id'];?>" class="btn btn-danger">EXCLUIR</a></td>
    </tr> 
	<?php } ?>

  </tbody>
</table>
<?php } ?>

<!-- EDITAR-->
<?php
if(isset($info)){
?>
<div class="row">
  <div class="col-6">
    <h5 class="modal-title mb-3" id="exampleModalLabel">Editar Produtos</h5>

        <form method="POST" action="<?php echo BASE_URL;?>produto/editsave/<?php echo $info['id']; ?>">
      <div class="mb-3">
        <input class="form-control" type="text" name="txt_produto" value="<?php echo $info['produto'];?>">
      </div>


      <div class="mb-3">

		    <select name="txt_fornecedor" class="form-select">

		    	<option disabled="true" value="Escolha a opção" placeholder="Escolha a opção">Escolha a opçao</option>

		    	<?php

		    	
		    	if(isset($listaforn)){

		    		foreach($listaforn as $item) {
		    	
		    	?>

		    	<option value="<?php echo $item['id'];?>"

		    	<?php
		    	if($item['id'] == $info['idfornecedor'] ){

		    	
		    	?>	

		    	 selected
		    	<?php } ?>
		    	 >

		    		<?php echo $item['fornecedor'];?>
		    	</option>
		    	
		    	<?php 
		    		}

		    	}

		    	?>

		    </select>
		  </div>

      <div class="mb-3">

		    <select name="txt_categoria" class="form-select">

		    	<option disabled="true" value="Escolha a opção" placeholder="Escolha a opção">Escolha a opçao</option>

		    	<?php

		    	
		    	if(isset($lista)){

		    		foreach($lista as $item) {
		    	
		    	?>

		    	<option value="<?php echo $item['id'];?>"

		    	<?php
		    	if($item['id'] == $info['idcat']){

		    	
		    	?>	

		    	 selected
		    	<?php } ?>
		    	 >

		    		<?php echo $item['categoria'];?>
		    	</option>
		    	
		    	<?php 
		    		}

		    	}

		    	?>

		    </select>
		  </div>

       <div class="mb-3">
        <input class="form-control" type="text" name="txt_valor" value="<?php echo $info['valor'];?>">
      </div>

       <div class="mb-3">
        <input class="form-control" type="text" name="txt_quant" value="<?php echo $info['estoque'];?>">
      </div>
  
  
  
        <button type="submit" class="btn btn-primary">Alterar</button>

      </form>
  </div>

</div>
        
<?php } ?>
<!-- FIM -->