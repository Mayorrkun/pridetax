<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pride Tax Store</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('icons/iconsmind/line-icons.min.css') }}">
</head>
<body>
<x-navbar> </x-navbar>
{{$slot}}

<x-footer></x-footer>
</body>
</html>
