<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>que miras sapo?</p>

    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>

</body>
</html>