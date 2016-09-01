 <div id="main" class="container-fluid" style="margin-top: 50px">

 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Usuários</h2>
		</div>
		<div class="col-sm-6">
                        <form action="<?=base_url('usuarios/buscar')?>" method="post">
			<div class="input-group h2">
				<input name="words" class="form-control" id="search" type="text" placeholder="Pesquisar usuários">
				<span class="input-group-btn">
                                    <input type="hidden" name="submit"/>
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
                        </form>
		</div>
		<div class="col-sm-3">
			<a href="<?=base_url('usuarios/add')?>" class="btn btn-primary pull-right h2">Novo Usuário</a>
		</div>
	</div> <!-- /#top -->


 	<hr />
 	<div id="list" class="row">

	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
                                        <th>Login</th>
					<th>Grupo</th>
					<th class="actions">Ações</th>
				</tr>
			</thead>
			<tbody id="fora">
                            <?php foreach($rows as $row){ ?>
				<tr id="<?=$row['id']?>">
					<td><?=$row['id']?></td>
					<td><?=$row['nome']?></td>
					<td><?=$row['login']?></td>
					<td><?=$row['grupo']?></td>
					<td class="actions">
						<a class="btn btn-warning btn-xs" href="<?=base_url('usuarios/edit/'.$row['id'])?>">Editar</a>
						<a class="btn btn-danger btn-xs" id="<?=$row['id']?>" onclick="setId(this.id)" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
					</td>
				</tr>
                                <?php } ?>
				
			</tbody>
		</table>
	</div>

	</div> <!-- /#list -->

	<div id="bottom" class="row">
		<div class="col-md-12">
			<?=$pagination?>
		</div>
	</div> <!-- /#bottom -->
 </div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" onclick="apaga('usuarios')" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>