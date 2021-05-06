<h1 class="text-center">Cadastrar Fornecedor
<a href="#exampleModal" data-bs-toggle="modal"><img class="icon" src="<?php echo BASE_URL;?>assets/img/add-icon.png" alt=""></a>
	</h1>

<hr>
<!-- LISTA--> 
<?php 
if(isset($listaforn)){
?>
<table class="bg-light table">
  <thead>
    <tr class="bg-primary">
      <th scope="col">ID</th>
      <th scope="col">CATEGORIAS</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELEFONE</th>
       <th scope="col">AÇÕES</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($listaforn as $item){  ?>
    <tr>
      <th scope="row"><?php echo $item['id'];?></th>
      <td><?php echo $item['fornecedor'];?></td>
      <td><?php echo $item['email'];?></td>
      <td><?php echo $item['celular'];?></td>
      <td>
      	<a href="<?php echo BASE_URL;?>fornecedor/edit/<?php echo $item['id'];?>" class="btn btn-primary">EDITAR</a>
      	<a href="<?php echo BASE_URL;?>fornecedor/del/<?php echo $item['id'];?>" class="btn btn-danger">EXCLUIR</a></td>
    </tr> 
	<?php } ?>

  </tbody>
</table>
<?php } ?>
<!-- Modal FORMULARIO-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Fornecedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo BASE_URL;?>fornecedor/add">
		  <div class="mb-3">
		    <input class="form-control" type="text" name="txt_fornecedor" placeholder="Nome Do Fornecedor">
		  </div>

      <div class="mb-3">
        <input class="form-control" type="text" name="txt_email" placeholder="Email Do Fornecedor">
      </div>

       <div class="mb-3">
        <input class="form-control" type="text" name="txt_celular" placeholder="Celular Do Fornecedor">
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

<!-- EDITAR-->
<?php
if(isset($lista['id'])){
?>
<div class="row">
  <div class="col-6">
    <h5 class="modal-title mb-3" id="exampleModalLabel">Editar Fornecedores</h5>

        <form method="POST" action="<?php echo BASE_URL;?>fornecedor/editsave/<?php echo $lista['id']; ?>">
      <div class="mb-3">
        <input class="form-control" type="text" name="txt_fornecedor" value="<?php echo $lista['fornecedor'];?>">
      </div>

       <div class="mb-3">
        <input class="form-control" type="text" name="txt_email" value="<?php echo $lista['email'];?>">
      </div>

       <div class="mb-3">
        <input class="form-control" type="text" name="txt_celular" value="<?php echo $lista['celular'];?>">
      </div>
  
        <button type="submit" class="btn btn-primary">Alterar</button>

      </form>
  </div>

</div>
        
<?php } ?>
<!-- FIM -->