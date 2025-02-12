<header class="relative w-screen h-screen mb-32" id="beranda">
<svg class="absolute inset-0 z-0 h-full lg:h-auto w-full" viewBox="0 0 902 451" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><rect class="bg" id="bg" x="0" y="0" width="902" height="451" fill="#ffffff"></rect><defs><filter id="f1" x="-200%" y="-200%" width="500%" height="500%"><feGaussianBlur stdDeviation="100"></feGaussianBlur></filter></defs><circle cx="902" cy="451" r="1008.4666578524052" fill="#FCA311" filter="url(#f1)"></circle><circle cx="902" cy="451" r="806.7733262819241" fill="#FFFFFF" filter="url(#f1)"></circle><circle cx="902" cy="451" r="605.0799947114431" fill="#FFFFFF" filter="url(#f1)"></circle><circle cx="902" cy="451" r="403.38666314096207" fill="#FFFFFF" filter="url(#f1)"></circle><circle cx="902" cy="451" r="201.69333157048104" fill="#2563EB" filter="url(#f1)"></circle></svg>
<div class="navigation w-full py-5 fixed top-0 left-0 right-0 z-50 px-3 md:px-6 lg:px-0">
    <nav class="container mx-auto flex justify-between px-6 py-4 bg-gray-300 rounded-full bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-20 border border-gray-300 shadow-3xl">
        <div class="header-logo flex items-center gap-x-1">
            <img src="{{asset('images/logo-kolabora.png')}}" alt="" class="md:w-12 md:h-12 w-10 h-10">
            <div class="header-logo-text">
                <a href="" class="text-xl md:text-2xl font-bold text-orange-300 cursor-pointer">Kola<span class="text-blue-600">Bora</span></a>
            </div>
        </div>
        

            <ul class="nav-container-links gap-x-3 items-start lg:items-center flex flex-col lg:flex-row absolute lg:relative md:mt-[13%] mt-[20%] lg:mt-0 gap-y-2 bg-white lg:bg-transparent rounded-md border lg:border-none
             border-gray-300 shadow-md lg:shadow-none w-full lg:w-auto  py-4 px-4 lg:py-0 lg:px-0 left-0 opacity-0 lg:opacity-100   transition-all duration-700" id="navigation">
               <li class="w-full lg:w-fit"><a href="#beranda" class="nav-links hover:text-gray-700 w-full lg:w-fit inline-block py-3 lg:py-0 duration-300  text-lg lg:text-base border-b-2 border-gray-200 lg:border-none">Beranda</a></li>
               <li class="w-full lg:w-fit"><a href="#tentang" class="nav-links hover:text-gray-700 w-full lg:w-fit inline-block py-3 lg:py-0 duration-300  text-lg lg:text-base border-b-2 border-gray-200 lg:border-none">Tentang</a></li>
               <li class="w-full lg:w-fit"><a href="#keunggulan" class="nav-links hover:text-gray-700 w-full lg:w-fit inline-block py-3 lg:py-0 duration-300  text-lg lg:text-base border-b-2 border-gray-200 lg:border-none">Keunggulan</a></li>
               <li class="w-full lg:w-fit"><a href="#carakerja" class="nav-links hover:text-gray-700 w-full lg:w-fit inline-block py-3 lg:py-0 duration-300  text-lg lg:text-base border-b-2 border-gray-200 lg:border-none">Cara Kerja</a></li>
               <li class="w-full lg:w-fit"><a href="#testimoni" class="nav-links hover:text-gray-700 w-full lg:w-fit inline-block py-3 lg:py-0 duration-300  text-lg lg:text-base border-b-2 border-gray-200 lg:border-none">Testimoni</a></li>
               <li class="w-full lg:w-fit"><a href="#faq" class="nav-links hover:text-gray-700 w-full lg:w-fit inline-block py-3 lg:py-0 duration-300  text-lg lg:text-base border-b-2 border-gray-200 lg:border-none">FAQ</a></li>
               <div class="btn-login w-full lg:hidden">
                    <a href="{{url('auth/login')}}" class=" bg-gradient-to-r from-orange-400 to-orange_normal py-2 px-4 rounded-md text-white font-semibold w-full text-center lg:w-fit inline-block">Sign In</a>
                </div>
                <div class="btn-signup w-full lg:hidden">
                    <a href="{{url('auth/registrasi')}}" class="font-semibold rounded-md  bg-gradient-to-r from-sky_light to-primary py-2 px-4 text-white hover:bg-blue-800 duration-300  w-full text-center inline-block">Sign Up</a>
                </div>
            </ul>
            <div class="btn-right items-center gap-x-3 flex">
                <div class="btn-login">
                    <a href="{{url('auth/login')}}" class="hidden md:flex font-semibold">Sign In</a>
                </div>
                <div class="btn-signup">
                    <a href="{{url('auth/registrasi')}}" class="font-semibold rounded-full md:inline-block bg-gradient-to-r from-sky_light to-primary py-2 px-4 text-white hover:bg-blue-800 duration-300 hidden">Sign Up</a>
                </div>
                <div class="button-hamburger relative flex items-center lg:hidden">
                    <button id="hamburger" name="hamburger" type="button" class="block">
                        <span class="hamburger-bar bg-black block w-[30px] h-[2px] my-2 rounded-md origin-top-left transiton-all duration-500"></span>
                        <span class="hamburger-bar bg-black block w-[30px] h-[2px] my-2 rounded-md transition-all duration-500"></span>
                        <span class="hamburger-bar bg-black block w-[30px] h-[2px] my-2 rounded-md origin-bottom-left transiton-all duration-500"></span>
                    </button>
                </div>
            </div>
        </nav>
    </div>
    <div class="illustration-img absolute z-10 lg:top-[25%] md:top-[27%]  md:right-[5%] top-[21%] right-[5%]   rotate-[10deg] bg-white rounded-xl shadow-xl">
            <img src="{{ asset ('/images/work.png')}}" alt="" class="lg:w-40 lg:h-32 md:w-24 md:h-24 w-20 h-20 object-contain " >
    </div>
    <div class="illustration-img absolute z-10 lg:top-[60%] top-[70%] md:top-[68%] lg:right-[5%] md:right-[8%] right-[5%] bg-white rounded-xl shadow-xl rotate-[10deg]">
            <img src="{{ asset ('/images/goals.png')}}" alt="" class="lg:w-36 lg:h-32 md:w-24 md:h-24 w-20 h-20 object-contain " >
    </div>
    <div class="illustration-img absolute z-10 md:top-[60%] top-[70%] left-[4%] bg-white rounded-xl shadow-xl -rotate-[10deg]">
            <img src="{{ asset ('/images/Portfolio.png')}}" alt="" class="lg:w-40 lg:h-32 md:w-24 md:h-24 w-20 h-20 object-contain " >
    </div>
    <div class="illustration-img absolute z-10 md:top-[27%] top-[22%] left-[4%] bg-white rounded-xl shadow-xl -rotate-[10deg]">
            <img src="{{ asset ('/images/chart.png')}}" alt="" class="lg:w-40 lg:h-32 md:w-24 md:h-24 w-20 h-20 object-contain " >
    </div>
    <div class="relative textbox-container flex w-full h-full justify-center z-10 py-16 lg:top-[20%] md:top-[24%] top-[21%]">
        <div class="textbox-content">
            <div class="textbox-label w-full flex justify-center py-2">
                <span class="rounded-full py-3 px-10 text-sm font-semibold bg-gray-100 shadow-md">Peluang Lokal</span>
            </div>
            <div class="text-title">
                <h1 class="font-bold text-[28px] md:text-[42px] lg:text-6xl text-center leading-none">Kolaborasi Tanpa Batas <br> Peluang Tak Terbatas!</h1>
            </div>
            <div class="textbox-subtitle">
                <h2 class="text-center  text-[15px] md:text-base lg:text-lg py-3 font-light">Temukan pekerjaan berbasis tim, dapatkan reward <br class="lg:hidden"> dari kontribusi, dan dukung ekonomi lokal.</h2>
            </div>
            <div class="textbox-cta py-5 w-full flex justify-center">
                <a href="" class="text-sm py-3 inline-block bg-gradient-to-r from-sky_light to-primary px-3 text-white font-semibold rounded-md hover:bg-blue-800 duration-300">Gabung Sekarang</a>
            </div>
        </div>
    </div>

    <!-- Layer Gradient White -->
     <div class="bg-gradient-to-t from-white to-transparent w-full h-[20%] absolute lg:-bottom-[85px] -bottom-[0]"></div>
    
</header>



