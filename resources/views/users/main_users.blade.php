@extends('template.layout')
@section('title_web', 'Find Jobs | KolaBora')
@section('content')
    <div class="w-full px-[5%] lg:px-[3%] py-9 overflow-hidden shadow-sm relative">
        <div class="blob-1 w-1/2 h-64 bg-primary blur-3xl rounded-full opacity-35 -z-10 absolute -top-20 right-0">
        </div>
        <div class="blob-2 w-1/2 h-64 bg-orange-500 blur-3xl rounded-full opacity-35 -z-10 absolute -bottom-20 left-0">
        </div>
        <h1 class="font-bold text-2xl mb-1">Temukan pekerjaan impianmu</h1>
        <p class="text-sm">Temukan pekerjaan impianmu, tempat passion dan keterampilan bersatu untuk karier yang bermakna!
        </p>
    </div>
    <div class="find-jobs flex flex-col lg:flex-row px-[5%] lg:px-[3%] gap-6 pt-11 pb-20">
        <div class="left-col flex-[1_1_100%] lg:flex-[1_1_25%] w-full">
            <div class="filter-col shadow border border-slate-200 rounded">
                <div class="flex justify-between items-center border-b border-slate-200 py-2 px-3">
                    <h1 class="font-semibold">Filter</h1>
                    <button type="button"
                        class="clear-all-users text-sm text-red-800 rounded-full bg-red-200 py-[2px] px-2 cursor-pointer">clear
                        all</button>
                </div>
                <div class="px-3 text-sm">
                    <div class="border-b border-slate-200 py-5">
                        <div class="form-group">
                            <h4 class="mb-2">Date Post</h4>
                            <div class="grid grid-cols-2 gap-2">
                                <input type="date"
                                    class="border text-xs border-slate-200 rounded outline-none w-full p-2"
                                    name="date_post_initial" id="date_post_initial">
                                <input type="date"
                                    class="border text-xs border-slate-200 rounded outline-none w-full p-2"
                                    name="date_post_end" id="date_post_end">
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-slate-200 py-5">
                        <h4 class="mb-2">Job Type</h4>
                        <div class="grid grid-cols-2 gap-1">
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="job_type_fulltime" id="job_type_fulltime" value="Full Time">
                                <span class="text-xs">Full Time</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="job_type_parttime" id="job_type_parttime" value="Part Time">
                                <span class="text-xs">Part Time</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="job_type_project_work" id="job_type_project_work"
                                    value="Project Work">
                                <span class="text-xs">Project Work</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="job_type_freelance" id="job_type_freelance" value="Freelance">
                                <span class="text-xs">Freelance</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="job_type_intership" id="job_type_intership" value="Intership">
                                <span class="text-xs">Intership</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="job_type_volunteer" id="job_type_volunteer" value="Volunteer">
                                <span class="text-xs">Volunteer</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="job_type_remote" id="job_type_remote" value="Remote">
                                <span class="text-xs">Remote</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-slate-200 py-5">
                        <h4 class="mb-2">Range Salary</h4>
                        <div class="grid grid-cols-2 gap-1">
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="salary_1" id="salary_1">
                                <span class="text-xs">Less than 200$</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="salary_2" id="salary_2">
                                <span class="text-xs">$200 - 500$</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="salary_3" id="salary_3">
                                <span class="text-xs">$500 - $1000</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="salary_4" id="salary_4">
                                <span class="text-xs">More than $1000</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-slate-200 py-5">
                        <h4 class="mb-2">Experience</h4>
                        <div class="grid grid-cols-2 gap-1">
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="experience_1" id="experience_1">
                                <span class="text-xs">Less than a year</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="experience_2" id="experience_2">
                                <span class="text-xs">1 - 5 years</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="experience_3" id="experience_3">
                                <span class="text-xs">5 - 10 years</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" name="experience_4" id="experience_4">
                                <span class="text-xs">More than 10 year</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-slate-200 py-5">
                        <h4 class="mb-2">Project Work</h4>
                        <div class="grid grid-cols-2 gap-1">
                            <div class="flex items-center gap-1">
                                <input type="checkbox" value="Personal" name="type_project_work_1"
                                    id="type_project_work_1">
                                <span class="text-xs">Personal</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <input type="checkbox" value="Team" name="type_project_work_2"
                                    id="type_project_work_2">
                                <span class="text-xs">Team</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-col flex-[1_1_100%] lg:flex-[1_1_75%] w-full">
            <div class="content-find-jobs">
                <div
                    class="flex gap-3 md:gap-0 flex-col md:flex-row md:justify-between md:items-center mb-6 w-full shadow border border-slate-200 rounded p-4">
                    <div class="flex items-center gap-2">
                        <h1 class="text-xl font-bold">Recommended Jobs</h1>
                        <h4 class="bg-gradient-to-r from-sky_light to-primary py-1 px-2 rounded-full text-white">
                            {{ $count }}</h4>
                    </div>
                    <form method="get" action="{{ route('mainUsersSearch') }}" class="flex items-center gap-2">
                        <input class="border shadow text-sm border-slate-200 rounded outline-none w-full py-2 px-3"
                            type="search" autocomplete="off" name="search" id="search"
                            placeholder="Searcing jobs">
                        <button type="submit"
                            class="bg-gradient-to-r text-sm from-sky_light to-primary py-2 px-3 rounded text-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <main class="content-main-users">
                    @if ($data->isNotEmpty())
                        <div class="mb-8 flex flex-col gap-5">
                            @foreach ($data as $jobs)
                                @if ($jobs->status == 'Found' || $jobs->status == null)
                                    <a href="{{ url('main-users/' . $jobs->id) }}" data-date="{{ $jobs->date_project }}"
                                        data-job-type="{{ $jobs->project_type }}" data-salary="{{ $jobs->salary }}"
                                        data-experience="{{ $jobs->experience_year }}"
                                        data-type-project-work="{{ $jobs->collaboration_type }}"
                                        class="box-main-users
                                        shadow w-full border border-slate-200 rounded p-4 hover:shadow-primary_light
                                        cursor-pointer">
                                        <div class="up flex flex-col lg:flex-row lg:gap-2 gap-4">
                                            <div class="left flex-[1_1_100%] lg:flex-[1_1_80%]">
                                                <div class="flex gap-2">
                                                    <img class="rounded w-14 h-14 shadow"
                                                        src="{{ asset('images/logo-kolabora.png') }}" alt="">
                                                    <div class="">
                                                        <h3 class="text-md font-bold mb-2 md:mb-1">
                                                            {{ $jobs->name_project }}
                                                        </h3>
                                                        <div
                                                            class="block md:flex md:flex-row gap-y-2 gap-x-2 md:gap-x-3 w-full">
                                                            <div
                                                                class="bg-blue-100 w-auto inline-block text-center text-primary px-2 py-[2px] rounded-full text-xs">
                                                                <p><i class="fas fa-city"></i>
                                                                    {{ $jobs->company->name_company ?? 'No Company' }}</p>
                                                            </div>
                                                            <div
                                                                class="bg-orange-100 w-auto inline-block text-center text-orange_normal px-2 py-[2px] rounded-full text-xs">
                                                                <p><i class="fas fa-clock"></i>
                                                                    {{ $jobs->project_type }}</p>
                                                            </div>
                                                            <div
                                                                class="bg-green-100 w-auto inline-block text-center text-green-700 px-2 py-[2px] rounded-full text-xs">
                                                                <p><i class="fa-solid fa-dollar"></i> {{ $jobs->salary }}
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="bg-yellow-100 w-auto inline-block text-center text-yellow-700 px-2 py-[2px] rounded-full text-xs">
                                                                <p><i class="fa-solid fa-briefcase"></i>
                                                                    {{ $jobs->experience_year }} year</p>
                                                            </div>
                                                            <div
                                                                class="bg-teal-100 w-auto inline-block text-center text-teal-700 px-2 py-[2px] rounded-full text-xs">
                                                                @if ($jobs->collaboration_type == 'Team')
                                                                    <p><i class="fa-solid fa-users"></i>
                                                                        {{ $jobs->collaboration_type }}</p>
                                                                @elseif($jobs->collaboration_type == 'Personal')
                                                                    <p><i class="fa-solid fa-user"></i>
                                                                        {{ $jobs->collaboration_type }}</p>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="right flex-[1_1_100%] lg:flex-[1_1_20%] flex lg:justify-end lg:items-start">
                                                <div class="flex items-center gap-2 text-slate-500 text-sm">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    <p>{{ date('j F Y', strtotime($jobs->date_project)) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="down mt-3">
                                            <div class="w-full text-sm text-justify text-slate-600">
                                                <p class="text-pretty break-all">
                                                    {{ substr($jobs->description_project, 0, 400) }}...
                                                </p>
                                            </div>
                                            <p class="text-sm my-5 md:my-4 lg:my-3 text-slate-500 flex items-center gap-2">
                                                <i
                                                    class="fa-solid fa-location-dot"></i>{{ $jobs->company->address_company }}
                                            </p>
                                            <div class="flex items-center gap-2">
                                                <p
                                                    class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                                    {{ $jobs->company->scope_company }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach

                        </div>
                    @else
                        <div class="flex justify-center py-4 box shadow w-full border border-slate-200 rounded">
                            <h4
                                class="tracking-wide font-medium bg-clip-text bg-gradient-to-r from-sky_light to-primary text-transparent p-2 text-center">
                                No jobs results found</h4>
                        </div>
                    @endif

                    <div class="no-results-message-jobs flex justify-center py-4 box shadow w-full border border-slate-200 rounded"
                        style="display: none;">
                        <h4
                            class="tracking-wide font-medium bg-clip-text bg-gradient-to-r from-sky_light to-primary text-transparent p-2 text-center">
                            No jobs results found
                        </h4>
                    </div>


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
