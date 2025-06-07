<?php
namespace App\Models\MonstersModel;
use \PDO;

function findAll(PDO $connexion, int $limit){
$sql = "SELECT *, m.name AS monster_name, mt.name AS type_name FROM monsters m JOIN monster_types mt ON mt.id = m.type_id ORDER BY m.created_at ASC LIMIT :limit;";
$rs = $connexion->prepare($sql);
$rs->bindValue(":limit", $limit, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}