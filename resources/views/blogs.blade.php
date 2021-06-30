<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title>Blog &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="{{secure_asset('css/pure/pure-min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{secure_asset('css/pure/grids-responsive-min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/layouts/blog/styles.css')}}">
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

            <a href="{{route('user.index')}}" class="button pure-button pure-button-primary" style="margin-top: 12px;text-decoration: none">Return to landing page</a>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Pinned Post</h1>

                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="Jaka Eka&#x27;s avatar" class="post-avatar" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg">

                        <h2 class="post-title">Introducing Psycholight</h2>

                        <p class="post-meta">
                            By <a href="#" class="post-author">Jaka Eka</a> under <a class="post-category post-category-design" href="#">Intro</a> <a class="post-category post-category-pure" href="#">features</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            In today there are much as people suffering from  <a href="#">slides from the presentation</a>. Although it looks pretty minimalist, we’ve been working on Pure for several months. After many iterations, we have released Psycholight that you can use in every web project.
                        </p>
                    </div>
                </section>
            </div>

            <div class="posts">
                <h1 class="content-subhead">Recent Posts</h1>
                @foreach($blogs as $blog)
                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="{{$blog->authors->name}}&#x27;s avatar" class="post-avatar" src="{{ $blog->authors->picture }}">

                        <h2 class="post-title">{{ $blog->title }}</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="#">{{ $blog->authors->name }}</a> under @foreach($blog->categories as $category) <a class="post-category post-category-js" href="#">{{$category->name}}</a> @endforeach
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            {{ $blog->content }}
                        </p>
                    </div>
                </section>
                @endforeach
                
            </div>

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