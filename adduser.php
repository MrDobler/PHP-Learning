<?php
	require 'config.php';
	
	if(isset($_POST['nome']) && empty($_POST['nome']) == false){
	    $nome = addslashes($_POST['nome']);
	    $email = addslashes($_POST['email']);
	    $senha = md5(addslashes($_POST['senha']));

	    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
	    $pdo->query($sql);
		
		header("Location: index.php");
	}  
   

?>

<h2 align="center">ADICIONAR USUARIO</h2>
<fieldset style="width:25%; margin: 0px auto;">
   <form method="POST">
     <p>Nome: <input type="text" name="nome" /></p>
     <p>E-mail: <input type="email" name="email"/></p>
     <p>Senha: <input type="password" name="senha"/></p>
     <p align="center"><input type="submit" value="Cadastrar"/></p>
   </form>
 </fieldset>
 
