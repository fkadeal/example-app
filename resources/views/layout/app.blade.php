<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel appOne</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

     
    </head>
    <body>
       <div class="container">
          <header>
              <nav class="navbar ">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" shref="{{ url('/') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" shref="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" shref="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <div class="mt-2">
                
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                         {{ $message }}
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                         {{ $message }}
                        </div>
                    @endif
                
               
            </div>
            @yield('content')
        </section>

        <footer>
            <nav class="navbar ">
              <ul class="nav">
                  <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
              </ul>
          </nav>
        </footer>
      </header>

        </div>
    </body>
</html>
