<?php

require "./classes/Utilisateur.php";
require "./classes/Admin.php";

// Utilisateur
$user = new Utilisateur("Deterre");
echo $user->generateCode();

// Deux petits br pour la mise en page
echo "<br><br>";

// Admin
$admin = new Admin("Doe");
echo $admin->generateCode();

$admin->display();