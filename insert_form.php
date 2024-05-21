<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new book</title>
    <link rel="stylesheet" href="display.css" />
</head>
<body>
    <form action="insert_book.php" method="post">
        title: <input type="text" name="title" placeholder="book's title" /><br />
        pengarang: <input type="text" name="author" placeholder="book's year cetak" /><br />
        tahun terbit : <input type="text" name="year" placeholder="tahun terbit" /><br />
        <button type="submit" class="button primary-button mt-16">create</button>
    </form>
</body>
</html>