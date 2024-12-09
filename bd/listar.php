<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("db.php");
        include_once("pesoa_da.php");
        $listar_pessoa = getUsuarios();
        //array[0]{id, nome:"Lezio", email: "lezio@gmail.com}
        //array[1]{id, nome:"Lezio", email: "lezio@gmail.com}
        //array[2]{id, nome:"Lezio", email: "lezio@gmail.com}
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>Email</th>
        </tr>

        <?php
            for ($i = 0; $i < count($listar_pessoa); $i++) {
                ?>
                <tr>
                    <td><?php echo $listar_pessoa[$i]["id"] ?></td>
                    <td><?php echo $listar_pessoa[$i]["nome"] ?></td>
                    <td><?php echo $listar_pessoa[$i]["email"] ?></td>
                </tr>
                <?php
            }


        ?>


    </table>
</body>
</html>