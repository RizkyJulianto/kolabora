@extends('template.layout')
@section('title_web', 'Project | KolaBora')
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
    <div class="project flex flex-col lg:flex-row px-[5%] lg:px-[3%] gap-6 pt-11 pb-20">
        <div class="left-col flex-[1_1_100%] lg:flex-[1_1_25%] w-full">
            <div class="filter-col shadow border border-slate-200 rounded">
                <div class="flex justify-between items-center border-b border-slate-200 py-2 px-3">
                    <h1 class="font-semibold">Filter</h1>
                </div>
                <div class="px-3 text-sm">
                    <div class="border-b border-slate-200 py-5">
                        <div class="form-filter mb-5">
                            <h4 class="mb-2">Date project</h4>
                            <select class="border text-xs border-slate-200 rounded outline-none w-full p-2" name=""
                                id="">
                                <option value="">Anytime</option>
                                <option value="">Finished</option>
                                <option value="">Unfinished</option>
                            </select>
                        </div>
                        <div class="form-filter">
                            <h4 class="mb-2">Status</h4>
                            <select class="border text-xs border-slate-200 rounded outline-none w-full p-2" name=""
                                id="">
                                <option value="">Anytime</option>
                                <option value="">Team</option>
                                <option value="">Alone</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-col flex-[1_1_100%] lg:flex-[1_1_75%] w-full">
            <div class="content-project">
                <div
                    class="flex gap-3 md:gap-0 flex-col md:flex-row md:justify-between md:items-center mb-6 w-full shadow border border-slate-200 rounded p-4 ">
                    <div class="flex items-center gap-2">
                        <h1 class="text-xl font-bold">Projects</h1>
                        <h4 class="bg-gradient-to-r from-sky_light to-primary py-1 px-2 rounded-full text-white">
                            {{ $count }}</h4>
                    </div>
                    <form method="get" action="{{ route('projectSearch') }}" class="flex items-center gap-2">
                        <input class="border shadow text-sm border-slate-200 rounded outline-none w-full py-2 px-3"
                            type="search" name="search" id="search" placeholder="Searcing jobs">
                        <button type="submit"
                            class="bg-gradient-to-r text-sm from-sky_light to-primary py-2 px-3 rounded text-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <main class="content">
                    @if ($data->isNotEmpty())
                        <div class="mb-8 flex flex-col gap-5">
                            @foreach ($data as $project)
                                @if ($project->status != 'Found' && $project->status != null)
                                    <div class="box shadow w-full border border-slate-200 rounded p-4">
                                        <div class="up flex flex-col lg:flex-row lg:gap-2 gap-4">
                                            <div class="left flex-[1_1_100%] lg:flex-[1_1_75%]">
                                                <div class="flex gap-2">
                                                    <img class="rounded w-14 h-14 shadow"
                                                        src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                                    <div class="">
                                                        <h3 class="font-bold mb-2 md:mb-1">{{ $project->name_project }}</h3>
                                                        <div
                                                            class="bg-blue-100 w-auto inline-block text-primary px-2 py-[2px] rounded-full text-xs">

                                                            <h5><i class="fas fa-city"></i>
                                                                {{ $project->company->name_company }}</h5>
                                                        </div>
                                                        <div
                                                            class="bg-orange-100 w-auto inline-block text-orange_dark px-2 py-[2px] rounded-full text-xs">
                                                            <h5><i class="fa-regular fa-calendar"></i>
                                                                {{ $project->status }}</h5>
                                                        </div>
                                                        <div
                                                            class="bg-teal-100 w-auto inline-block text-teal-700 px-2 py-[2px] rounded-full text-xs">
                                                            <h5><i class="fas fa-users"></i>
                                                                {{ $project->collaboration_type }}</h5>
                                                        </div>
                                                        <div
                                                            class="bg-red-100 w-auto inline-block text-red-700 px-2 py-[2px] rounded-full text-xs">
                                                            <h5><i class="fas fa-x"></i> Unfinished</h5>
                                                        </div>
                                                        <select name="" id=""></select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="right flex-[1_1_100%] lg:flex-[1_1_25%] flex lg:justify-end lg:items-start">
                                                <div class="flex items-center gap-2 text-slate-500 text-sm ">
                                                    <i class="fa-regular fa-clock"></i>
                                                    <p>12 January 2025 at 9:20 AM</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="down mt-3">
                                            <p class="text-sm text-justify text-slate-600">Lorem ipsum dolor sit amet
                                                consectetur
                                                adipisicing elit. Molestias explicabo quo illum! Minima atque autem
                                                minus
                                                dicta
                                                quibusdam mollitia voluptas! .Lorem ipsum dolor sit, amet
                                                consectetur adipisicing elit. Quis ratione quidem saepe cum adipisci
                                                commodi
                                                doloremque tenetur qui ut nobis?</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="flex justify-center mb-5">
                            <h4
                                class="tracking-wide font-medium bg-clip-text bg-gradient-to-r from-sky_light to-primary text-transparent p-2 text-center">
                                No company results found</h4>
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
                                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm"
                                        aria-label="Pagination">
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
    </div>
@endsection
