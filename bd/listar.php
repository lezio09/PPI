<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
    <style>
        
    </style>
</head>
<body>
    
    <?php
    include_once("db.php");
    include_once("pessoa_da.php");

    $listaPessoa = getUsuarios();
    
    ?>
    <table>
        <tr>
            <td><a href="editar.php?pessoa_id=<?php echo $registro["id"]?>">
                <?php echo $registro["id"] ?>
            </td>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        foreach ($listaPessoa as $registro) {
            ?>
        for($i=0; $i <count($listaPessoa); $i++)
            ?>
            <tr>
                <td><?php echo $listaPessoa[$i]["id"] ?></td>
                <td><?php echo $listaPessoa[$i]["nome"] ?></td>
                <td><?php echo $listaPessoa[$i]["email"] ?></td>
            </tr>
            <?php
            }
            ?>
    </table>

</body>
</html>