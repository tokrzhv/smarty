<?php
require_once ("header.php");
if (isset($_SESSION['userid']) && isset($_SESSION['username']) && isset($_SESSION['userawatar']) && isset($_SESSION['userprava'])){
    if (!isset($_POST['send'])){
        $smarty_items=new Smarty();
        $query="Select id, model from categories";
        $rez=mysqli_query($dbc, $query) or die ("error");
        $cat=array();
        while($next=mysqli_fetch_array($rez)){
            array_push($cat, array("id"=>$next['id'],"model"=>$next['model']));
        }
        $smarty_items->assign("cat", $cat);
        $content=$smarty_items->fetch("add_item.tpl");
    }else if (isset($_POST['send']) && !empty($_POST['model']) && !empty($_POST['data']) && !empty($_POST['count']) && !empty($_POST['id_cat']) && !empty($_POST['price']) && !empty($_POST['comment'])){
        if($_FILES['photo']['error']==0){
            $filename_tmp=$_FILES['photo']['tmp_name'];
            $filename=time().$_FILES['photo']['name'];
            move_uploaded_file($filename_tmp,"../images/$filename");
            $query2="Insert into items(model, data, count, image, categories, price, comment) VALUE ('".$_POST['model']."', '".$_POST['data']."', '".$_POST['count']."', '$filename', '".$_POST['id_cat']."', '".$_POST['price']."', '".$_POST['comment']."')";
        }else {
            $query2="Insert into items(model, data, count, categories, price, comment) VALUE ('".$_POST['model']."', '".$_POST['data']."', '".$_POST['count']."', '".$_POST['id_cat']."', '".$_POST['price']."', '".$_POST['comment']."')";
        }
        echo $query2;
        mysqli_query($dbc, $query2) or die ("error");
        $content="Успешно авто добавлено";
        $content.="<a href='add_items.php'> Добавить еще </a><br>";
    }else {
        $content="Недостаточно данных";
    }
    mysqli_close($dbc);
    $smarty_main->assign("content", $content);
    $smarty_main->display("main.tpl");
}else {
    echo "page not found";
}

?>