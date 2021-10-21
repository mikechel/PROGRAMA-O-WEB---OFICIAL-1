<?php 
    include("conexao.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM aluno WHERE matricula='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="matricula" value="<?php echo $row['matricula']  ?>">
                                
                                
                                <label class = "form-label">Nome</label><input type="text" class="form-control mb-3" name="nome" placeholder="nome" value="<?php echo $row['nome']  ?>">
                                <label class = "form-label">Materia</label><input type="text" class="form-control mb-3" name="materia" placeholder="Materia" value="<?php echo $row['materia']  ?>">
                                <label class = "form-label">Nota</label><input type="text" class="form-control mb-3" name="nota" placeholder="Nota" value="<?php echo $row['nota']  ?>">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Atualizar">
                    </form>
                    
                </div>
    </body>
</html>