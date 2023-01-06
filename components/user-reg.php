<?
include_once('./db.php');
$pass = password_hash($_POST["pass"], CRYPT_BLOWFISH);
$name = strip_tags($_POST["name"]);
$login = htmlspecialchars($_POST["login"]);

$extName = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
$path = $_FILES['photo']['tmp_name'];
$pathToImg = $extName ? "./img/avatars/$login.$extName" :  "./img/avatars/default.png";
if (userReg($login, $name, $pass, $pathToImg) != '00000') {
    header('location:/?route=registration&dublicate=true');
}else{
    move_uploaded_file($path, ".$pathToImg");
    header('Location:/?route=login');
}
?>