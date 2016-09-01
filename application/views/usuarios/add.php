<div id="main" class="container-fluid">

    <h3 class="page-header">Criar Usuário</h3>

    <form action="<?=base_url('usuarios/add')?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" name="login" onkeyup="this.value=this.value.replace(/[' 'çÇáÁàÀéèÉÈíìÍÌóòÓÒúùÚÙñÑ~@&]/g,'')" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="sel1">Grupo:</label>
                <select class="form-control" name="grupo" id="sel1">
                    <option value="geral">Geral</option>
                    <option value="admin">Administradores</option>
                    <option value="rh">Recursos Humanos</option>
                    <option value="vendedor">Vendedores</option>
                    <option value="comprador">Compradores</option>
                </select>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <input type="hidden" name="submit"/>
                <a href="<?= base_url('usuarios') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>