<?php
namespace App\Controllers\MonstersController;
use \App\Models\MonstersModel;
use \PDO;
function indexAction(PDO $connexion ){
include '../app/models/monstersmodel.php';
$monsters = \App\Models\MonstersModel\findAll($connexion, 9);
global $content, $title;

$title = "Derniers Monstres ajoutés";
ob_start();
include '../app/views/monsters/index.php';
$content = ob_get_clean();
}