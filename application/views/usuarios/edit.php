<div id="main" class="container-fluid">

    <h3 class="page-header">Editar Usuário</h3>

    <form action="<?=base_url('usuarios/edit')?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?=$edit_user['nome']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" name="login" onkeyup="this.value=this.value.replace(/[' 'çÇáÁàÀéèÉÈíìÍÌóòÓÒúùÚÙñÑ~@&]/g,'')" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?=$edit_user['login']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?=$edit_user['senha']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="sel1">Grupo:</label>
                <select class="form-control" name="grupo" id="sel1">
                    <?php
                    $string = "<option value='geral'>Geral</option>"
                    ."<option value='admin'>Administradores</option>"
                    ."<option value='rh'>Recursos Humanos</option>"
                    ."<option value='vendedor'>Vendedores</option>"
                    ."<option value='comprador'>Compradores</option>";

                    $string = str_replace("value='{$edit_user['grupo']}'", " selected='selected' value='{$edit_user['grupo']}'", $string);
                    echo $string;
                    ?>
                    
                </select>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <input type="hidden" name="id" value="<?=$edit_user['id']?>"/>
                <input type="hidden" name="submit"/>
                <a href="<?= base_url('usuarios') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>