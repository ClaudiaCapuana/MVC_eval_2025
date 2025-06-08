<?php

namespace App\Models\PagesModel;
use \PDO;

function randomMonster(PDO $connexion){
$sql ="SELECT *, m.id AS monster_id, mt.name AS name_type, m.name AS monster_name FROM monsters m JOIN monster_types mt ON mt.id = m.type_id ORDER BY RAND() LIMIT 1;";
$rs = $connexion->query($sql);
return $rs->fetch(PDO::FETCH_ASSOC);
}

function latestMonsters(PDO $connexion, int $limit){
$sql = "SELECT *, m.id AS monster_id, mt.name AS name_type, m.name AS monster_name FROM monsters m JOIN monster_types mt ON mt.id = m.type_id ORDER BY m.id DESC LIMIT :limit;";
$rs = $connexion->prepare($sql);
$rs->bindValue(':limit', $limit, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}



