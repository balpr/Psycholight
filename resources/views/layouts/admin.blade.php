<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Admin Psycholight | @yield('title')</title>
    <link rel="stylesheet" href="{{secure_asset('css/pure/pure-min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/layouts/side-menu/styles.css')}}">
    <style>
        body {
            margin: 0;
            font-family: "Overpass", sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6c757d;
            text-align: left;
            background-color: #f8f9fa;
        }
    </style>
    @stack('css')
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
                <a class="pure-menu-heading" href="">Admin</a>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item {{Request::is('admin/profile') ? 'pure-menu-selected' : ''}}"><a href="{{route('admin.profile')}}" class="pure-menu-link">Profile</a></li>
                    <li class="pure-menu-item {{Request::is('admin') ? 'pure-menu-selected' : ''}}"><a href="{{route('admin.index')}}" class="pure-menu-link">Dashboard</a></li>
                    <li class="pure-menu-item {{Request::is('admin/authors') ? 'pure-menu-selected' : ''}}"><a href="{{route('authors.index')}}" class="pure-menu-link">Authors</a></li>
                    <li class="pure-menu-item {{Request::is('admin/blogs') ? 'pure-menu-selected' : ''}}"><a href="{{route('blogs.index')}}" class="pure-menu-link">Blogs</a></li>
                    <li class="pure-menu-item {{Request::is('admin/categories') ? 'pure-menu-selected' : ''}}"><a href="{{route('categories.index')}}" class="pure-menu-link">Categories</a></li>
                </ul>
            </div>
        </div>

        <div id="main">
            <div class="header">
                <h2>@yield('title')</h2>
            </div>

            @yield('content')
        </div>
    </div>

    <script src="{{secure_asset('js/ui.js')}}"></script>
    @stack('script')

</body>

</html>