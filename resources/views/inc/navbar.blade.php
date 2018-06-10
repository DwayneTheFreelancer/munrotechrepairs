<nav class="main-navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Munro Tech Repairs</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="{{ url('/repairs') }}">Services</a></li>
          <li><a href="{{ url('/reviews') }}"></a></li>
          <li><a href="{{ url('/about-us') }}">About Us</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li>
            <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Company
                <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li><a href="{{ url('/story') }}">Our Story</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/faq') }}">FAQ</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>