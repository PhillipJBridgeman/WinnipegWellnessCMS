<?php
    require ('connect.php');
    require ('authenticate.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="delete_page_handler.php" method="post">
            <input type="hidden" name="page_id" value="<!-- PHP to echo page ID -->">
            <input type="submit" value="Delete Page">
        </form>
    </main>
</body>
</html>