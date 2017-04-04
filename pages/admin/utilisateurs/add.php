<?php 
$user = 0;
App::getInstance()->getTable('Utilisateur')->create($_POST);

header("location: admin.php?p=utilisateurs");