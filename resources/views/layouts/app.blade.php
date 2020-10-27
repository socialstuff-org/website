<html>
<head>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>SocialStuff - @yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header>
  <nav>
    <section class="container">
      <div class="nav-wrapper">
        <section id="brand-logo">
          <a href="/">
            <img src="https://cdn.code-lake.com/socialstuff/img/eye.svg" alt="CDN unavailable" id="logo">
          </a>
        </section>
        <a href="/" id="brand-name">Trale</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="/">Home</a></li>
          <li><a href="/features">Features</a></li>
          <li><a href="/team">Team</a></li>
          <li><a href="/faq">FAQ</a></li>
        </ul>
      </div>
    </section>
  </nav>
</header>

<section>
  @yield('content')
</section>

<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Trale organization</h5>
        <p class="grey-text text-lighten-4">High quality privacy solutions for individuals and teams.</p>
      </div>
      <div class="col l2 offset-l2 s6">
        <h6>About</h6>
        <ul>
          <li><a href="" class="grey-text text-lighten-3">Help</a></li>
          <li><a href="" class="grey-text text-lighten-3">Contact</a></li>
          <li><a href="" class="grey-text text-lighten-3">Suggestions</a></li>
        </ul>
      </div>
      <div class="col l2 s6">
        <h6>Developer</h6>
        <ul>
          <li><a href="" class="grey-text text-lighten-3">Source</a></li>
          <li><a href="" class="grey-text text-lighten-3">Contribute</a></li>
          <li><a href="" class="grey-text text-lighten-3">API Docs</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="center">
        <span>&copy;2020 Trale</span>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
