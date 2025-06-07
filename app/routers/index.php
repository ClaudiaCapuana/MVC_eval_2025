<?php
if (isset($_GET['monsters'])):
   include '../app/routers/monsters.php';

   elseif (isset($_GET['form'])):
    include '../app/controllers/formController.php';
    formAction($connexion);
   

else:
   $content ="";
   
endif;