<?php
include_once("database.php");
/*Insere usuarios no banco de dados*/

function insere_usuario($nome, $email): void{
    $db = conectDb();

    $sql = "INSERT INTO usuario (nome, email) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue( 1,  $nome, PDO::PARAM_STR );
    $stmt->bindValue(2,  $email, PDO::PARAM_STR );
    try {
        $stmt->execute();
        echo "Usuário inserido com sucesso!";
    } catch(PDOException $e) {
        echo "Erro ao inserir usuário" . $e->getMessage();
}
}
$db = null;


 /*função retorna um array com todos os usuários em um array assosciativo*/
 function recupera_lista_usuarios() {
    $db = conectDb();
    $sql = "select * from usuarios";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $stmt->fetchALL(PDO::FETCH_ASSOC);
    var_dump($resultado);
 }

 recupera_lista_usuarios();
?>