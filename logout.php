<?php
 session_start();
 require 'dbcon.php';
 
 unset($_SESSION['id']);
 header("Location:home.php");
?>