<?php

session_set_cookie_params([
  'lifetime'=>3600,
  'path'=> '/',
  'domain'=>_DOMAIN_,
  'httponly'=>true
]);

//start session
session_start();

function adminOnly() {
  if($_SESSION['user']['role'] === 'employee'){
    header("location: /admin/liste-veicules.php");
  }
}