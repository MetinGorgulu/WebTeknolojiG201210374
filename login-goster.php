<?php
error_reporting(0);
include("ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
echo "Kullanıcı Adı veya Şifre Yanlış.<br>";
echo "Lütfen Tekrar Deneyiniz.";
header("Refresh: 3; url=login.php");
}
ob_end_flush();
?>