<?php 
require_once 'php_action/db_connect.php';

if($_GET['id']){
	$idfuncionarios = $_GET['id'];

	$sql = "SELECT * FROM funcionario WHERE idfuncionarios = {$idfuncionarios}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();

?>

<html>
<head>

	<style type="text/css">
			fieldset{
				width: 50%;
				margin: auto;
				margin-top:100px;
			}
			table tr th{
				margin-top: 20px;
			}
	</style>
	<title></title>
</head>
<body>

	<fieldset>
		<legend>Editar funcionario</legend>

		<form action="php_action/update.php" method="post">
		<table cellspacing='0' cellpadding="0">
			<tr>
				<th>Nome do novo funcionario</th>
				<td><input type="text" name="nome_funcionario" placeholder="Nome do funcionario" value="<?php echo $data['nome_funcionario']?>"></td>
			</tr>


			<tr>
				<input type="hidden" name="idfuncionarios" value="<?php echo $data['idfuncionarios'] ?>"/>
				<td><button type="submit">Salvar Alterações</button></td>
				<td><a href="index.php"><button type="button">Voltar</button></a></td>
			</tr>
			</table>
			</form>
			</fieldset>


</body>
</html>

<?php
	
	}

?>