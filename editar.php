<?php 
	require 'config.php';
	if(isset($_GET['id']) && empty($_GET['id']) == false){
		$id = addslashes($_GET['id']);
	}else{
		header("Location: index.php");
	}

	if(isset($_POST['nome']) && empty($_POST['nome']) == false){

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$nascimento = addslashes($_POST['nascimento']);

		$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', nascimento = '$nascimento' WHERE id = $id";
		$pdo->query($sql);

		header("Location: index.php");
	}

	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0){
		$dado = $sql->fetch();
	}else{
		header("Location: index.php");
	}
?>


<h2 align="center">EDITAR USUARIO</h2>
<fieldset style="width:25%; margin: 0px auto;">
   <form method="POST">
    	<p align="center">Nome: <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"/></p>
    	<p align="center">E-mail: <input type="email" name="email" value="<?php echo $dado['email']; ?>"/></p>
    	<p align="center">Nascimento: <input type="date" name="nascimento" value="<?php echo $dado['nascimento']; ?>"/></p>
     	<p align="center"><input type="submit" value="Atualizar"/></p>
	</form>
 </fieldset>