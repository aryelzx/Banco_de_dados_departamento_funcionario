<?php 
require_once 'db_connect.php';

if($_POST){
	$nome_funcionario = $_POST["nome_funcionario"];
    $idfuncionarios = $_POST["idfuncionarios"];

	$sql = "UPDATE funcionario SET nome_funcionario = '$nome_funcionario' WHERE idfuncionarios = '$idfuncionarios'";

	if($connect -> query($sql) === TRUE){

		echo "<p> Atualização realizada com sucesso!</p>";
		
		echo "<a href='../index.php'><button type='button'>Voltar</button>";
	}
	else{
		echo "Erro ao atualizar os dados: ". $connect->error;
	}
	$connect->close();
}
?>