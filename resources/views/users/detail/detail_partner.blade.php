@extends('template.layout')
@section('title_web', "$data->name_team | Kolabora")
@section('content')
    <main class="detail shadow px-[5%] lg:px-[3%] py-9">
        <div class="flex gap-5 w-full">
            <div class="logo">
                <img class="w-36 h-3w-36 object-contain" src="{{ asset('images/logo/kolabora-transparent.png') }}"
                    alt="">
            </div>
            <div class="head">
                <h1 class="text-2xl font-bold ">{{ $data->name_team }}</h1>
                <h5 class="text-slate-700">{{ $data->slogan }}</h5>
                <div class="mt-5 flex flex-col gap-2">
                    <p class="text-[15px] text-slate-500"><i class="fas fa-city"></i> {{ $data->scope_company }}</p>
                    <p class="text-[15px] text-slate-500"><i class="fa-solid fa-location-dot"></i>
                        {{ $data->address_company }}</p>
                </div>
            </div>
        </div>
    </main>
    <main class="company flex flex-col px-[5%] lg:px-[3%] gap-6 pt-6 pb-20">
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Tentang {{ $data->name_company }}</h3>
            <div class="p-3">
                <p class="text-slate-500 text-sm">{{ $data->about_company }}</p>
            </div>
        </div>
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Hubungi kami</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 flex-1 p-3 text-sm">
                <div class="flex items-center gap-2">
                    <i class="fa-brands fa-instagram"></i>
                    <a href="{{ url('www.instagram.com/' . $data->instagram) }}">{{ $data->instagram }}</a>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-phone"></i>
                    <p>{{ $data->contact }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-brands fa-linkedin"></i>
                    <p>{{ $data->linkedin }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-globe"></i>
                    <a href="{{ url('www.instagram.com/' . $data->website) }}">{{ $data->website }}</a>
                </div>
            </div>
        </div>

        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Lowongan Kerja <span
                    class="bg-gradient-to-r from-sky_light text-sm to-primary py-1 px-2 rounded-full text-white">
                    {{ $data->project->count() }}</span></h3>
            @if (!$data->project->count() == null)
                <div class="flex flex-col gap-3 p-4 text-sm">
                    @foreach ($data->project as $item)
                        <div class="box shadow w-full border border-slate-200 rounded p-4">
                            <div class="up flex flex-col lg:flex-row lg:gap-2 gap-4">
                                <div class="left flex-[1_1_100%] lg:flex-[1_1_80%]">
                                    <div class="flex gap-2">
                                        <img class="rounded w-14 h-14 shadow" src="{{ asset('images/logo-kolabora.png') }}"
                                            alt="">
                                        <div class="">
                                            <h3 class="text-md font-bold mb-2 md:mb-1">
                                                {{ $item->name_project }}
                                            </h3>
                                            <div class="block md:flex md:flex-row gap-y-2 gap-x-2 md:gap-x-3 w-full">
                                                <div
                                                    class="bg-blue-100 w-auto inline-block text-center text-primary px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-city"></i>
                                                        {{ $item->company->name_company ?? 'No Company' }}</p>
                                                </div>
                                                <div
                                                    class="bg-orange-100 w-auto inline-block text-center text-orange_normal px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fas fa-clock"></i>
                                                        {{ $item->project_type }}</h>
                                                </div>
                                                <div
                                                    class="bg-green-100 w-auto inline-block text-center text-green-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-dollar"></i> {{ $item->salary }}
                                                    </p>
                                                </div>
                                                <div
                                                    class="bg-yellow-100 w-auto inline-block text-center text-yellow-700 px-2 py-[2px] rounded-full text-xs">
                                                    <p><i class="fa-solid fa-briefcase"></i>
                                                        {{ $item->experience_year }} year</p>
                                                </div>
                                                <div
                                                    class="bg-teal-100 w-auto inline-block text-center text-teal-700 px-2 py-[2px] rounded-full text-xs">
                                                    @if ($item->collaboration_type == 'Team')
                                                        <p><i class="fa-solid fa-users"></i>
                                                            {{ $item->collaboration_type }}</p>
                                                    @elseif($item->collaboration_type == 'Personal')
                                                        <p><i class="fa-solid fa-user"></i>
                                                            {{ $item->collaboration_type }}</p>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right flex-[1_1_100%] lg:flex-[1_1_20%] flex lg:justify-end lg:items-start">
                                    <div class="flex items-center gap-2 text-slate-500 text-sm">
                                        <i class="fa-regular fa-calendar"></i>
                                        <p>{{ date('j F Y', strtotime($item->date_project)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="down mt-3">
                                <div class="w-full text-sm text-justify text-slate-600">
                                    <p class="text-pretty break-all">
                                        {{ substr($item->description_project, 0, 400) }}...
                                    </p>
                                </div>
                                <p class="text-sm my-5 md:my-4 lg:my-3 text-slate-500 flex items-center gap-2">
                                    <i class="fa-solid fa-location-dot"></i>{{ $item->company->address_company }}
                                </p>
                                <div class="flex items-center gap-2">
                                    <p
                                        class="bg-gradient-to-r from-sky_light to-primary text-white rounded-sm text-xs py-1 px-2">
                                        {{ $item->company->scope_company }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex justify-center my-5">
                    <h4
                        class="tracking-wide font-medium bg-clip-text bg-gradient-to-r from-sky_light to-primary text-transparent p-2 text-center">
                        No jobs company results found</h4>
                </div>
            @endif
        </div>

    </main>
@endsection
