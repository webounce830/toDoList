<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Todos</title>
</head>
<body>
    <div class="text-center container">
        <h1 class="py-4">What next you need To Do</h1>
        <x-alert />
        <form method="post" action="/todos/create" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border" />
            <input type="submit" value="Create" class="p-2 border rounded-lg" />
        </form>
    </div>
</body>
</html>
