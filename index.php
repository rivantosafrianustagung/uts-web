<?php
require_once "conn.php";

$getdata = mysqli_query($conn, "SELECT * FROM book");
$data = [];
$numrows = mysqli_num_rows($getdata);

if ($numrows > 0) {
    while ($rows = mysqli_fetch_assoc($getdata)) {
         $data[] = $rows;
    }
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cek data</title>
    <link rel="stylesheet" href="display.css" />
</head>
<body>
    <a href="insert_form.php" class="button primary-button mb-16">create</a>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>judul buku</td>
                <td>pengarang</td>
                <td>tahun cetak</td>
            <tr>
        <thead>
        <tbody>
            <?php
                 for ($i=0; $i < $numrows; $i++) {
                    echo "
                        <tr>
                            <td><a href='detail.php?id={$data[$i]['id']}'>{$data[$i]['id']}</a></td>
                            <td>{$data[$i]['title']}</td>
                            <td>{$data[$i]['author']}</td>
                            <td>{$data[$i]['year']}</td>
                            <td><a href='delete_rows.php?id={$data[$i]['id']}'class='button danger-button'>hapus</a></td>
                        </tr>
                        ";
                 }
            ?>
        </tbody>
    </table>
</body>
</html>