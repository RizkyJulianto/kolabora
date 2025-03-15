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
                <div class="block md:flex md:flex-row gap-y-2 gap-x-2 md:gap-x-3 w-full mt-2">
                    <div class="bg-blue-100 w-auto inline-block text-center text-primary px-2 py-[2px] rounded-full text-xs">
                        <p><i class="fas fa-user"></i>
                            {{ $data->users->name ?? 'No User' }}</p>
                    </div>
                    @if ($data->status === 1)
                        <div
                            class="bg-teal-100 w-auto inline-block text-center text-teal-700 px-2 py-[2px] rounded-full text-xs">
                            <p><i class="fa-solid fa-users"></i>
                                Team Full
                            </p>
                        </div>
                    @elseif($data->status === 0)
                        <div
                            class="bg-red-100 w-auto inline-block text-center text-red-700 px-2 py-[2px] rounded-full text-xs">
                            <p><i class="fa-solid fa-users"></i>
                                Team Found
                            </p>
                        </div>
                    @endif
                </div>

                <div class="mt-5 flex flex-col gap-2">
                    <p class="text-[15px] text-slate-500"><i class="fa-solid fa-briefcase"></i> {{ $data->scope_team }}</p>
                    <p class="text-[15px] text-slate-500"><i class="fa-solid fa-location-dot"></i>
                        {{ $data->location_team }}</p>
                </div>
            </div>
        </div>
    </main>
    <main class="company flex flex-col px-[5%] lg:px-[3%] gap-6 pt-6 pb-20">
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Tentang {{ $data->name_team }}</h3>
            <div class="p-3">
                <p class="text-slate-500 text-sm">{{ $data->description_team }}</p>
            </div>
        </div>
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Members <span
                    class="bg-teal-200 text-teal-700 text-sm py-1 px-2 rounded-full">Maksimal :
                    {{ $data->total_member }}
                </span> </h3>
            <div class="grid grid-cols-2 gap-2 p-3 text-sm">
                <div class="flex items-center gap-2">
                    <p><i class="fas fa-user"></i> {{ $data->member }}</p>
                </div>
            </div>
        </div>

    </main>
@endsection
