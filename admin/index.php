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
                <li class="pure-menu-item menu-item-divided pure-menu-selected"><a href="index.html" class="pure-menu-link">Dashboard</a></li>
                <li class="pure-menu-item"><a href="article.html" class="pure-menu-link">Article</a></li>
                <li class="pure-menu-item"><a href="category.html" class="pure-menu-link">Category</a></li>
                <li class="pure-menu-item"><a href="user.html" class="pure-menu-link">User</a></li>
                <li class="pure-menu-item"><a href="report.html" class="pure-menu-link">Report</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h2>Dashboard</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead"></h2>
            

            <div class="pure-g">
                <div class="pure-u-1-3" style="background-color: #f38181">
                	<h4 style="text-align: center;color: white">18</h4>
                	<h4 style="text-align: center;color: white">Articles</h4>
                </div>
                <div class="pure-u-1-3" style="background-color: #fce38a">
                	<h4 style="text-align: center;color: white">4</h4>
                	<h4 style="text-align: center;color: white">Users</h4>
                </div>
                <div class="pure-u-1-3" style="background-color: #95e1d3">
                	<h4 style="text-align: center;color: white">3</h4>
                	<h4 style="text-align: center;color: white">Categories</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>

</body>
</html>
