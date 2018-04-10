<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description', setting('seo_description', 'LaraBBS 愛好者社區'))">
    <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'LaraBBS,社區,論壇,開發者論壇'))">
    <title>@yield('title', config('app.name')) - {{ setting('site_name', 'Laravel 進階教學') }}</title>
    <!-- Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">@yield('styles')
  </head>
  <body>
    <div id="app" class="{{ route_class() }}-page">@include('layouts._header')
      <div class="container">
        @include('layouts._message')
        @yield('content')
      </div>@include('layouts._footer')
      @if(app()->isLocal())
      @include('sudosu::user-selector')
      @endif
    </div>
    <!-- Scripts-->
    <script src="{{ asset('js/app.js') }}"></script>@yield('scripts')
  </body>
</html>