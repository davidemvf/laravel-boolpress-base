<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('elem.head')
    </head>
    <body>
      <div class="container">

        <header>
          <h1>Boolpress</h1>
        </header>

        @yield('content')

        <footer>
          <h6>Powered by Davide</h6>
        </footer>

      </div>
    </body>
</html>
