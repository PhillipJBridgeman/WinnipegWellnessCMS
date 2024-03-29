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
<form action="edit_page_handler.php" method="post">
    <input type="hidden" name="page_id" value="<!-- PHP to echo page ID -->">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<!-- PHP to echo title -->" required>

    <label for="content">Content:</label>
    <textarea id="content" name="content" required><!-- PHP to echo content --></textarea>

    <label for="category">Category:</label>
    <select id="category" name="category_id">
        <!-- PHP code to dynamically populate categories -->
    </select>

    <input type="submit" value="Update Page">
</form>
</body>
</html>