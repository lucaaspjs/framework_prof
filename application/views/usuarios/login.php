 <div id="main" class="container-fluid">

  <h3 class="page-header">Acesso</h3>

  <form action="<?=base_url('usuarios/login')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Login</label>
  	  	<input type="text" class="form-control" name="login" id="exampleInputEmail1" placeholder="Digite o valor">
  	  </div>
        </div>
      <div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Senha</label>
  	  	<input type="password" class="form-control" name="senha" id="exampleInputEmail1" placeholder="Digite o valor">
  	  </div>
      </div>

	<hr />

	<div class="row">
	  <div class="col-md-12">
              <input type="hidden" name="submit"/>
	  	<button type="submit" class="btn btn-primary">Entrar</button>
	  </div>
	</div>

  </form>
 </div>