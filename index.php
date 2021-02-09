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
$admin2 = new Admin("Jane");

echo Admin::getInstancesCount();



// echo $admin->generateCode();

/**
 * $admin->display();
echo $admin->getNom();
 * */