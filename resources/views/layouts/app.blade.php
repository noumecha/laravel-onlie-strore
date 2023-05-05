<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>@yield('title', 'Online Store')</title>
  </head>
  <body>
    <!-- head -->
    <nav class="navbar navbar-exapand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a href="#" class="navbar-band">Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toogler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="#" class="nav-link active">About</a>
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

    <div class="container my-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
