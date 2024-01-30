<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','pplg1_notes');
$dbconnect=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
or die("Failed to connect to MySQL: " . mysqli_error ($dbconnect));

function kuery($kueri)
{
global $dbconnect;
$result=mysqli_query($dbconnect,$kueri);
$rows=[];
while($row = mysqli_fetch_assoc($result))
{
    $rows[] = $row;
}
return $rows;
}

function inputdata($indputdata)
{
    global $dbconnect;
    $sql=mysqli_query($dbconnect, $indputdata);
    return $sql;
}

function Editdata($tablename,$id){
    global $dbconnect;
    $hasil=mysqli_query($dbconnect,"SELECT * FROM $tablename WHERE id='$id'");
    return $hasil;
}

function update($table, $data, $id)
{
    global $dbconnect;
    $sql = "UPDATE $table SET notes = '$data' WHERE id = $id";
    $hasil= mysqli_query($dbconnect, $sql);
    return $hasil;
}
function Delete($tablename, $id)
{
    global $dbconnect;
    $hasil=mysqli_query($dbconnect,"delete from $tablename where id='$id'");
    return $hasil;
}
?> 