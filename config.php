<?php 
	$dsn = "mysql:dbname=meuDB;host=127.0.0.1;charset=utf8";
	$dbuser = "root";
	$dbpass = "root";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);

	} catch (PDOException $e) {
		echo "Erro de conexão: ".$e->getMessage();
	}
?>