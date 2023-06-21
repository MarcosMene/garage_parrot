<?php

require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/services.php";
require_once __DIR__ . "/../lib/cars.php";

$cars = getAllCars($pdo);
$services = getAllServices($pdo);

?>



<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Garage V. Parrot</title>

  <!-- BOOTSTRAP  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- FONT AWESOME  -->
  <script src="https://kit.fontawesome.com/1a0b88a9d7.js" crossorigin="anonymous"></script>

  <!-- CSS  -->
  <!-- <link rel="stylesheet" href="./assets/css/override-bootstrap.css"> -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <nav class="nav">
        <a class="logo" href="/">
          <img src="./assets/images/logo_car_title.png" alt="logo garage parrot">
        </a>
        <!-- HAMBURGER MENU  -->
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li>
            <a class="nav-link" aria-current="page" href="/">Accueil</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#services">Services</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#cars">Voitures</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#testimonial">Avis</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#contact">Contact</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="#schedules">Horaires</a>
          </li>


          <li>
            <a href="/connexion/connexion.php" class="btn-wire">Connecter</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>

  <main class="main">