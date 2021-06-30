<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psycholight</title>
    <link rel="stylesheet" href="{{secure_asset('css/pure/pure-min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/pure/grids-responsive-min.css')}}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{secure_asset('css/layouts/marketing/styles.css')}}">
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="" style="font-family: Rubik">Psycholight</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="{{URL::to('blog')}}" class="pure-menu-link">Blog</a></li>
            <li class="pure-menu-item"><a href="#support" class="pure-menu-link">Support</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <div class="pure-g">
            <div class="pure-u-12-24" style="margin-left: -60px">
                <h1 class="splash-head">Start Today</h1>
                <p class="splash-subhead">
                    Get Better Mental Health.
                </p>
                <p>
                    <a href="{{URL::to('blog')}}" class="pure-button" style="background: #333333">Get Started</a>
                </p>
            </div>

            <div class="pure-u-12-24" style="margin-top: -120px">
                <img src="{{asset('images/hero-img.png')}}">
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper">
    

    <div class="pt l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img width="400" alt="File Icons" class="pure-img-responsive" src="{{asset('images/content-img-1.png')}}">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="">Better Interface.</h2>

            <p>
                Calming your eyes with warming color of interface
            </p>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img width="300" alt="File Icons" class="pure-img-responsive" src="{{asset('images/content-img-2.png')}}">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Better Content.</h2>

            <p>
                Many tips with different problems.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Want to know more ?</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>
                    Its Free.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Responsive Layouts
                </h3>
                <p>
                    Rotate your screen as much as you want.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Readable
                </h3>
                <p>
                    Easy to read.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Plays Nice
                </h3>
                <p>
                    Enjoy the features.
                </p>
            </div>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Ready to get started ?</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="name">Your Name</label>
                        <input id="name" type="text" placeholder="Enter your nickname">


                        <label for="email">Your Email</label>
                        <input id="email" type="email" placeholder="Enter your email address">

                        <button type="submit" class="pure-button">Submit</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5" id="support">
                <h4>Contact Us</h4>
                <p>
                    psycholight@company.co.id
                </p>

                <h4>More Information</h4>
                <p>
                    Feel free to contact.
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        Made with love by the Psycholight Team.
    </div>

</div>

</body>
</html>
