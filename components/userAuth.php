<?
include_once('./db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = htmlspecialchars($_POST['login']);
    $pass = $_POST['pass'];
    userAuth($login,$pass);
    header("Location:/");
}else if($_SERVER['REQUEST_METHOD'] == 'GET'){
    session_start();
    session_destroy();
    header("Location:/");
}
?>