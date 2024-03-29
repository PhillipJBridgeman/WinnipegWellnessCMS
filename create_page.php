<?php
    require ('connect.php');
    require ('authenticate.php');

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

    $stmt = $pdo->prepare("INSERT INTO pages (title, content, category_id) VALUES (?, ?, ?)");
    $stmt->execute([$title, $content, $category_id]);
    // Redirect to a confirmation page
    header('Location: page_created_successfully.php');
    exit;
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
    <form action="create_page_handler.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="content">Content:</label>
    <textarea id="content" name="content" required></textarea>

    <label for="category">Category:</label>
    <select id="category" name="category_id">
        <!-- PHP code to dynamically populate categories -->
    </select>

    <input type="submit" value="Create Page">
</form>
    </main>
</body>
</html>