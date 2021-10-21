

<?php 
/*
União Metropolitana de Educação e Cultura,
Curso: SISTEMAS DE INFORMAÇÃO
Disciplina: PROGRAMAÇÃO WEB 2   
Professor: PABLO ROXO
Aluno: MICHEL VINCIIUS MOREIRA FERREIRA
*/
    include("conexao.php");
    $con=conectar();

    $sql="SELECT *  FROM aluno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Alunos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Inserir dados dos alunos</h1>
                                <form action="inserir.php" method="POST">

                                <label class = "form-label">Matricula</label><input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula">
                                <label class = "form-label">Nome</label><input type="text" class="form-control mb-3" name="nome" placeholder="Nome">
                                <label class = "form-label">Materia</label><input type="text" class="form-control mb-3" name="materia" placeholder="Matéria">
                                <label class = "form-label">Nota</label><input type="text" class="form-control mb-3" name="nota" placeholder="Nota Final">
                                    
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Matricula</th>
                                        <th>Nome</th>
                                        <th>Materia</th>
                                        <th>Nota Final</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['matricula']?></th>
                                                <th><?php  echo $row['nome']?></th>
                                                <th><?php  echo $row['materia']?></th> 
                                                <th><?php  echo $row['nota']?></th>
                                                
                                                   
                                                <th><a href="atualizar.php?id=<?php echo $row['matricula'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['matricula'] ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')">Excluir</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>