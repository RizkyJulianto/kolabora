<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found - 404 | Kolabora</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="not-found w-full flex justify-center items-center py-20 flex-col">
    <img class="w-1/3 h-3/6" src="{{ asset('images/errors/404.png') }}" alt="404">
    <div class="my-6 text-center">
        <h1 class="text-2xl font-semibold">Oops, the page not found</h1>
        <p class="text-gray-500">Something went wrong and the page you're looking for cannot be found.</p>
    </div>
    <a class="inline-block font-semibold tracking-wider text-center rounded-md bg-gradient-to-br from-teal-400  to-sky-600 text-white py-1.5 px-3 hover:opacity-[90%]" href="{{ url('/') }}">Back to home</a>
</div>
</body>
</html>
