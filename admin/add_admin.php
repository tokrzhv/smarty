<?php
require_once ("header.php");
if (isset($_SESSION['userid']) && isset($_SESSION['username']) && isset($_SESSION['userawatar']) && isset($_SESSION['userprava']) && $_SESSION['userprava']==1){
    if (!isset($_POST['send'])){
        $add_admin= new Smarty();
        $content=$add_admin->fetch("add_admin.tpl");
    }else if (isset($_POST['send']) && !empty($_POST['namme']) && !empty($_POST['login']) && !empty($_POST['password']) && $_POST['password']==$_POST['password2'] && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['prava']))
    {
        $login=$_POST['login'];
        $query1="Select id from user WHERE id=".$login;
        $rez1=mysqli_query($dbc, $query1) or die ("error1");

        if (mysqli_num_rows($rez1)>0){  
            $content= "такой логин уже существует";
        }else {
            if ($_FILES['awatar']['error']==0){
                $filename_tmp=$_FILES['awatar']['tmp_name'];
                $filename=time().$_FILES['awatar']['name'];
                move_uploaded_file($filename_tmp, "../images/$filename");
                $query="Insert into user(namme, awatar, login, password, email, tel, prava) VALUE ('".$_POST['namme']."', '$filename', '".$_POST['login']."', sha1('".$_POST['password']."'), '".$_POST['email']."', '".$_POST['tel']."', '".$_POST['prava']."')";
            }else {
                $query="Insert into user(namme, login, password, email, tel, prava) VALUE ('".$_POST['namme']."', '".$_POST['login']."', sha1('".$_POST['password']."'), '".$_POST['email']."', '".$_POST['tel']."', '".$_POST['prava']."')";
            }
            $rez=mysqli_query($dbc, $query)or die ("error2");
            $content="успешно добавлено";
        }
    } else {
        $content= "недостаточно данных";
    }
    mysqli_close($dbc);
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else {
    echo ("page not found");
}
?>