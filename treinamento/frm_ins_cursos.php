<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Cadastro do Curso</title>
</head>

<body>
    <h1>Cadastre as informacoes do Curso:</h1>
    <br>
    <form action="Cursos/inserir.php" method="POST">
        <div>Nome do Curso:</div>
        <input type="text" name="nm_curso" value="">
        <br><br>
        <div>Numero de identificacao do funcionario:</div>
        <input type="number" name="id_funci" value="">
        <br><br>
        <input type="submit" value="cadastrar" name="cadastrar">

    </form>
</body>

</html>