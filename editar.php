<?php
    $conexao = new mysqli('localhost', 'root', '12345', 'escola');

    $sql = "SELECT * FROM `aluno` WHERE `id` = {_GET[`id`]}";

    $resultado = $conexao->query($sql);
    $aluno = $resultado->fetch_object();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar aluno</title>
</head>
<body>
    <h3> Editar aluno</h3>
    <form action="" method='POST'>
        <input type="hidden" name="id" value="<?= $aluno->id ?>">
        <label for="mat">Matrícula:</label>
        <br>
        <input value= "<?php echo($aluno->matricula); ?>" type="number" id = "mat" name='matricula' placeholder='Digite o número'>
        <br>
        <label for="nome">Nome:</label>
        <br>
        <input value="<?= $aluno->nome ?>" type="text" id = "nome" name='nome' placeholder='Digite o nome'>
        <br>
        <label for="cpf">CPF do aluno:</label>
        <br>
        <input value="<?= $aluno-> nome ?> " type="text" id = "cpf" name='cpf' placeholder='Digite o CPF'>
        <br><br>
        <input type="submit" value="Salvar">
        <a href="index.php">Voltar</a>
    </form>
</body>
</html> 
