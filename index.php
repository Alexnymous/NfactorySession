<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09/01/2018
 * Time: 17:07
 */session_start();

 var_dump(session_id());

 $_SESSION ['Nom'] = "Dupont";
 $_SESSION ['Prenom'] = "Ducon";
 $_SESSION ['Age'] = 69;

 ?>

<a href="index.php">index</a>
