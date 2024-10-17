<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">
  <div class="container mx-auto p-4">
    @yield('content')
  </div>
</body>
</html>
