<?php
session_start();
if (isset($_COOKIE['id']) && isset($_COOKIE['name']) && isset($_COOKIE['awatar']) && isset($_COOKIE['prava'])){
    $_SESSION['userid']=$_COOKIE['id'];
    $_SESSION['username']=$_COOKIE['name'];
    $_SESSION['userawatar']=$_COOKIE['awatar'];
    $_SESSION['userprava']=$_COOKIE['prava'];
}
define("SMARTY_LIB", "../libs/");
require_once (SMARTY_LIB."Smarty.class.php");
require_once ("param.php");
$smarty_main = new Smarty();
?>