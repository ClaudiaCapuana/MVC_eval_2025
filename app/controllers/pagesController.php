<?php 
namespace App\Controllers\PagesController;
use \App\Models\PagesModel;
use \PDO;

function homeAction(PDO $connexion){
    include_once '../app/models/pagesModel.php';
    $randMonster = \App\Models\PagesModel\randomMonster($connexion);
    $lastMonsters = \App\Models\PagesModel\latestMonsters($connexion, 3);

    global $title, $content;
    $title = "HomePage";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();

}