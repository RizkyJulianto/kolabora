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
        <div class="content-company">
            <div
                class="flex gap-3 md:gap-0 flex-col md:flex-row md:justify-between md:items-center mb-6 w-full shadow border border-slate-200 rounded p-4">
                <div class="flex items-center gap-2">
                    <h1 class="text-xl font-bold">All Company</h1>
                    <h4 class="bg-gradient-to-r from-sky_light to-primary py-1 px-2 rounded-full text-white">
                        {{ $count }}</h4>
                </div>
                <form method="get" action="{{ route('mainUsersSearch') }}" class="flex items-center gap-2">
                    <input class="border shadow text-sm border-slate-200 rounded outline-none w-full py-2 px-3"
                        type="search" autocomplete="off" name="search" id="search" placeholder="Searcing jobs">
                    <button type="submit"
                        class="bg-gradient-to-r text-sm from-sky_light to-primary py-2 px-3 rounded text-white">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <main class="column-content w-full">
                @if ($data->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        @foreach ($data as $company)
                            <a href="{{ url('company/' . $company->id) }}"
                                class="box shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light cursor-pointer">
                                <div class="up flex flex-col lg:flex-row lg:justify-between lg:gap-0 gap-4">
                                    <div class="left">
                                        <div class="flex gap-2">
                                            <img class="rounded w-14 h-14 shadow"
                                                src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                            <div class="">
                                                <h3 class="font-bold mb-2 md:mb-1">{{ $company->name_company }}</h3>
                                                <p class="text-sm text-slate-400 line-clamp-1">
                                                    {{ $company->address_company }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="down mt-3">
                                    <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                                        <i class="fas fa-city"></i>
                                        <p class="text-justify text-slate-600 line-clamp-1">{{ $company->scope_company }}
                                        </p>
                                    </div>
                                    <div class="flex mb-1 items-center text-sm gap-2 text-slate-400">
                                        <i class="fa-solid fa-briefcase"></i>
                                        <p class="text-justify text-slate-600">{{ $company->project->count() }} Lowongan
                                        </p>
                                    </div>
                                    <div class="text-sm text-justify mt-2 text-slate-500">
                                        <p>{{ substr($company->about_company, 0, 200) }}...</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="flex justify-center py-4 box shadow w-full border border-slate-200 rounded">
                        <h4
                            class="tracking-wide font-medium bg-clip-text bg-gradient-to-r from-sky_light to-primary text-transparent p-2 text-center">
                            No company results found</h4>
                    </div>
                @endif

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
                                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
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
    </main>
@endsection
