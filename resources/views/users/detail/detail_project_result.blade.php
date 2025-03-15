@extends('template.layout')
@section('title_web', "$data->name_project | Kolabora")
@section('content')
    <main class="detail shadow px-[5%] lg:px-[3%] py-9">
        <div class="flex gap-5 w-full">
            <div class="logo flex-[1_1_20%] md:flex-[1_1_15%] lg:flex-[1_1_10%]">
                <img class="w-36 h-3w-36 object-contain" src="{{ asset('images/logo/kolabora-transparent.png') }}"
                    alt="">
            </div>
            <div class="head flex-[1_1_80%] md:flex-[1_1_85%] lg:flex-[1_1_90%]">
                <h1 class="text-[22px] font-bold mb-1">{{ $data->name_project }}</h1>
                <h5 class="text-slate-700 text-lg">{{ $data->company->name_company }}</h5>
                <div class="mt-5 flex flex-col gap-2">
                    <p class="text-[15px] text-slate-500"><i class="fas fa-city"></i> {{ $data->company->scope_company }}
                    </p>
                    <p class="text-[15px] text-slate-500"><i class="fa-solid fa-location-dot"></i>
                        {{ $data->company->address_company }}</p>
                </div>
            </div>
        </div>
    </main>
    <main class="company flex flex-col px-[5%] lg:px-[3%] gap-6 pt-6 pb-20">
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Description Project</h3>
            <div class="p-3">
                <p class="text-slate-500 text-justify text-sm">{{ $data->description_project }}</p>
            </div>
        </div>
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Experience Work | <span
                    class="bg-yellow-200 text-yellow-700 text-sm py-1 px-2 rounded-full">Minimal :
                    {{ $data->experience_year }}
                    Year</span>
            </h3>
            <div class="p-3">
                <p class="text-slate-500 text-justify text-sm">{{ $data->experience }}</p>
            </div>
        </div>
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Skills
            </h3>
            <div class="p-3">
                <p class="text-slate-500 text-justify text-sm">{{ $data->skills }}</p>
            </div>
        </div>
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Ketentuan
            </h3>
            <div class="p-3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-sm">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <p>Prospek Kerja : </p>
                            <p
                                class="bg-orange-100 w-auto inline-block text-center text-orange_normal px-2 py-[2px] rounded-full">
                                <i class="fas fa-clock"></i>
                                {{ $data->project_type }}
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <p>Gaji : </p>
                            <p
                                class="bg-green-100 w-auto inline-block text-center text-green-700 px-2 py-[2px] rounded-full">
                                <i class="fa-solid fa-dollar"></i>
                                {{ $data->salary }}
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <p>Date Project : </p>
                            <p class="bg-sky-100 w-auto inline-block text-center text-sky-700 px-2 py-[2px] rounded-full">
                                <i class="fa-regular fa-calendar"></i>
                                {{ date('j F Y', strtotime($data->date_project)) }}
                            </p>
                        </div>
                        <div class="flex items-center gap-2">
                            <p>Deadline Project : </p>
                            <p class="bg-red-100 w-auto inline-block text-center text-red-700 px-2 py-[2px] rounded-full">
                                <i class="fa-regular fa-calendar"></i>
                                {{ date('j F Y g:i a', strtotime($data->deadline)) }}
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        @if ($data->collaboration_type == 'Team')
                            <div class="flex items-center gap-2">
                                <p>Collaboration Type : </p>
                                <p
                                    class="bg-teal-100 w-auto inline-block text-center text-teal-700 px-2 py-[2px] rounded-full">
                                    <i class="fas fa-users"></i>
                                    {{ $data->collaboration_type }}
                                </p>
                            </div>
                            <div class="flex items-center gap-2">
                                <p>Total Members : </p>
                                <p
                                    class="bg-teal-100 w-auto inline-block text-center text-teal-700 px-2 py-[2px] rounded-full">
                                    <i class="fa-solid fa-users"></i>
                                    {{ $data->total_members }}
                                </p>
                            </div>
                        @elseif($data->collaboration_type == 'Personal')
                            <div class="flex items-center gap-2">
                                <p>Collaboration Type : </p>
                                <p
                                    class="bg-teal-100 w-auto inline-block text-center text-teal-700 px-2 py-[2px] rounded-full">
                                    <i class="fas fa-user"></i>
                                    {{ $data->collaboration_type }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="box shadow w-full border border-slate-200 rounded">
            <h3 class="border-b border-slate-200 p-3 text-lg font-medium">Hubungi Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 flex-1 p-3 text-sm">
                <div class="flex items-center gap-2">
                    <i class="fa-brands fa-instagram"></i>
                    <a
                        href="{{ url('www.instagram.com/' . $data->company->instagram) }}">{{ $data->company->instagram }}</a>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-phone"></i>
                    <p>{{ $data->company->contact }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-brands fa-linkedin"></i>
                    <p>{{ $data->company->linkedin }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-globe"></i>
                    <a href="{{ url('www.instagram.com/' . $data->company->website) }}">{{ $data->company->website }}</a>
                </div>
            </div>
        </div>

        @if ($data->status === 'Accepted')
            <div class="box shadow w-full border border-slate-200 rounded">
                <div class="flex gap-3 border-b border-slate-200 p-3 items-center">
                    <h3 class="text-lg font-medium">Result Project</h3>
                    @if ($data->status_result == 0)
                        <div class="bg-red-100 w-auto inline-block text-red-700 px-2 py-[2px] rounded-full text-sm">
                            <h5><i class="fas fa-x"></i> Unfinished</h5>
                        </div>
                    @elseif($data->status_result == 1)
                        <div class="bg-green-100 w-auto inline-block text-green-700 px-2 py-[2px] rounded-full text-sm">
                            <h5><i class="fas fa-check"></i> Finished</h5>
                        </div>
                    @endif
                </div>
                <div class="p-3 grid grid-cols-1 md:grid-cols-2 gap-5">
                    <form action="{{ route('projectResult', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Upload Result</label>
                            <input type="file"
                                class="inline-block border w-full shadow text-sm border-slate-200 py-2 px-3 focus:border-primary outline-none rounded-md"
                                name="result_project" id="result_project">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Description Result</label>
                            <textarea name="description_result"
                                class="tracking-wide h-32 w-full inline-block border shadow text-sm border-slate-200 py-2 px-3 focus:border-primary outline-none rounded-md"
                                id="description_result" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button id="saveSweet"
                                class="flex-1 inline-block font-medium w-full tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-2.5 px-3 hover:opacity-[90%]"
                                type="submit">Submit Result</button>
                        </div>
                    </form>
                    <div class="result-project">
                        @if ($data->status_result == 0)
                            <div
                                class="shadow flex justify-center items-center h-full w-full border border-slate-200 rounded">
                                <h3
                                    class="tracking-wide font-medium bg-clip-text bg-gradient-to-r from-sky_light to-primary text-transparent p-2 text-center">
                                    Haven't sent project results!</h3>
                            </div>
                        @else
                            <div class="form-group mb-3">
                                <label class="label-form block mb-1 text-gray-500 text-sm">Date Result</label>
                                <div
                                    class="tracking-wide h-auto w-full inline-block border shadow text-sm border-slate-200 py-2 px-3 rounded-md">
                                    <p><i class="fa-regular fa-calendar"></i>
                                        {{ date('j F Y g:i a', strtotime($data->date_result)) }}</p>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label-form block mb-1 text-gray-500 text-sm">Upload Result</label>
                                <div class="flex gap-3">
                                    <div
                                        class="flex-[1_1_95%] tracking-wide h-auto w-full inline-block border shadow text-sm border-slate-200 py-2 px-3 rounded-md">
                                        <p>{{ $data->result_project }}</a>
                                    </div>

                                    <button type="button"
                                        class="flex-[1_1_5%] tracking-wide h-auto w-full flex items-center justify-center border shadow text-sm border-slate-200 py-2 px-3 rounded-md text-white bg-gradient-to-r from-sky_light to-primary "
                                        onclick="window.location.href='{{ url('/uploads/result_project/' . $data->result_project) }}'"><i
                                            class="fas fa-download"></i></button>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label-form block mb-1 text-gray-500 text-sm">Description Result</label>
                                <div
                                    class="tracking-wide h-auto w-full inline-block border shadow text-sm border-slate-200 py-2 px-3 rounded-md">
                                    <p>{{ $data->description_result }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @elseif($data->status === 'Pending')
            <div class="box shadow w-full border border-slate-200 rounded">
                <div class="flex gap-3 border-b border-slate-200 p-3 items-center justify-center">
                    <h3
                        class="text-lg font-medium tracking-wide bg-clip-text bg-gradient-to-r from-sky_light to-primary text-transparent p-2">
                        Project masih dalam status Pending</h3>
                </div>
            </div>
        @elseif($data->status === 'Rejected')
            <div class="box shadow w-full border border-slate-200 rounded">
                <div class="flex gap-3 border-b border-slate-200 p-3 items-center justify-center">
                    <h3
                        class="text-lg font-medium tracking-wide bg-clip-text bg-gradient-to-r from-red-400 to-red-700 text-transparent p-2">
                        Maaf permintaan anda kami tolak</h3>
                </div>
            </div>
        @endif
    </main>
@endsection
