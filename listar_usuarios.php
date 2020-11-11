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
                                <a href=''>
                                    <button type='button' class='btn btn-primary btn-sm'>Visualizar</button>
                                <a href='admin.php?link=7&id=<?php echo $linhas['matricula']; ?>'>
                                    <button type='button' class='btn btn-warning btn-sm'>Editar</button>
                                <a href=''>
                                    <button type='button' class='btn btn-danger btn-sm'>Apagar</button>
                            </td>";
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