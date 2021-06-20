<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Blog &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="css/pure/pure-min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="layouts/blog/styles.css">
</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Welcome</h1>
            <h4 class="brand-tagline">What do you want to read ?</h4>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="#">Mental</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="#">Health</a>
                    </li>
                </ul>
            </nav>

            <a href="index.html" class="button pure-button pure-button-primary" style="margin-top: 12px;text-decoration: none">Return to landing page</a>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <?php 
                require 'db/connection.php';

                $data = $conn->query("SELECT * FROM news WHERE is_published = 1 ORDER BY id DESC");
                while($list = mysqli_fetch_assoc($data)){
             ?>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Pinned Post</h1>

                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="Jaka Eka&#x27;s avatar" class="post-avatar" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg">

                        <h2 class="post-title"><?= $list['title']?></h2>

                        <p class="post-meta">
                            By <a href="#" class="post-author">Jaka Eka</a> under <a class="post-category post-category-design" href="#">Intro</a> <a class="post-category post-category-pure" href="#">features</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            <?= $list['content']?>
                        </p>
                    </div>
                </section>
            </div>
        <?php } ?>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link" style="color: #aaa;">About</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link" style="color: #aaa">Twitter</a></li>
                        <li class="pure-menu-item"><a href="#" class="pure-menu-link" style="color: #aaa">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
