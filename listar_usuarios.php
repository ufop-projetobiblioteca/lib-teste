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
                                <a class="btn btn-primary btn-sm" href="javascript: abrir();" role="button">Visualizar</a>
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
                                </div>


                                <a href='admin.php?link=7&id=<?php echo $linhas['matricula']; ?>'>
                                    <button type='button' class='btn btn-warning btn-sm'>Editar</button>
                                    <a href=''>
                                        <button type='button' class='btn btn-danger btn-sm'>Apagar</button>
                            </td>
                        <?php
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>