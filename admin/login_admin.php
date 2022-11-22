<?php
session_start();
require_once ("header.php");
if (!isset($_POST['send'])){
    $login_admin= new Smarty();
    $content=$login_admin->fetch("login_admin.tpl");
}else if (isset($_POST['send'])  && !empty($_POST['login']) && !empty($_POST['pass']))
{
    $query="Select id, namme, awatar, prava from user WHERE login='".$_POST['login']."' and password=sha1('".$_POST['pass']."')";
    $rez=mysqli_query($dbc, $query) or die ("error");
    if(mysqli_num_rows($rez)==1){
        $next=mysqli_fetch_array($rez);
        $id=$next['id'];
        $namme=$next['namme'];
        $awatar=$next['awatar'];
        if (empty($awatar)){
            $awatar="nophpto.jpg";
        }
        $prava=$next['prava'];
            setcookie("id", $id, time()+60*60*24*30*3);
            setcookie("name", $namme, time()+60*60*24*30*3);
            setcookie("awatar", $awatar, time()+60*60*24*30*3);
            setcookie("prava", $prava, time()+60*60*24*30*3);
        $_SESSION['userid']=$id;
        $_SESSION['username']=$namme;
        $_SESSION['userawatar']=$awatar;
        $_SESSION['userprava']=$prava;
        if (empty($awatar)){
            $awatar="nophpto.jpg";
        }
        $content="<a href='index.php'>Главная</a>";
        $content.="<h2>$namme, Вы вошли!!</h2>";
        if ($prava==1){
        $content.="<h3>Admin</h3>";
        }else {
        $content.="<h3>Operator</h3>";
        }
        $content.="<p><img src='../images/$awatar', width='200px'></p>";
    }else {
    $content="неверны логин или пароль ";
    }
}else {
$content="недостаточно данных";
}
mysqli_close($dbc);
 $smarty_main->assign("content", $content);
 $smarty_main->display("main.tpl");