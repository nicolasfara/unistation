<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name') )</title>
    <meta name="description" content="The HTML5 Herald">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   <meta name="author" content="SitePoint">
    @yield('meta')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
    @include('includes.nav')
    <!-- @include('includes.partials.messages')-->
    <main>
      @yield('content')
    </main>

    @yield('footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
