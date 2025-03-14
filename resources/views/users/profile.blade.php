@extends('template.layout')
@section('title_web', 'Profile | KolaBora')
@section('content')
    <form action="{{ route('updateProfileUsers', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <main class="profile flex flex-col lg:flex-row px-[5%] lg:px-[3%] gap-6 pt-11 pb-20">
            <div class="left-col flex-[1_1_100%] lg:flex-[1_1_35%] w-full flex flex-col gap-6">
                <div class="profile-img shadow border border-slate-300 p-[18px] rounded">
                    <div class="flex justify-center items-center flex-col">
                        <div class="relative">
                            <img id="profile-img-preview" class="w-28 h-28 shadow rounded-full"
                                src="{{ asset('uploads/profile/' . (auth()->user()->profile_img ?? 'default-profile.jpg')) }}"
                                alt="{{ auth()->user()->profile_img }}">
                            <label for="profile_img" class="absolute top-0 right-0 cursor-pointer">
                                <div
                                    class="tracking-wide bg-gray-50 hover:bg-gradient-to-r from-yellow_light to-orange_normal hover:text-white hover:border-orange-200 border-[1.8px] border-slate-300 text-xs w-7 h-7 flex items-center justify-center focus:border-primary outline-none rounded-full">
                                    <i class="fa-solid fa-pencil"></i>
                                </div>
                                <input class="hidden" type="file" name="profile_img" id="profile_img" accept="image/*">
                            </label>
                        </div>
                        <div class="flex gap-2 my-5">
                            <button type="submit" name="reset_profile_img" value="1"
                                class="bg-red-100 w-auto inline-block text-center text-red-600 px-2 py-[2px] rounded-full text-xs"><i
                                    class="fas fa-trash"></i> Reset Foto
                            </button>
                            <div
                                class="bg-green-100 w-auto inline-block text-center text-green-600 px-2 py-[2px] rounded-full text-xs">
                                <p><i class="fa-solid fa-user"></i>
                                    {{ auth()->user()->role }}</p>
                            </div>
                        </div>
                        <h3 class="w-full text-lg font-semibold text-center uppercase">{{ auth()->user()->name }}</h3>
                    </div>

                    <div class="mt-4">
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Bio </label>
                            <textarea name="bio"
                                class="inline-block tracking-wide h-32 bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                id="" cols="30" rows="10">{{ auth()->user()->bio }}</textarea>
                        </div>
                        <div class="form-group">
                            <button
                                class="inline-block text-xs font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-1.5 px-2 hover:opacity-[90%]"
                                type="submit">Save</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="right-col flex-[1_1_100%] lg:flex-[1_1_65%] flex-col flex gap-6 w-full">
                <div class="detail-data shadow border border-slate-300 p-[18px] rounded">
                    <h4
                        class="font-semibold mb-2.5 text-lg inline-block text-transparent bg-clip-text bg-gradient-to-r from-sky_light to-primary">
                        Detail data user</h4>
                    <div class="col grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Name</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="name" id="name" value="{{ auth()->user()->name }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Username</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="username" id="username" value="{{ auth()->user()->username }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Email</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="email" id="email" value="{{ auth()->user()->email }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Born Birth</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="born_birth" id="born_birth" value="{{ auth()->user()->born_birth }}"
                                autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Date Birth</label>
                            <input type="date"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="date_birth" id="date_birth" value="{{ auth()->user()->date_birth }}"
                                autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Gender</label>
                            <select name="gender"
                                class="inline-block tracking-wide  text-[14px] bg-gray-50 border-[1.8px] border-slate-300 w-full py-2  px-3 focus:border-primary outline-none rounded-md"
                                id="gender">
                                <option value="">Choice gender</option>
                                <option value="male" {{ auth()->user()->gender === 'male' ? 'selected' : '' }}>Male
                                </option>
                                <option value="female" {{ auth()->user()->gender === 'female' ? 'selected' : '' }}>
                                    Female</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">No Telephone</label>
                            <input type="number"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="no_telp" id="no_telp" value="{{ auth()->user()->no_telp }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Last Education</label>
                            <select name="last_education" id="last_education"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md">
                                <option value="">Choice last education</option>
                                <option {{ auth()->user()->last_education == 'not' ? 'selected' : '' }} value="not">
                                    Tidak/Belum
                                    Sekolah
                                </option>
                                <option {{ auth()->user()->last_education == 'sd' ? 'selected' : '' }} value="sd">
                                    SD/Sederajat
                                </option>
                                <option {{ auth()->user()->last_education == 'smp' ? 'selected' : '' }} value="smp">
                                    SMP/Sederajat
                                </option>
                                <option {{ auth()->user()->last_education == 'sma_smk' ? 'selected' : '' }}
                                    value="sma_smk">
                                    SMA/SMK/Sederajat</option>
                                <option {{ auth()->user()->last_education == 'd1_d3' ? 'selected' : '' }} value="d1_d3">
                                    DI/DI/DIII/Sederajat</option>
                                <option {{ auth()->user()->last_education == 's1_d4' ? 'selected' : '' }} value="s1_d4">
                                    S1/DIV/Sederajat
                                </option>
                                <option {{ auth()->user()->last_education == 's2' ? 'selected' : '' }} value="s2">
                                    S2/Sederajat
                                </option>
                                <option {{ auth()->user()->last_education == 's2' ? 'selected' : '' }} value="s3">
                                    S3/Sederajat
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="label-form block mb-1 text-gray-500 text-sm">Address</label>
                        <textarea name="address"
                            class="inline-block tracking-wide h-20 bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                            id="address" cols="30" rows="10">{{ auth()->user()->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <button
                            class="inline-block text-xs font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-1.5 px-2 hover:opacity-[90%]"
                            type="submit">Save</button>
                    </div>
                </div>

                <div class="change-password shadow border border-slate-300 p-[18px] rounded">
                    <h4
                        class="font-semibold mb-2.5 text-lg inline-block text-transparent bg-clip-text bg-gradient-to-r from-sky_light to-primary">
                        Change your password </h4>
                    <div class="col grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Password</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="password" id="password" value="{{ old('password') }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Password Confirm</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-50 border-[1.8px] border-slate-300 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="password_confirmation" id="password_confirmation"
                                value="{{ old('password_confirmation') }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="saveSweet"
                            class="inline-block text-xs font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-1.5 px-2 hover:opacity-[90%]"
                            type="submit">Change Password</button>
                    </div>
                </div>
            </div>
        </main>
    </form>
@endsection
