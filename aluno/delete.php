<?php

include("conexao.php");
$con=conectar();

$matricula=$_GET['id'];

$sql="DELETE FROM aluno  WHERE matricula='$matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
