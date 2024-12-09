<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("");
    include_once("");
    if (isset($_GET["pessoa_id"])) {
        $id = $_GET["pessoa_id"];
        $pessoa = getUsuarios($id);
    }
    ?>

    <h2>Editçao Pessoa</h2>

    <fieldset>
    <form action="nome" method="post">
        <input type="text" name="id" id="id" hidden>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $pessoa
        ["nome"] ?>">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $pessoa
        ["email"] ?>">
        <input type="text" name="acao" value="editar" hidden>
        <input type="submit" value="Salvar Alterações">
    </form>

    </fieldset>
</body>
</html>