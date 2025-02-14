@extends('template.layout')
@section('title_web', 'Rewards | KolaBora')
@section('content')
    <div class="w-full px-[5%] lg:px-[3%] py-9 overflow-hidden shadow-sm relative">
        <div class="blob-1 w-1/2 h-64 bg-primary blur-3xl rounded-full opacity-35 -z-10 absolute -top-20 right-0">
        </div>
        <div class="blob-2 w-1/2 h-64 bg-orange-500 blur-3xl rounded-full opacity-35 -z-10 absolute -bottom-20 left-0">
        </div>
        <h1 class="font-bold text-2xl mb-1">Peluang baru menantimu</h1>
        <p class="text-sm">Peluang baru menantimu! Jangan lewatkan kesempatan emas ini untuk meraih pekerjaan impian dan masa
            depan yang lebih cerah!
        </p>
    </div>
    <div class="rewards flex flex-col lg:flex-row px-[5%] lg:px-[3%] gap-6 pt-11 pb-20">
        <div class="left-col flex-[1_1_100%] lg:flex-[1_1_25%] w-full">
            <div class="my-rewards-col shadow border border-slate-200 rounded">
                <div class="px-3 text-sm">
                    <div class="border-b border-slate-200 py-5">
                        <div class="flex items-center justify-center flex-col">
                            <img src="{{ asset('images/logo/kolabora-transparent.png') }}"
                                class="w-20 h-2w-20 mb-3 rounde-full" alt="">
                            <h3 class="mb-3 font-semibold uppercase">{{ auth()->user()->name }}</h3>
                            <h4 class="bg-gradient-to-r from-sky_light to-primary py-1 px-2 rounded-full text-white"><i
                                    class="fas fa-coins"></i> 1267</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-col flex-[1_1_100%] lg:flex-[1_1_75%] w-full">
            <div class="content-rewards">
                <div
                    class="flex gap-3 md:gap-0 flex-col md:flex-row md:justify-between md:items-center mb-6 w-full shadow border border-slate-200 rounded p-4 ">
                    <div class="flex items-center gap-2">
                        <h1 class="text-xl font-bold">My Rewards</h1>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href=""
                            class="bg-gradient-to-r text-sm from-sky_light to-primary py-2 px-3 rounded text-white">Change
                            Point</a>
                    </div>
                </div>
                <main class="content">
                    <div class="mb-8 flex flex-col gap-5 text-sm">
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-2">
                                    <div class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full">
                                        <h5><i class="fa-solid fa-square-check"></i> Good Jobs</h5>
                                    </div>
                                    <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore, corporis.</p>
                                </div>
                                <p class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full"><i
                                        class="fas fa-plus"> 100</i></p>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-2">
                                    <div class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full">
                                        <h5><i class="fa-solid fa-square-check"></i> Good Jobs</h5>
                                    </div>
                                    <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore, corporis.</p>
                                </div>
                                <p class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full"><i
                                        class="fas fa-plus"> 100</i></p>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-2">
                                    <div class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full">
                                        <h5><i class="fa-solid fa-square-check"></i> Good Jobs</h5>
                                    </div>
                                    <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore, corporis.</p>
                                </div>
                                <p class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full"><i
                                        class="fas fa-plus"> 100</i></p>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-2">
                                    <div class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full">
                                        <h5><i class="fa-solid fa-square-check"></i> Good Jobs</h5>
                                    </div>
                                    <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore, corporis.</p>
                                </div>
                                <p class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full"><i
                                        class="fas fa-plus"> 100</i></p>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-2">
                                    <div class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full">
                                        <h5><i class="fa-solid fa-square-check"></i> Good Jobs</h5>
                                    </div>
                                    <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore, corporis.</p>
                                </div>
                                <p class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full"><i
                                        class="fas fa-plus"> 100</i></p>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-2">
                                    <div class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full">
                                        <h5><i class="fa-solid fa-square-check"></i> Good Jobs</h5>
                                    </div>
                                    <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore, corporis.</p>
                                </div>
                                <p class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full"><i
                                        class="fas fa-plus"> 100</i></p>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-2">
                                    <div class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full">
                                        <h5><i class="fa-solid fa-square-check"></i> Good Jobs</h5>
                                    </div>
                                    <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore, corporis.</p>
                                </div>
                                <p class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full"><i
                                        class="fas fa-plus"> 100</i></p>
                            </div>
                        </div>
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="flex justify-between w-full gap-3">
                                <div class="flex gap-2">
                                    <div class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full">
                                        <h5><i class="fa-solid fa-square-check"></i> Good Jobs</h5>
                                    </div>
                                    <p class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Dolore, corporis.</p>
                                </div>
                                <p class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full"><i
                                        class="fas fa-plus"> 100</i></p>
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
            </div>
        </div>
    </div>
@endsection
