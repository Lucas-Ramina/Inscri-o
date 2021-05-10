<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Cadastro do funcionario</title>
</head>

<body>
    <h1>Cadastre as informacoes do funcionario:</h1>
    <br>
    <form action="Funcionario/inserir.php" method="POST">
        <div>RA:</div>
        <input type="number" name="ra" value="">
        <br><br>
        <div>Nome:</div>
        <input type="text" name="nome" value="">
        <br><br>
        <div>Idade:</div>
        <input type="number" name="idade" value="">
        <br><br>
        <div>Nacionalidade:</div>
        <input type="text" name="nacionalidade" value="">
        <br><br>
        <div>Sexo:</div>
        <input type="text" name="sexo" value="">
        <br><br>
        <div>Endereco:</div>
        <input type="text" name="endereco" value="">
        <br><br>
        <div>Telefone:</div>
        <input type="number" name="telefone" value="">
        <br><br>
        <input type="submit" value="cadastrar" name="cadastrar">

    </form>
</body>

</html>