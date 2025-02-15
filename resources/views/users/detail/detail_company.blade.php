@extends('template.layout')
@section('title_web', "$data->name_company | Kolabora")
@section('content')
    <main class="detail shadow px-[5%] lg:px-[3%] py-9">
        <div class="flex gap-5 w-full">
            <div class="logo">
                <img class="w-36 h-3w-36 object-contain" src="{{ asset('images/logo/kolabora-transparent.png') }}"
                    alt="">
            </div>
            <div class="head">
                <h1 class="text-2xl font-bold ">{{ $data->name_company }}</h1>
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
    </main>
@endsection
