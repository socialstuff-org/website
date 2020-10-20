<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <title>SocialStuff - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">
                        <img src="https://cdn.code-lake.com/socialstuff/img/eye.svg" alt="CDN unavailable" id="logo">
                    </a>
                    <a href="#" class="brand-logo">SocialStuff</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer>
            this is the footer
        </footer>
    </body>
</html>
