<?
include_once('./db.php');
session_start();
$text = htmlspecialchars($_POST['descr']);
$login = $_SESSION['login'];
$name = $_SESSION['name'];
$photo = $_SESSION['photo'];
date_default_timezone_set('Asia/Tashkent');
$time = date('H:i');
addComment($login, $name, $text, $photo, $time);
header('location:/?route=guest');
?>