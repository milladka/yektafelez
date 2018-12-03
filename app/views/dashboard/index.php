<?php
session_start();
if(!isset($_SESSION['loggedIn'])){
  header('Location: /');
}
require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/navbar.php';
require APPROOT . '/views/inc/dashboard.php';
require APPROOT . '/views/inc/footer.php';
