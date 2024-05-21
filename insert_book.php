<?php
require_once "conn.php";

$data['title'] = $_POST['title'];
echo $data['title']; 
$query ="SELECT MAX(ID) AS id FROM book";
$getdata = mysqli_query($conn,$query);
$iddata = [];
$numrows = mysqli_num_rows($getdata);

if ($numrows > 0) {
    while ($rows = mysqli_fetch_assoc($getdata)) {
         $iddata[] = $rows;
    }
}
$newid = $iddata[0]['id']+1;

$query = "INSERT INTO book VALUES({$newid}, '{$_POST['title']}', '{$_POST['author']}', {$_POST['year']})";
$getdata = mysqli_query($conn,$query);
header("location: index.php");
?>