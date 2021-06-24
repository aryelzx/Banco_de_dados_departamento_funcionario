<?php require_once 'php_action/db_connect.php'; ?>

<html>
<head><title></title></head>
<body>
    <form action="php_action/create.php" method="post">
        Nome do Funcionário: <input type="text" name="nomeFuncionario"></br>
        Nome do Departamento:
        <?php
            $sql = "SELECT * FROM departamento";
            $result = $connect->query($sql);
            if($result->num_rows > 0){
                echo '<select name="departamento">';
                while($row = $result->fetch_assoc()){
                    echo '<option value='.$row["iddepartamento"].'>'.$row['nome_departamento'].'</option>';
                }
                echo "</select>";
            }
        ?>
       <a href="php_action/create.php"> <button type="submit">Adicionar Funcionário</button></a>
    </form>



</body>
</html>