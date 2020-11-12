<?php
$resultado = pg_query("SELECT * FROM usuarios");
$linhas = pg_num_rows($resultado);
?>
<div role="main" class="container">
    <div class="starter-template">
        <div class="row">
            <div class="col-md-12">
                <table id="table_id" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($linhas = pg_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $linhas['matricula'] . "</td>";
                            echo "<td>" . $linhas['pnome'] . "</td>";
                            echo "<td>" . $linhas['unome'] . "</td>";
                            echo "<td>" . $linhas['email'] . "</td>";
                        ?>
                            <td>
                                <!-- <a class="btn btn-primary btn-sm" href="javascript: abrir();" role="button">Visualizar</a>
                                <div id="popUp" class="modal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Matrícula</p>
                                                <form method="POST" action="admin.php?link=8&id=<?php echo $linhas['matricula']; ?>">
                                                    <input type="submit" value="Excluir" class="btn btn-danger" role="button">
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-primary" href="javascript: fechar();" role="button">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->


                                <a href='admin.php?link=7&id=<?php echo $linhas['matricula']; ?>'>
                                    <button type='button' class='btn btn-warning btn-sm'>Editar</button>
                                <a href=''>
                                    <button type='button' class='btn btn-danger btn-sm'>Apagar</button>
                                <button type="button" class="btn btn-outline-primary view_data" id="<?php echo $row_usuario['id']; ?>">Visualizar</button>
                            </td>
                        <?php
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            /* var qnt_result_pg = 50; //quantidade de registro por página
            var pagina = 1; //página inicial
            $(document).ready(function() {
                listar_usuario(pagina, qnt_result_pg); //Chamar a função para listar os registros
            });

            function listar_usuario(pagina, qnt_result_pg) {
                var dados = {
                    pagina: pagina,
                    qnt_result_pg: qnt_result_pg
                }
                $.post('listar_usuario.php', dados, function(retorna) {
                    //Subtitui o valor no seletor id="conteudo"
                    $("#conteudo").html(retorna);
                });
            } */

            $(document).ready(function() {
                $(document).on('click', '.view_data', function() {
                    var user_id = $(this).attr("id");
                    //alert(user_id);
                    //Verificar se há valor na variável "user_id".
                    if (user_id !== '') {
                        var dados = {
                            user_id: user_id
                        };
                        $.post('visualizar.php', dados, function(retorna) {
                            //Carregar o conteúdo para o usuário
                            $("#visul_usuario").html(retorna);
                            $('#visulUsuarioModal').modal('show');
                        });
                    }
                });
            });
        </script>
    </div>
</div>