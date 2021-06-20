<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Psycholight</title>
    <link rel="stylesheet" href="css/pure/pure-min.css">
    <link rel="stylesheet" href="layouts/side-menu/styles.css">
</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#company">Admin</a>

            <ul class="pure-menu-list">
            	<li class="pure-menu-item"><a href="profile.html" class="pure-menu-link">Profile</a></li>
                <li class="pure-menu-item"><a href="index.html" class="pure-menu-link">Dashboard</a></li>
                <li class="pure-menu-item menu-item-divided pure-menu-selected"><a href="article.html" class="pure-menu-link">Article</a></li>
                <li class="pure-menu-item"><a href="category.html" class="pure-menu-link">Category</a></li>
                <li class="pure-menu-item"><a href="user.html" class="pure-menu-link">User</a></li>
                <li class="pure-menu-item"><a href="report.html" class="pure-menu-link">Report</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h2>Edit Article</h2>
        </div>

        <div class="content">

            <div class="pure-g">
                <div class="pure-u-1" style="padding-top: 10px">
                    <form method="POST" class="pure-form">
                        <?php
                            require '../db/connection.php';
                            $id = $_GET['id'];
                            $query = $conn->query("SELECT * FROM news WHERE id = '$id'");
                            $list = $query->fetch_object();
                         ?>
                        <input type="text" name="title" placeholder="Title" style="width: 100%;" value="<?= $list->title?>">
                        <textarea name="content" rows="8" style="width: 100%;margin-bottom: 10px" placeholder="Content"><?= $list->content?></textarea>
                        <select name="is_published">
                            <option value="0">Not Published</option>
                            <option value="1">Published</option>
                        </select>
                        <input class="pure-button" type="submit" name="submit">
                        <a href="article.php" class="pure-button">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>
<?php
    require 'api/news.php';
    if(isset($_POST['submit'])){
        update();
?>
<script type="text/javascript">
    alert("Article has been updated");
    window.location.href="article.php";
</script>
<?php } ?>

</body>
</html>
