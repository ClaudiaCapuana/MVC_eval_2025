<?php
namespace App\Controllers\MonstersController;
use \App\Models\MonstersModel;
use \PDO;
function indexAction(PDO $connexion ){
include '../app/models/monstersModel.php';
$monsters = \App\Models\MonstersModel\findAll($connexion, 9);
global $content, $title;

$title = "Derniers Monstres ajoutés";
ob_start();
include '../app/views/monsters/index.php';
$content = ob_get_clean();
}

function showAction(PDO $connexion){
    include '../app/models/monstersModel.php';
    $monster = \App\Models\MonstersModel\findOneById($connexion, $_GET['id']);
    global $content, $title;

    $title = "Détails d’un monstre";
    ob_start();
    include '../app/views/monsters/show.php';
    $content = ob_get_clean();
}