<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>@yield('title_web')</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/kolabora.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/font/mona-sans.css') }}">
    <link rel="stylesheet" href="{{ asset('library/sweetalert/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout_users.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="font-primary">
    <!-- Loading Bar -->
    <div id="loading-bar"
        class="fixed top-0 left-0 w-0 h-1 z-20  bg-gradient-to-r from-sky_light to-primary transition-all duration-300">
    </div>
    <header>
        <nav class="navbar flex items-center justify-between px-[5%] py-4 lg:px-[3%] shadow-sm relative">
            <div class="logo flex items-center">
                <img class="w-12" src="{{ asset('images/logo/kolabora-transparent.png') }}" alt="">
                <h1 class="text-2xl font-bold text-orange-300">Kola<span class="text-primary">Bora</span></h1>
            </div>
            <div class="absolute py-10 lg:py-0 top-full left-[-100%] w-full min-h-full bg-slate-100/70 gap-5 backdrop-blur-sm lg:backdrop-blur-none flex flex-col lg:flex-row items-center justify-center duration-300 z-50 overflow-hidden lg:static lg:min-h-fit lg:bg-transparent lg:w-auto"
                id="nav_menu">
                <a href="{{ url('main-users') }}" class="nav-link">Find
                    Jobs</a>
                <a href="{{ url('company') }}" class="nav-link">Company</a>
                <a href="{{ url('partner') }}" class="nav-link">Partner</a>
                <a href="{{ url('project') }}" class="nav-link">Project</a>
                <a href="{{ url('notification') }}" class="nav-link">Notification</a>
                <a href="{{ url('rewards') }}" class="nav-link">Rewards</a>
            </div>
            <div class="nav-profie flex items-center gap-7">
                <div class="flex items-center gap-4">
                    <div class="dropdown">
                        @if ($profile_img = auth()->user()->profile_img)
                            <img onclick="dropDownMenu()" class="dropbtn w-9 h-9 cursor-pointer rounded-full"
                                src="{{ asset('uploads/profile/' . $profile_img) }}" alt="{{ $profile_img }}">
                        @endif
                        <div id="myDropdown"
                            class="dropdown-content bg-white shadow text-sm absolute z-10 -left-[25px] -bottom-[125px] md:-left-[10px] md:-bottom-[90px]">
                            <div
                                class="flex items-center md:hidden text-slate-500 gap-2 p-2 hover:bg-gradient-to-r from-sky_light to-primary hover:text-white">
                                <P class="block decoration-transparent">
                                    @if ($username = auth()->user()->username)
                                        <p>{{ $username }}</p>
                                    @endif
                                </P>
                            </div>
                            <a href="{{ route('profile.show', auth()->user()->id) }}"
                                class="flex items-center gap-2 p-2 text-slate-500 hover:bg-gradient-to-r from-sky_light to-primary hover:text-white">
                                <i class="fa-solid fa-user"></i>
                                <p class="block decoration-transparent">Profile</p>
                            </a>
                            @auth()
                                <a href="{{ route('logout') }}"
                                    class="flex items-center text-slate-500 gap-2 p-2 hover:bg-gradient-to-r from-sky_light to-primary hover:text-white">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <p class="block decoration-transparent">Logout</p>
                                </a>
                            @endauth
                        </div>
                    </div>
                    @if ($username = auth()->user()->username)
                        <p class="lg:inline-block hidden">{{ $username }}</p>
                    @endif
                </div>
                <div class="text-lg inline-block cursor-pointer z-50 lg:hidden">
                    <i class="fa-solid fa-bars-staggered" id="hamburger"></i>
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
                    <a href="{{ url('main-users') }}"
                        class="pemalinks-footer nav-link hover:opacity-60 hover:translate-x-1 transition-all">Find
                        Jobs</a>
                    <a href="{{ url('company') }}"
                        class="pemalinks-footer nav-link hover:opacity-60 hover:translate-x-1 transition-all">Company</a>
                    <a href="{{ url('partner') }}"
                        class="pemalinks-footer nav-link hover:opacity-60 hover:translate-x-1 transition-all">Partner</a>
                    <a href="{{ url('project') }}"
                        class="pemalinks-footer nav-link hover:opacity-60 hover:translate-x-1 transition-all">Project</a>
                    <a href="{{ url('notification') }}"
                        class="pemalinks-footer nav-link hover:opacity-60 hover:translate-x-1 transition-all">Notification</a>
                    <a href="{{ url('rewards') }}"
                        class="pemalinks-footer nav-link hover:opacity-60 hover:translate-x-1 transition-all">Rewards</a>
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
                        <a href="{{ url('www.youtube.com') }}"
                            class="social-footer hover:text-orange_normal">kolabora</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="flex items-center w-[34px] h-[34px] rounded justify-center bg-gradient-to-r from-sky_light to-primary text-white text-lg">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <a href="{{ url('mailto:juliantorizky01@gmail.com') }}"
                            class="social-footer hover:text-orange_normal">kolabora@gmail.com</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="flex items-center w-[34px] h-[34px] rounded justify-center bg-gradient-to-r from-sky_light to-primary text-white text-[16px]">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <a href="{{ url('www.youtube.com') }}" class="social-footer hover:text-orange_normal">(0281)
                            5161 1234</a>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="flex items-center w-[34px] h-[34px] rounded justify-center bg-gradient-to-r from-sky_light to-primary text-white text-lg">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <a href="{{ url('www.youtube.com') }}"
                            class="social-footer hover:text-orange_normal">kolabora</a>
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
    <script src="{{ asset('js/layout_users.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        const hamburgerBtn = document.getElementById("hamburger");
        const navbarNav = document.getElementById("nav_menu");
        const navLinks = document.querySelectorAll(".nav-link");

        hamburgerBtn.addEventListener("click", () => {
            navbarNav.classList.toggle("left-[0]");
            hamburgerBtn.classList.toggle("fa-x");
        });

        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                navbarNav.classList.toggle("left-[0]");
                hamburgerBtn.classList.toggle("fa-x");
            });
        });
    </script>

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

    @if (session('success_second'))
        <script>
            Swal.fire({
                title: "{{ session('success_second') }}",
                icon: "success",
                draggable: true,
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
