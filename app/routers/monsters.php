<?php
use \App\Controllers\MonstersController;

include '../app/controllers/monstersController.php';
switch ($_GET['monsters']):
    case 'show':
        App\Controllers\MonstersController\showAction($connexion);
        break;
    
    default:
       App\Controllers\MonstersController\indexAction($connexion);
        break;
    endswitch;