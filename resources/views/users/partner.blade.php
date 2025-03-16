@extends('template.layout')
@section('title_web', 'Partner | KolaBora')
@section('content')
    <div class="w-full px-[5%] lg:px-[3%] py-9 overflow-hidden shadow-sm relative">
        <div class="blob-1 w-1/2 h-64 bg-primary blur-3xl rounded-full opacity-35 -z-10 absolute -top-20 right-0">
        </div>
        <div class="blob-2 w-1/2 h-64 bg-orange-500 blur-3xl rounded-full opacity-35 -z-10 absolute -bottom-20 left-0">
        </div>
        <h1 class="font-bold text-2xl mb-1">Carilah partners terbaikmu</h1>
        <p class="text-sm">Pasangan terbaik untuk karier impianmu! Temukan pekerjaan yang cocok dan wujudkan masa depan
            gemilang bersama!
        </p>
    </div>
    <div class="partner-row flex flex-col px-[5%] lg:px-[3%] gap-6 pt-11 pb-20">
        <div class="partner flex flex-col lg:flex-row gap-6">
            <div class="left-col flex-[1_1_100%] lg:flex-[1_1_35%] w-full flex flex-col gap-6">
                <div class="filter-col shadow border border-slate-200 rounded">
                    <div class="flex justify-between items-center border-b border-slate-200 py-2 px-3">
                        <h1 class="font-semibold">My Partner</h1>
                    </div>
                    <div class="px-3 text-sm">
                        <div class="border-b border-slate-200 py-3">
                            <div class="filter flex items-center gap-2">
                                <input class="border shadow text-sm border-slate-200 rounded outline-none w-full py-2 px-3"
                                    type="search" placeholder="Searching my partner">
                                <div
                                    class="bg-gradient-to-r text-sm from-sky_light to-primary py-2 px-3 rounded text-white">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <main class="flex flex-col gap-2 pt-5">
                                <div
                                    class="border border-slate-200 gap-2 flex p-2 shadow-sm rounded hover:shadow-primary_light">
                                    <img class="w-10 h-10" src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                    <div class="block">
                                        <h4 class="text-sm font-semibold">Baru ada</h4>
                                        <div
                                            class="bg-blue-100 w-auto inline-block text-primary px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-user"></i> Darren</h5>
                                        </div>
                                        <div
                                            class="bg-orange-100 w-auto inline-block text-orange_dark px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-location-dot"></i> Jakarta</h5>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="border border-slate-200 gap-2 flex p-2 shadow-sm rounded hover:shadow-primary_light">
                                    <img class="w-10 h-10" src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                    <div class="block">
                                        <h4 class="text-sm font-semibold">Baru ada</h4>
                                        <div
                                            class="bg-blue-100 w-auto inline-block text-primary px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-user"></i> Darren</h5>
                                        </div>
                                        <div
                                            class="bg-orange-100 w-auto inline-block text-orange_dark px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-location-dot"></i> Jakarta</h5>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="border border-slate-200 gap-2 flex p-2 shadow-sm rounded hover:shadow-primary_light">
                                    <img class="w-10 h-10" src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                    <div class="block">
                                        <h4 class="text-sm font-semibold">Baru ada</h4>
                                        <div
                                            class="bg-blue-100 w-auto inline-block text-primary px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-user"></i> Darren</h5>
                                        </div>
                                        <div
                                            class="bg-orange-100 w-auto inline-block text-orange_dark px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-location-dot"></i> Jakarta</h5>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="border border-slate-200 gap-2 flex p-2 shadow-sm rounded hover:shadow-primary_light">
                                    <img class="w-10 h-10" src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                    <div class="block">
                                        <h4 class="text-sm font-semibold">Baru ada</h4>
                                        <div
                                            class="bg-blue-100 w-auto inline-block text-primary px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-user"></i> Darren</h5>
                                        </div>
                                        <div
                                            class="bg-orange-100 w-auto inline-block text-orange_dark px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-location-dot"></i> Jakarta</h5>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="border border-slate-200 gap-2 flex p-2 shadow-sm rounded hover:shadow-primary_light">
                                    <img class="w-10 h-10" src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                    <div class="block">
                                        <h4 class="text-sm font-semibold">Baru ada</h4>
                                        <div
                                            class="bg-blue-100 w-auto inline-block text-primary px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-user"></i> Darren</h5>
                                        </div>
                                        <div
                                            class="bg-orange-100 w-auto inline-block text-orange_dark px-1.5 py-[0.2px] rounded-full text-[10px]">

                                            <h5><i class="fas fa-location-dot"></i> Jakarta</h5>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>

            </div>
            <div class="right-col flex-[1_1_100%] lg:flex-[1_1_65%] w-full">
                <div class="create-team-col shadow border border-slate-200 rounded">
                    <div class="flex justify-between items-center border-b border-slate-200 py-2 px-3">
                        <h1 class="font-semibold">Created Team</h1>
                    </div>
                    <div class="p-3 text-sm">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label-form block mb-1 text-gray-500 text-sm">Name Team</label>
                                <input type="text"
                                    class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                    name="result_project" id="result_project">
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                                <div class="form-group">
                                    <label class="label-form block mb-1 text-gray-500 text-sm">Upload Logo</label>
                                    <input type="file"
                                        class="inline-block text-xs tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-[0.45rem] px-3 focus:border-primary outline-none rounded-md"
                                        name="result_project" id="result_project">
                                </div>
                                <div class="form-group">
                                    <label class="label-form block mb-1 text-gray-500 text-sm">Location Team</label>
                                    <input type="text"
                                        class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                        name="result_project" id="result_project">
                                </div>
                                <div class="form-group">
                                    <label class="label-form block mb-1 text-gray-500 text-sm">Total Member</label>
                                    <input type="number"
                                        class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                        name="result_project" id="result_project">
                                </div>
                                <div class="form-group">
                                    <label class="label-form block mb-1 text-gray-500 text-sm">Scope Team</label>
                                    <input type="text"
                                        class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                        name="result_project" id="result_project">
                                </div>
                            </div>
                            <div class="form-group my-3">
                                <label class="label-form block mb-1 text-gray-500 text-sm">Description Team</label>
                                <textarea name="description_result"
                                    class="tracking-wide h-32 w-full inline-block bg-gray-50 border-[1.8px] border-slate-300 py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                    id="description_result" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button id="saveSweet"
                                    class="flex-1 text-sm inline-block font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-1.5 px-3 hover:opacity-[90%]"
                                    type="submit">Submit Result</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-partner">
            <div
                class="flex gap-3 md:gap-0 flex-col md:flex-row md:justify-between md:items-center mb-6 w-full shadow border border-slate-200 rounded p-4 ">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold">New Connect the Partners</h1>
                    <h4 class="bg-gradient-to-r from-sky_light to-primary py-1 px-2 rounded-full text-white">
                        {{ $count }}</h4>
                </div>
                <form action="{{ route('partnerSearch') }}" method="get" class="flex items-center gap-2">
                    <input class="border shadow text-sm border-slate-200 rounded outline-none w-full py-2 px-3"
                        type="search" name="search" id="search" placeholder="Searching Partner"
                        autocomplete="off">
                    <button type="submit"
                        class="bg-gradient-to-r text-sm from-sky_light to-primary py-2 px-3 rounded text-white">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <main class="content">
                @if ($data->isNotEmpty())
                    <div class="mb-8 grid grid-cols-1 lg:grid-cols-2 gap-5 w-full">
                        @foreach ($data as $partner)
                            <a href="{{ url('/partner/' . $partner->id) }}"
                                class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light">
                                <div class="up w-full">
                                    <div class="left">
                                        <div class="flex gap-2">
                                            <img class="rounded w-14 h-14 shadow"
                                                src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                            <div class="">
                                                <h3 class="font-bold mb-2 md:mb-1"> {{ $partner->name_team }}</h3>
                                                <div
                                                    class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full text-xs">

                                                    <h5><i class="fas fa-user"></i> {{ $partner->users->username }}</h5>
                                                </div>
                                                <div
                                                    class="bg-orange-100 w-auto inline-block text-orange_dark px-2 py-[2px] rounded-full text-xs">

                                                    <h5><i class="fas fa-location-dot"></i>
                                                        {{ $partner->location_team }}
                                                    </h5>
                                                </div>
                                                <div
                                                    class="bg-green-100 w-auto inline-block text-green-700 px-2 py-[2px] rounded-full text-xs">

                                                    <h5><i class="fas fa-users"></i> {{ $partner->total_member }}
                                                        Users
                                                    </h5>
                                                </div>
                                                <div
                                                    class="bg-red-100 w-auto inline-block text-red-700 px-2 py-[2px] rounded-full text-xs">

                                                    <h5><i class="far fa-times-circle"></i> {{ $partner->status }}
                                                        Empty
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="down mt-3">
                                    <p class="text-sm text-justify text-slate-600">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Molestias explicabo quo illum! Minima atque autem minus dicta
                                        quibusdam mollitia voluptas! .Lorem ipsum dolor sit, amet
                                        consectetur adipisicing elit. Quis ratione quidem saepe cum adipisci commodi
                                        doloremque tenetur qui ut nobis?</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="flex justify-center py-4 box shadow w-full border border-slate-200 rounded">
                        <h4
                            class="tracking-wide font-medium bg-clip-text bg-gradient-to-r from-sky_light to-primary text-transparent p-2 text-center">
                            No partners results found</h4>
                    </div>
                @endif

                {{-- pagination --}}
                @if ($count > 0)
                    <div class="flex items-center justify-between border-t border-gray-200 bg-white pt-4 pb-3">
                        <div class="flex-1 flex justify-between sm:hidden">
                            @if ($data->onFirstPage())
                                <span class="px-4 py-2 text-sm text-gray-400">Previous</span>
                            @else
                                <a href="{{ $data->previousPageUrl() }}"
                                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gradient-to-r from-sky_light to-primary hover:text-white">Previous</a>
                            @endif
                            @if ($data->hasMorePages())
                                <a href="{{ $data->nextPageUrl() }}"
                                    class="ml-3 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gradient-to-r from-sky_light to-primary hover:text-white">Next</a>
                            @else
                                <span class="ml-3 px-4 py-2 text-sm text-gray-400">Next</span>
                            @endif
                        </div>
                        <div class="hidden sm:flex sm:items-center sm:justify-between w-full">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing
                                    <span class="font-medium">{{ $data->firstItem() }}</span>
                                    to
                                    <span class="font-medium">{{ $data->lastItem() }}</span>
                                    of
                                    <span class="font-medium">{{ $data->total() }}</span>
                                    results
                                </p>
                            </div>
                            <div>
                                <nav class="isolate flex gap-2 -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                    @php
                                        $totalPages = $data->lastPage();
                                        $currentPage = $data->currentPage();
                                        $start = max(1, $currentPage - 1);
                                        $end = min($totalPages, $currentPage + 1);
                                    @endphp

                                    @if ($start > 1)
                                        <a href="{{ $data->url(1) }}"
                                            class="px-4 py-2 text-sm font-semibold text-gray-900 bg-white border border-gray-300 rounded-md hover:bg-gray-50">1</a>
                                        @if ($start > 2)
                                            <span class="px-4 py-2 text-sm font-semibold text-gray-700">...</span>
                                        @endif
                                    @endif

                                    @for ($i = $start; $i <= $end; $i++)
                                        @if ($i == $currentPage)
                                            <span
                                                class="px-4 py-2 text-sm font-semibold text-white bg-gradient-to-r from-sky_light to-primary rounded-md">{{ $i }}</span>
                                        @else
                                            <a href="{{ $data->url($i) }}"
                                                class="px-4 py-2 text-sm font-semibold text-gray-900 bg-white border border-gray-300 rounded-md hover:bg-gray-50">{{ $i }}</a>
                                        @endif
                                    @endfor

                                    @if ($end < $totalPages)
                                        @if ($end < $totalPages - 1)
                                            <span class="px-4 py-2 text-sm font-semibold text-gray-700">...</span>
                                        @endif
                                        <a href="{{ $data->url($totalPages) }}"
                                            class="px-4 py-2 text-sm font-semibold text-gray-900 bg-white border border-gray-300 rounded-md hover:bg-gray-50">{{ $totalPages }}</a>
                                    @endif
                                </nav>
                            </div>
                        </div>
                    </div>
                @endif
            </main>
        </div>
    </div>
@endsection
