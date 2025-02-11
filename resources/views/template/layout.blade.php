<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kolabora</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/kolabora.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/font/mona-sans.css') }}">
    <link rel="stylesheet" href="{{ asset('library/sweetalert/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/swiper/swiper-bundle.min.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="font-primary">
    <header>
        <nav class="navbar flex items-center justify-between px-[5%] py-4 lg:px-[3%] shadow-sm">
            <div class="logo flex items-center">
                <img class="w-12" src="{{ asset('images/logo/kolabora-transparent.png') }}" alt="">
                <h1 class="text-2xl font-bold text-orange-300">Kola<span class="text-primary">Bora</span></h1>
            </div>
            <div class="nav-list flex items-center gap-5">
                <a href=""
                    class="nav-link inline-block text-transparent bg-clip-text font-semibold bg-gradient-to-r from-sky_light to-primary">Find
                    Job</a>
                <a href="" class="nav-link">Message</a>
                <a href="" class="nav-link">Hiring</a>
                <a href="" class="nav-link">Community</a>
                <a href="" class="nav-link">FAQ</a>
            </div>
            <div class="nav-profie flex items-center gap-2">
                <img class="w-11 rounded-full" src="{{ asset('images/logo-kolabora.png') }}" alt="">
                @if ($name = auth()->user()->name)
                    <p>{{ $name }}</p>
                @endif
                <a href="{{ route('logout') }}" class="bg-red-500 text-white p-2"><i
                        class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
        </nav>
    </header>
    <section class="app-content">
        @yield('content')
    </section>
    <footer class="w-full px-[5%] lg:px-[3%] py-9 shadow-sm relative">
        <div class="logo flex items-center">
            <img class="w-12" src="{{ asset('images/logo/kolabora-transparent.png') }}" alt="">
            <h1 class="text-2xl font-bold text-orange-300">Kola<span class="text-primary">Bora</span></h1>
        </div>
        <div class=""></div>
        <div class=""></div>
        <div class=""></div>
    </footer>

    <script src="{{ asset('library/sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('library/swiper/swiper-bundle.min.js') }}"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "{{ session('success') }}",
                icon: "success",
                draggable: true,
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                title: "{{ session('error') }}",
                icon: "error",
                draggable: true,
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                html: '<ul>' +
                    @foreach ($errors->all() as $error)
                        '<li>{{ $error }}</li>' +
                    @endforeach
                '</ul>',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
</body>

</html>
