<?php

function formAction(PDO $connexion){
global $content;
ob_start();
include '../app/views/pages/form.php';
$content = ob_get_clean();
}