<?php

session_start();
require_once '../config.php';
if (empty($_SESSION['pseudo'])) {
    header('location:../login');
}

$pseudo = $_SESSION['pseudo'];

$req = $bdd->prepare('SELECT role FROM users WHERE pseudo = ?');
$req->execute(array($pseudo));
$fetch = $req->fetch();

if ($fetch['role'] == 0) {
    header('location:../dashboard/home');
}
?>
