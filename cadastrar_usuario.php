<div class="container">
    <h1>Cadastrar Usuário</h1>
    <div class="starter-template">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="processa/processa_cad_usuario.php">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">CPF:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="cpf">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="pnome">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sobrenome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="unome">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Matrícula:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="matricula">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="senha">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo de Usuário:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="tipo">
                                <option value="1">Administrador</option>
                                <option value="0">Usuário Comum</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>