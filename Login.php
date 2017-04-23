<?php

session_start();
$error = "";  
if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['btn_submit']=="Sign IN")
{
// username and password sent from Form
$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);
 
if(!!filter_var($myusername, FILTER_VALIDATE_EMAIL) && $mypassword=="magic")
{
session_register("myusername");
$_SESSION['login_user']=$myusername;
include "config.php";
$sql = 'INSERT INTO `audit` (`User_Email`, `Pages`) VALUES ("'.$myusername.'", "Logged IN");';
$result = mysql_query($sql);
header("location: conversion.php");

}
else
{
$error="Your Login Name or Password is invalid";
}
}
if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['btn_submit']=="Sign UP"){
header("Location: https://secure.php.net/");
die();
}
?>
<style>
.ex1 {
    margin-top: 2cm;
}
</style>

<center><form class ="ex1" action="" method="post">
<h2> Currency Conversion Application Login </h2>
<label>Email :</label>
<input type="text" name="username"/><br /><br/>
<label>Password :</label>
<input type="password" name="password"/><br />
<h3><?php echo $error ?></h3>
<input type="submit" name="btn_submit" value="Sign IN" />
<input type="submit" name="btn_submit" value="Sign UP" />
</form>
</center>

