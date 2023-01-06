<?
$page = $_GET["route"];
include_once('functions.php');
include_once('components/header.php');
include_once('components/aside.php');
if ($arrPages[$page]) {
    include_once("page/$page.php");
}elseif($page == 'pageNot'){
    include_once('page/404.php');
}else{
    include_once('page/main.php');
}
include_once('components/footer.php');
