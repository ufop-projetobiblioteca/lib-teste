<?php
$resultado = pg_query("SELECT * FROM reservas");
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
                            <th scope="col">Código do Exemplar</th>
                            <th scope="col">Data da Reserva</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($linhas = pg_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $linhas['rmatricula'] . "</td>";
                            echo "<td>" . $linhas['rcodigoexemplar'] . "</td>";
                            echo "<td>" . $linhas['rdata'] . "</td>";
                            ?>
                            <td>
                                <a href=''>
                                    <button type='button' class='btn btn-warning btn-sm'>Emprestar</button>
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