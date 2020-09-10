<?php
session_start();
if(isset($_POST['logout']))
{
    echo 'logged out';
header('location:login.php');
session_unset();
}
?>