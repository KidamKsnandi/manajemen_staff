<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Kelompok 2 - Manajemen Staff</title>
</head>
<body >
    @include('layouts.partials.navbar')
    <div class="container mx-auto h-screen">
        @yield('content')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('js')
</body>
</html>
