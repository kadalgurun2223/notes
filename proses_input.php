<?php
require_once("database.php");

$xnot = $_POST['notes'];
$simpan=inputdata("INSERT INTO notes VALUES (null,'$xnot',now())");
if ($simpan) {
    header("location:listnotes.php");                                                                                        
}
?>