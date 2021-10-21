<?php
include("conexao.php");
$con=conectar();

$matricula=$_POST['matricula'];
$nome=$_POST['nome'];
$materia=$_POST['materia'];
$nota=$_POST['nota'];



$sql="INSERT INTO aluno VALUES('$matricula','$nome','$materia','$nota')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>