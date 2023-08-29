<?php $listaEstudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row text-center">
    <h2>Semana da Acessibilidade</h2>
    </div>

    <div class="text-center-dark">
    <img class="rounded" scr="https://www.fatecjales.edu.br/images/fatecnologia/2023/02/acessibilidade.jpeg" alt="Representação grafica de como utilizar a tag alt em uma imagem">
    </div>
    <br>
    <br>
   
        <table class="table table-dark">
           <thead>
                <tr>
                   <th scope="col">#</th>
                   <th scope="col">Nome</th>
                   <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach ($listaEstudantes as $estudante) { ?>
                   <tr>
                       <td><?php echo $estudante["id"]; ?></td>
                       <td><?php echo $estudante["nome"]; ?></td>
                       <td><?php echo $estudante["idade"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>
</html>