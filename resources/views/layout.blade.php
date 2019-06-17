<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory System</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carbon-components.min.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/carbon-components.min.js') }}"></script>
</body>
</html>