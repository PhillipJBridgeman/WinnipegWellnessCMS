<?php
    require ('connect.php');
    require ('authenticate.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winnipeg Wellness Hub</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Winnipeg Wellness Hub</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about.html">About Us</a></li>
                    <li><a href="/contact.html">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="featured-content">
            <div class="container">
                <h2>Fitness Articles</h2>
                <div class="menu-article">
                    <nav>
                        <ul>
                            <li><a href="edit.php">Edit</a></li>
                            <li><a href="delete.php">Delete</a></li>
                            <li><a href="create_page.php">New Article</a></li>
                        </ul>
                    </nav>
                </div>
                <article>
                    <h3>Article Title Here</h3>
                    <p>Article summary or introduction here. This could be an excerpt from the start of the article...</p>
                    <a href="#">Read More</a>
                </article>
            </div>
        </section>
        
        <section class="other-content">
            <div class="container">
                <h2>More From Us</h2>
                <div class="content-grid">

                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 Winnipeg Wellness Hub. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
        selector: 'textarea'
        });
    </script>
</body>
</html>
