<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    <title>@yield('title', 'Online Store')</title>
  </head>
  <body>
    <!-- head -->
    <nav class="navbar navbar-exapand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a href="{{ route('home.index') }}" class="nav-link text-white navbar-band">Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('home.index') }}" class="nav-link active">Home</a>
                    <a href="{{ route('product.index') }}" class="nav-link active">Products</a>
                    <a href="{{ route('home.about') }}" class="nav-link active">About</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        <a href="{{ route('login') }}" class="nav-link active">Login</a>
                        <a href="{{ route('register') }}" class="nav-link active">Register</a>
                    @else
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" onclick="document.getElementById('logout').submit();" class="nav-link active">
                                Logout
                            </a>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <header class="masthread bg-primary text-white text-center py-4">
        <div class="container d-flex aligns-items-center flex-column">
            <h2>@yield('subtitle','A Laravel Online Store')</h2>
        </div>
    </header>
    <!-- head -->

    <div class="container content my-4">
        @yield('content')
    </div>

    <!-- footer -->
    <footer class="footer py-4 text-center text-white">
        <div class="container">
            <div class="footer-section">
                <div class="col-lg-4">
                    <h3>Contacts</h3>
                </div>
                <div class="col-lg-4">
                    <h3>Privacy</h3>
                </div>
                <div class="col-lg-4">
                    <h3>Others Products</h3>
                </div>
            </div>
            <div class="copyright">
                <code>
                    Copyright -
                    <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://github.com/noumecha">
                        Noumecha Spaker | tmcK0d€r
                    </a>
                </code> -
                <b>Byt3lab products</b>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
