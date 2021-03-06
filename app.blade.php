<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{ env('APP_NAME') }}</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('dashboard') }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('users.index') }}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('counties.index') }}">Counties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('municipalities.index') }}">Municipalities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('places.index') }}">Places</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('passports.index') }}">Passports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('police_administrations.index') }}">Police Administration</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
    <!-- ovdje će doći svaki view aplikacije -->
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
