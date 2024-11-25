<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    O usario informa nome sobrenome
    retornamos concatenado;
    <form action="" method="get">
        <label for="nome">Nome</label>
        <input id="nome"type="text" name="nome">

        <label for="sobrenome">Sobrenome</label>
        <input id="sobrenome"type="text" name="sobrenome">

        <input type="sumit" value="concatena">
    </form>
    <p>
    <?php 
    if (isset($_GET["nome"] )){
        echo $_GET["nome"].$_GET["sobrenome"];
    }
    ?>
    </p>
</body>
</html>