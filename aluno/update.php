<?php

include("conexao.php");
$con=conectar();

$matricula=$_POST['matricula'];
$nome=$_POST['nome'];
$materia=$_POST['materia'];
$nota=$_POST['nota'];


$sql="UPDATE aluno SET nome='$nome', materia='$materia', nota='$nota' WHERE matricula='$matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>