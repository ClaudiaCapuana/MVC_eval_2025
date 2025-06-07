<?php
use \App\Controllers\MonstersController;

include '../app/controllers/monstersController.php';
switch ($_GET['monsters']):
    case 'show':
        App\Controllers\MonstersController\showAction($connexion, $_GET['id']);
        break;
    
    default:
       App\Controllers\MonstersController\indexAction($connexion);
        break;
    endswitch;