<?php
$server = "localhost";
$username = "root";
$pasword = "";
$dbname = "dblibrary";

$conn = new mysqli($server, $username, $pasword, $dbname);

if($conn->connect_error){
    die("koneksi gagal: ".$conn->connect_error);
}
?>


