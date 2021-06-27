<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">

        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2" role="button" data-bs-toggle="button">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-warning me-2" role="button" data-bs-toggle="button">Sign-up</a>
                        @endif
                    @endauth
                </div>
            @endif
          
        </div>
      </div>
    </div>
 </header>
 <div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">   
      <div class="col">
        <div class="card shadow-sm"> 
          <svg class="bd-placeholder-img card-img-top" width="100%" height="258" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <image xlink:href="https://assets-global.website-files.com/5b01091468c3c73c3ca51cc9/5b3ab0134576d7ea5be0664f_what-to-know-before-buying-a-second-hand-photocopier-hero-image.jpg" x="0" y="0" rx="40" ry="40" width="100%" height="100%">
            <title>Placeholder</title>
          </svg>

          <div class="card-body">
            <h1 class="card-title"><b>FOTOCOPY</b></h1>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm"> 
          <svg class="bd-placeholder-img card-img-top" width="100%" height="258" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <image xlink:href="https://image.cermati.com/q_70/rjcuajbxdl6vmh7pofpj" x="0" y="-75" rx="40" ry="40" width="100%" height="170%">
            <title>Placeholder</title>
          </svg>

          <div class="card-body">
            <h1 class="card-title"><b>PRINTING</b></h1>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm"> 
          <svg class="bd-placeholder-img card-img-top" width="100%" height="258" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <image xlink:href="https://assets-global.website-files.com/5b01091468c3c73c3ca51cc9/5b3ab0134576d7ea5be0664f_what-to-know-before-buying-a-second-hand-photocopier-hero-image.jpg" x="0" y="0" rx="40" ry="40" width="100%" height="100%">
            <title>Placeholder</title>
          </svg>

          <div class="card-body">
            <h1 class="card-title"><b>FOTOCOPY</b></h1>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-bot" width="500%" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="true">
            <title>Placeholder</title></svg>

          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>