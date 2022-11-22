<?php
require_once ("header.php");

if (isset($_GET['id']) && !empty($_GET['id'])){
    $query="Select  model, data, count, image, categories, price, comment from items WHERE id=".$_GET['id'];
    $rez=mysqli_query($dbc, $query) or die ("error");

    $next=mysqli_fetch_array($rez);
    $smarty_update_it= new Smarty();
    $smarty_update_it->assign("id", $_GET['id']);
    $smarty_update_it->assign("model", $next['model']);
    if (empty($next['image'])){
        $smarty_update_it->assign("image", "nophpto.jpg");
    }else {
        $smarty_update_it->assign("image", $next['image']);
    }
    $smarty_update_it->assign("data", $next['data']);
    $smarty_update_it->assign("count", $next['count']);
    $smarty_update_it->assign("price", $next['price']);
    $smarty_update_it->assign("comment", $next['comment']);
    $smarty_update_it->assign("categories", $next['categories']);

        $query1="Select id, model from categories";
        $rez1=mysqli_query($dbc, $query1) or die ("error cat");
        $cat=array();
        while($next=mysqli_fetch_array($rez1)){
            array_push($cat, array("id"=>$next['id'], "model"=>$next['model']));
        }
     $smarty_update_it->assign("cat", $cat);
     $content=$smarty_update_it->fetch("update_item.tpl");

} else if (isset($_POST['send']) && !empty($_POST['id']) && !empty($_POST['model']) && !empty($_POST['data']) && !empty($_POST['count']) && !empty($_POST['id_cat']) && !empty($_POST['price']) && !empty($_POST['comment'])){
    if ($_FILES['photo']['error']==0){
        if (isset($_POST['oldphoto']) && $_POST['oldphoto']!="nophpto.jpg"){
            @unlink("/images/$photo");
        }
        $filename_tmp=$_FILES['photo']['tmp_name'];
        $filename=time().$_FILES['photo']['name'];
        move_uploaded_file($filename_tmp, "../images/$filename");
        $query4="UPDATE items SET model='".$_POST['model']."', data='".$_POST['data']."', count='".$_POST['count']."', image='$filename', categories='".$_POST['id_cat']."', price='".$_POST['price']."', comment='".$_POST['comment']."' WHERE id=".$_POST['id'];
    }else {
        $query4="UPDATE items SET model='".$_POST['model']."', data='".$_POST['data']."', count='".$_POST['count']."', categories='".$_POST['id_cat']."', price='".$_POST['price']."', comment='".$_POST['comment']."' WHERE id=".$_POST['id'];
    }
     mysqli_query($dbc, $query4) or die ("error5");
    $content="Успешно изменено<br>";
    $content.="<a href='index_items.php'> Изменить  еще </a><br>";
}else {
    $content= "Редактирование не возможно";
    $content.="<a href='index_items.php'>Попробуйте еще раз</a>";
}
mysqli_close($dbc);
$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");
?>