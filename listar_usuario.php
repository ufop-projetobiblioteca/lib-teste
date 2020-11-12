<?php
include_once("conexao.php");

//consultar no banco de dados
$result_usuario = "SELECT * FROM usuarios ORDER BY pnome DESC";
$resultado_usuario = pg_query($conexao, $result_usuario);

//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND (pg_num_rows($resultado_usuario) != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Matrícula</th>
				<th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row_usuario = pg_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<th><?php echo $row_usuario['matricula']; ?></th>
					<td><?php echo $row_usuario['pnome']; ?></td>
                    <td><?php echo $row_usuario['unome']; ?></td>
                    <td><?php echo $row_usuario['email']; ?></td>
				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}