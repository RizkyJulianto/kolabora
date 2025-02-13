@extends('template.layout')
@section('title_web', 'Company | KolaBora')
@section('content')
    <div class="w-full px-[5%] lg:px-[3%] py-9 overflow-hidden shadow-sm relative">
        <div class="blob-1 w-1/2 h-64 bg-primary blur-3xl rounded-full opacity-35 -z-10 absolute -bottom-20 left-0">
        </div>
        <div class="blob-2 w-1/2 h-64 bg-orange-500 blur-3xl rounded-full opacity-35 -z-10 absolute -top-20 right-0">
        </div>
        <h1 class="font-bold text-2xl mb-1">Mari bergabung bersama perusahaan kami</h1>
        <p class="text-sm">Ajak seseorang untuk menjadi bagian dari perusahaan dengan semangat kebersamaan, profesionalisme,
            dan pertumbuhan bersama menuju kesuksesan!
        </p>
    </div>
    <main class="company px-[5%] lg:px-[3%] gap-6 pt-11 pb-20">
        <div class="search shadow border border-slate-200 p-[18px] flex flex-col lg:flex-row gap-5 w-full rounded">
            <div class="form-group flex gap-3 flex-1">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold">All Company</h1>
                    <h4 class="bg-gradient-to-r from-sky_light to-primary py-1 px-2 rounded-full text-white">121</h4>
                </div>
            </div>
            <div class="form-group flex gap-3 flex-1">
                <input type="text"
                    class="inline-block tracking-wide bg-gray-100 border-[1.8px] border-gray-400 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                    name="" id="" value="" placeholder="Searching company" autocomplete="off">
                <select name=""
                    class="inline-block tracking-wide  text-[13px] bg-gray-100 border-[1.8px] border-gray-400 w-full py-2  px-3 focus:border-primary outline-none rounded-md"
                    id="">
                    <option value="">Choice Location</option>
                </select>
                <div class="form-search">
                    <button
                        class="inline-block text-sm font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-2 px-3 hover:opacity-[90%]"
                        type="submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
        <main class="column-content w-full mt-11">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
                <div
                    class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                    <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                        <div class="left">
                            <div class="flex gap-2">
                                <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                    alt="">
                                <div class="">
                                    <a href="" class="font-bold mb-2 md:mb-1">Product Designer</a>
                                    <p class="text-sm text-slate-400">
                                        Denpasar, Bali
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down mt-3">
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fas fa-city"></i>
                            <p class="text-justify text-slate-600"> Lorem ipsum dolor sit
                                amet </p>
                        </div>
                        <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                            <i class="fa-solid fa-briefcase"></i>
                            <p class="text-justify text-slate-600">5 Lowongan</p>
                        </div>
                        <div class="text-sm text-justify mt-2 text-slate-500">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam eveniet, laudantium porro
                                dicta nisi excepturi impedit mollitia vitae pariatur iusto?</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- pagination --}}
            <div class="flex items-center justify-between border-t border-gray-200 bg-white pt-8 pb-3">
                <div class="flex flex-1 justify-between sm:hidden">
                    <a href="#"
                        class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                    <a href="#"
                        class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                </div>
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">5</span>
                            of
                            <span class="font-medium">136</span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-xs" aria-label="Pagination">
                            <a href="#"
                                class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Previous</span>
                                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                    data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" aria-current="page"
                                class="relative z-10 inline-flex items-center bg-gradient-to-r from-sky_light to-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary_light">1</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                            <a href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                            <span
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-300 ring-inset focus:outline-offset-0">...</span>
                            <a href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                            <a href="#"
                                class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Next</span>
                                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                    data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </main>
@endsection
