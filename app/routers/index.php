<?php
if (isset($_GET['monsters'])):
   include '../app/routers/monsters.php';

   elseif (isset($_GET['form'])):
    include '../app/controllers/formController.php';
    formAction($connexion);
   

else:
   include '../app/controllers/pagesController.php';
   \App\Controllers\PagesController\homeAction($connexion);
   
endif;