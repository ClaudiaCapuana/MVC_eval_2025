<?php
namespace App\Models\MonstersModel;
use \PDO;

function findAll(PDO $connexion, int $limit){
$sql = "SELECT *, m.name AS monster_name, mt.name AS type_name, m.id AS monster_id FROM monsters m JOIN monster_types mt ON mt.id = m.type_id ORDER BY m.created_at DESC LIMIT :limit;";
$rs = $connexion->prepare($sql);
$rs->bindValue(":limit", $limit, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id){
    $sql = "SELECT *, mt.name AS name_type, m.name AS monster_name  FROM monsters m JOIN monster_types mt ON mt.id = m.type_id WHERE m.id=:id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(":id", $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}