<?php

include_once("admin/config/config.php");


function getAllData($table){
    global $db;

    $query = "SELECT * FROM $table";
    $q = $db -> prepare($query);
    $q -> execute();

    $result = $q -> fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function getById($table, $idRow, $id){
    global $db;

    $query = "SELECT * FROM $table WHERE $idRow = ?";
    $q = $db->prepare($query);
    $q->execute([$id]);

    $result = $q->fetch(PDO::FETCH_ASSOC);
    return $result;
}

?>
