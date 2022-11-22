<?php
session_start();
define("SMARTY_LIB", "libs/");
require_once (SMARTY_LIB."Smarty.class.php");
require_once ("admin/param.php");
$smarty_main =new Smarty();
?>