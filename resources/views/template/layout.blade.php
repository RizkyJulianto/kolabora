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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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
                <div class="flex items-center gap-4">
                    <div class="dropdown">
                        <img onclick="dropDownMenu()" class="dropbtn w-11 cursor-pointer rounded-full"
                            src="{{ asset('images/logo-kolabora.png') }}" alt="">
                        <div id="myDropdown" class="dropdown-content bg-white shadow text-sm absolute z-10 ">
                            <div
                                class="flex items-center gap-2 p-2 text-slate-500 hover:bg-gradient-to-r from-sky_light to-primary hover:text-white">
                                <i class="fa-solid fa-user"></i>
                                <a class="block decoration-transparent" href="{{ route('logout') }}">Profile</a>
                            </div>
                            <div
                                class="flex items-center text-slate-500 gap-2 p-2 hover:bg-gradient-to-r from-sky_light to-primary hover:text-white">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <a class="block decoration-transparent" href="{{ route('logout') }}">Logout</a>
                            </div>
                        </div>
                    </div>
                    @if ($name = auth()->user()->name)
                        <p>{{ $name }}</p>
                    @endif
                </div>
            </div>
        </nav>
    </header>
    <section class="app-content">
        @yield('content')
    </section>
    <footer class="shadow">
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 py-9 w-full px-[5%] lg:px-[3%] border-t border-slate-200 relative">
            <div class="logo-footer">
                <div class="logo flex items-center">
                    <img class="w-12" src="{{ asset('images/logo/kolabora-transparent.png') }}" alt="">
                    <h1 class="text-2xl font-bold text-orange-300">Kola<span class="text-primary">Bora</span></h1>
                </div>
                <p class="text-[15px] mt-2 mb-4">Kolaborasi Tanpa Batas Peluang Tak Terbatas!</p>
                <div class="border border-slate-200 shadow flex rounded p-1">
                    <input class="w-[70%] py-2 px-3 outline-none placeholder:text-[15px]" type="email" name=""
                        id="" placeholder="Masukan email anda">
                    <button
                        class="w-[30%] py-2 px-3 bg-gradient-to-r from-orange-300 to-orange_normal text-white tracking-wide text-[15px] rounded hover:opacity-85"
                        type="submit">Kirim</button>
                </div>
            </div>
            <div class="permalinks">
                <div>
                    <h5 class="font-semibold pb-1">Permalinks</h5>
                    <div class="w-full h-[1.5px] bg-slate-400 relative">
                        <div class="absolute -top-1 right-0 w-10 h-2 bg-gradient-to-r from-sky_light to-primary"></div>
                    </div>
                </div>
                <div class="flex flex-col gap-1 text-[15px] mt-2">
                    <a href=""
                        class="pemalinks-footer inline-block text-transparent bg-clip-text font-semibold bg-gradient-to-r from-sky_light to-primary hover:translate-x-1 transition-all">Find
                        Job</a>
                    <a href="" class="pemalinks-footer hover:translate-x-1 transition-all">Message</a>
                    <a href="" class="pemalinks-footer hover:translate-x-1 transition-all">Hiring</a>
                    <a href="" class="pemalinks-footer hover:translate-x-1 transition-all">Community</a>
                    <a href="" class="pemalinks-footer hover:translate-x-1 transition-all">FAQ</a>
                </div>
            </div>
            <div class="social_media">
                <div>
                    <h5 class="font-semibold pb-1">Social Media</h5>
                    <div class="w-full h-[1.5px] bg-slate-400 relative">
                        <div class="absolute -top-1 right-0 w-10 h-2 bg-gradient-to-r from-sky_light to-primary"></div>
                    </div>
                </div>
                <div class="flex flex-col gap-1 text-[15px] mt-2">
                    <div class="flex items-center gap-2">
                        <div
                            class="flex items-center w-[34px] h-[34px] rounded justify-center bg-gradient-to-r from-sky_light to-primary text-white text-lg">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <a href="{{ url('www.youtube.com') }}" class="pemalinks-footer">kolabora</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="flex items-center w-[34px] h-[34px] rounded justify-center bg-gradient-to-r from-sky_light to-primary text-white text-lg">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <a href="{{ url('mailto:juliantorizky01@gmail.com') }}"
                            class="pemalinks-footer">kolabora@gmail.com</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="flex items-center w-[34px] h-[34px] rounded justify-center bg-gradient-to-r from-sky_light to-primary text-white text-[16px]">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <a href="{{ url('www.youtube.com') }}" class="pemalinks-footer">(0281) 5161 1234</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="flex items-center w-[34px] h-[34px] rounded justify-center bg-gradient-to-r from-sky_light to-primary text-white text-lg">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <a href="{{ url('www.youtube.com') }}" class="pemalinks-footer">kolabora</a>
                    </div>
                </div>
            </div>
            <div class="permalinks">
                <div>
                    <h5 class="font-semibold pb-1">Alamat</h5>
                    <div class="w-full h-[1.5px] bg-slate-400 relative">
                        <div class="absolute -top-1 right-0 w-10 h-2 bg-gradient-to-r from-sky_light to-primary"></div>
                    </div>
                </div>
                <div class="flex flex-col gap-1 mt-2">
                    <p class="text-[15px]">Jl. Jenderal Soedirman No. 41, Purbalingga Tenggara, Purbalingga, Jawa
                        Tengah 53373</p>
                </div>
            </div>
        </div>
        <div class="copyrigt text-sm text-center bg-slate-50">
            <p class="py-4">&copy; <span id="copyright">
                    <script>
                        document.getElementById('copyright').innerHTML = new Date().getFullYear();
                    </script>
                </span> <span class="text-orange_light font-semibold">Kola</span><span
                    class="text-primary font-semibold">Bora</span>. All
                Rights Reserved</p>
        </div>
    </footer>

    <script src="{{ asset('library/sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('library/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

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
