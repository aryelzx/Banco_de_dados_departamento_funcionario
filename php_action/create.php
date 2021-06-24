<?php
require_once 'db_connect.php';


if($_POST){
    $idDepart = $_POST["departamento"];
    $nomeFuncionario = $_POST["nomeFuncionario"]; 

    $sql = "INSERT INTO funcionario (idfuncionarios,nome_funcionario,departamento_iddepartamento) VALUES ('','$nomeFuncionario','$idDepart')";
  
    if($connect->query($sql) == TRUE){
        echo "Dados gravados com sucesso!";
        echo "<a href='../create.php'><button type='button'>Cadasatrar</button></a>";
        echo "<a href='../index.php'><button type='button'>Consultar</button></a>";
    }else{
        echo "Erro: ". $sql . ' '.$connect->connect_error;
    }
    $connect->close();
}
?>