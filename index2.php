<?php
session_start();

$message = "";

$message .= "Nom : ";
$message .= $_SESSION ["Nom"];
$message .= </br>;
$message .= "Age :";
$message .= $_SESSION ["Age"];
