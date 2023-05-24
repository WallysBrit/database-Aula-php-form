<?php
    $conexao = new mysqli('localhost', 'root', '12345','escola');

    $sql = "SELECT * FROM aluno";

    $resultado = $conexao->query($sql);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Lista de alunos</title>
   
</head>
<body >
    <h3>Lista de alunos</h3>
    <a href="create.php">Adicionar aluno</a>
    <br><br>
    <table border= 1>
        <thead>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Ações</th>
        </thead>
        <tbody>
        <?php if($resultado->num_rows) { ?>
           <?php while ($aluno = $resultado->fetch_object()) { ?>
            <tr>
                <td><?php print ($aluno->matricula); ?></td>
                <td><?php print ($aluno->nome); ?></td>
                <td><?php print ($aluno->cpf); ?></td>
                <td> 

               <a href="editar.php">Editar </a>-
               <a href="excluir.php">Excluir</a>

               </td>
            </tr>

            <?php } ?>

        <?php } else { ?>
            <tr>
                <td colspan=4> Nenhum resultado encontrado 
                    </td >
            </tr>
        <?php } ?>
        </tbody> 
            
    </table>
    
</body>
</html>