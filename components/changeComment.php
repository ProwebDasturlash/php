<?
include_once('./db.php');
$id = $_POST['id'];
$text = $_POST['descr'];
date_default_timezone_set('Asia/Tashkent');
$time = date('H:i');
changeComment($id, $text, $time);
header('location:/?route=guest');
?>