<?php
require_once "conn.php";

$query = "DELETE FROM book WHERE id={$_GET['id']}";
$getdata = mysqli_query($conn,$query);
header("location: index.php");
?>