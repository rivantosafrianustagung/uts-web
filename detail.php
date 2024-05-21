<?php
    require_once "conn.php";

    $id =$_GET['id'];
    $query = "SELECT * FROM book WHERE ID = {$id}";
    $getdata = mysqli_query($conn, $query);
    $data = [];
    $numrows = mysqli_num_rows($getdata);

    if ($numrows > 0) {
        while ($row = mysqli_fetch_assoc($getdata)) {
            $data[] = $row;
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$data[0]['name'] ?> - Detail</title>
    </head>
    <body>
        <form action="update_rows.php" method="POST">
            Name : <?php echo "<input type='hidden' name='id' value='{$data[0]['id']}'><input type='text' name='title' value='{$data[0]['title']}'>"; ?><br />
            tahun cetak : <?php echo "<input type='number' name='year' value='{$data[0]['year']}'>"; ?><br />
            pengarang: <?php echo "<input type='text' name='author' value=' {$data[0]['author']}'>"; ?><br />
            <button type="submit" class="button primary-button mt-16">update</button>
        </form>
    </body>
    </html>

