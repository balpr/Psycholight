<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Psycholight</title>
    <link rel="stylesheet" href="css/pure/pure-min.css">
    <link rel="stylesheet" href="css/datatables.min.css">
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
            <h2>Article</h2>
        </div>

        <div class="content">
            <a href="article-insert.php" class="pure-button" style="background: rgb(28, 184, 65);margin-bottom: 12px;margin-top: 12px">Insert</a>

            <div class="pure-g">
                <div class="pure-u-1">
                    <table class="" style="" id="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                require '../db/connection.php';
                                $no = 1;

                                $data = $conn->query("SELECT * FROM news ORDER BY id DESC");
                                while($list = mysqli_fetch_assoc($data)){
                             ?>
                            <tr class="pure-table-odd">
                                <td><?= $no++ ?></td>
                                <td><?= $list['title']?></td>
                                <td><?= $list['content']?></td>
                                <?php 
                                    if($list['is_published'] == 1){
                                        ?>
                                        <td>Published</td><?php
                                    }else{
                                        ?><td>Not Published</td><?php
                                    }
                                 ?>
                                <td>
                                    <a class="pure-button" href="article-edit.php?id=<?= $list['id']?>">Edit</a>
                                    <form method="POST">
                                        <input type="text" name="id" value="<?= $list['id']?>" hidden>
                                        <button class="pure-button" type="submit" name="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    require 'api/news.php';
    if(isset($_POST['submit'])){
        delete();
?>
<script type="text/javascript">
    alert("Article has been deleted");
    window.location.href="article.php";
</script>
<?php } ?>

<script src="js/ui.js"></script>
<script src="js/jquery.js"></script>
<script src="js/datatables.min.js"></script>
<script type="text/javascript">
    $('#table').DataTable();
</script>


</body>
</html>
