<?php
session_start();
if(!isset($_SESSION['loggedIn'])){
  header('Location: /');
}
require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/navbar.php';
require APPROOT . '/views/inc/deposit.php';
require APPROOT . '/views/inc/footer.php';
