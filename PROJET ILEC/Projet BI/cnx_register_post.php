<?php
session_start();
require_once "functions_bdd.php";

if(isset($_POST['register']) && 
!empty($_POST['mail']) && 
!empty($_POST['password'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    register($mail,$password);
   
}else{
    header('Location: cnx_register.php');
}