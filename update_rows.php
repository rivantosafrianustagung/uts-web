<?php
require_once "conn.php";

$query = "UPDATE book SET title ='{$_POST['title']}', author= '{$_POST['author']}', year ={$_POST['year']} WHERE id={$_POST['id']}";
$getdata = mysqli_query($conn,$query);
header("location: index.php");
?>