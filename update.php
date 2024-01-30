<?php
    require_once("database.php");
    $id=$_POST['id'];
    $xnote = $_POST['notes'];

    $sql2=update("notes",$xnote,$id);
    var_dump($sql2);
    if ($sql2){
        header('location:listnotes.php');
    }
?>