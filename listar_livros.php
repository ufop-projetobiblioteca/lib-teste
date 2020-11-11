<body>
    <?php
    $resultado = pg_query("SELECT * FROM livros");
    $linhas = pg_num_rows($resultado);
    ?>
    <div role="main" class="container">

        <div class="starter-template">
            <div class="row">
                <div class="col-md-12">
                    <table id="table_id" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Edição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linhas = pg_fetch_array($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $linhas['id_livros'] . "</td>";
                                echo "<td>" . $linhas['nome'] . "</td>";
                                echo "<td>" . $linhas['autor'] . "</td>";
                                echo "<td>" . $linhas['edicao'] . "</td>";
                                echo "
                                        <td>
                                        <a href=''>
                                            <button type='button' class='btn btn-warning btn-sm'>Editar</button>
                                        <a href=''>
                                            <button type='button' class='btn btn-danger btn-sm'>Apagar</button>
                                        </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
    <script src="script/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="script/bootstrap.bundle.min.js"></script>
</body>

</html>