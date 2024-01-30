<?php
require_once("database.php");
$id = $_GET['id'];
$sql = Delete("notes", $id);
if ($sql) {
    header("location:listnotes.php");
}
?>