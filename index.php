<?php 
	require 'config.php';
?>
<header>
	<h2 align="center">Controle de Usuários</h2>
</header>
<aside><fieldset align="left"; style="width:11.5%"><a href="adduser.php">Adicionar Usuário</a></fieldset></aside>
<section>
	<fieldset style="width:50%; margin: 0px auto;">
		<table align="center" border="1" > 
			<tr>
				<th>Nome</th><th>E-mail</th><th>Ações</th>	
			</tr>
			<?php 
				$sql = "SELECT * FROM usuarios";
				$sql = $pdo->query($sql);
				if($sql->rowCount() > 0){
					foreach ($sql->fetchAll() as $usuario) {
					
						echo "<tr>";
						echo "<td>".$usuario['nome']."</td>";
						echo "<td>".$usuario['email']."</td>";
						echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> | 
							<a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
						echo "</tr>";

					}	
				}
			?>
		</table>
	</fieldset>
</section>