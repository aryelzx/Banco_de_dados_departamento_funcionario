<?php
require_once 'php_action/db_connect.php';
if($_GET['id']){
	$idfuncionarios = $_GET['id'];

	$sql = "SELECT * FROM funcionario WHERE idfuncionarios = {$idfuncionarios}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();





 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Remover Funcionario</title>
</head>
<body>
<h3>realmente deseja remover esse funcionario?</h3>
<form action="php_action/remove.php" method="post">
	<input type="hidden" name="idfuncionarios" value="<?php echo $data['idfuncionarios']?>" />
	<button type="submite">Confirmar</button>
	<a href="index.php"><button type="button">voltar</button></a>

</form>

</body>
</html>





<?php

}



?>