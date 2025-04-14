<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="bg-gray-100 text-gray-900 font-sans">
    @include('partials.header')
  @yield('content')
  @include('partials.footer')
    @php(wp_footer())
</body>

</html>
