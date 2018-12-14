<?php
include('config.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"SELECT firstname FROM L2P_USER WHERE firstname = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['firstname'];

if(!isset($_SESSION['login_user'], $login_session)){
    header('Location: login.php');
}
