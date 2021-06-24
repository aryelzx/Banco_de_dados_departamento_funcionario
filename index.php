<?php require_once 'php_action/db_connect.php';
 ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL); ?>
<html>
<head><title></title>
   </head>

<body>
<a href="create.php"><button type="button">Adicionar Funcionario</button></a> 
    <table border = '1'>
        <thead>
            <tr>
                <th>Nome do Funcionário</th>
                <th>Nome do Departamento</th>
            </tr>   
        <thead>     
   

    <tbody>
        <?php
            $sql = "SELECT f.nome_funcionario,d.nome_departamento, f.idfuncionarios FROM funcionario as f,departamento as d WHERE f.departamento_iddepartamento = d.iddepartamento"; 
            $result = $connect->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>".$row['nome_funcionario']."</td>
                            <td>".$row['nome_departamento']."</td>
                            <td><a href='edit.php?id=".$row['idfuncionarios']."'><button type='button'>editar</button></a>
							<a href='remove.php?id=".$row['idfuncionarios']."'><button type='button'>Excluir</button></a>

							</td>
                        </tr>";
                }
            }
        ?>
    </tbody>
    </table>
</body>
</html>