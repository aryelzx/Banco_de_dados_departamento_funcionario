<?php 
require_once 'db_connect.php';

if($_POST){
	$idfuncionarios = $_POST['idfuncionarios'];

	$sql = "DELETE FROM funcionario WHERE idfuncionarios ={$idfuncionarios} ";
	if($connect->query($sql)== TRUE){
		echo "<p>funcionario removido com sucesso!</p>";
		echo "<a href='../index.php'><button type = 'button'>Voltar</button></a>";
	}else{
		echo "Erro ao excluir o registro: ".$connect->error;
	}

	$connect->close();
}




?>



