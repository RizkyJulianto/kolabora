@extends('template.layout')
@section('content')
    <form action="{{ route('updatedData', auth()->user()->id) }}" method="post">
        <main class="profile flex flex-col lg:flex-row px-[5%] lg:px-[3%] gap-6 pt-11 pb-20">
            <div class="left-col flex-[1_1_100%] lg:flex-[1_1_35%] w-full flex flex-col gap-6">
                <div class="profile-img shadow border border-slate-200 p-[18px] rounded">
                    <div class="flex justify-center items-center flex-col">
                        <div class="relative">
                            <img class="w-28 h-28 rounded-full"
                                src="{{ asset('uploads/profile/' . auth()->user()->profile_img) }}"
                                alt="{{ auth()->user()->profile_img }}">
                            <label for="profile_img" class="absolute top-0 right-0 cursor-pointer">
                                <div
                                    class="tracking-wide bg-gray-100 border-[1.8px] border-gray-400 text-xs w-7 h-7 flex items-center justify-center focus:border-primary outline-none rounded-full">
                                    <i class="fa-solid fa-pencil"></i>
                                </div>
                                <input class="hidden" type="file" name="profile_img" id="profile_img">
                            </label>
                        </div>
                        <h3 class="mt-4 w-full text-lg font-semibold text-center uppercase">{{ auth()->user()->name }}</h3>
                    </div>

                    <div class="mt-4 text-sm text-slate-600">
                        <div class="form-readonly w-full mb-3">
                            <label class="mb-2">Username</label>
                            <input readonly type="text" name="" value="{{ auth()->user()->username }}"
                                class="border border-slate-200 rounded outline-none w-full p-2" id="">
                        </div>
                        <div class="form-readonly w-full">
                            <label class="mb-2">Email</label>
                            <input readonly type="text" name="" value="{{ auth()->user()->email }}"
                                class="border border-slate-200 rounded outline-none w-full p-2" id="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="right-col flex-[1_1_100%] lg:flex-[1_1_65%] flex-col flex gap-6 w-full">
                <div class="detail-data shadow border border-slate-200 p-[18px] rounded">
                    <h4
                        class="font-semibold mb-2.5 text-lg inline-block text-transparent bg-clip-text bg-gradient-to-r from-sky_light to-primary">
                        Detail data user</h4>
                    <div class="col grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Name</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-100 border-[1.8px] border-gray-400 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="name" id="name" value="{{ auth()->user()->name }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Username</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-100 border-[1.8px] border-gray-400 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="username" id="username" value="{{ auth()->user()->username }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Email</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-100 border-[1.8px] border-gray-400 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                email="email" id="email" value="{{ auth()->user()->email }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Gender</label>
                            <select name=""
                                class="inline-block tracking-wide  text-[13px] bg-gray-100 border-[1.8px] border-gray-400 w-full py-2  px-3 focus:border-primary outline-none rounded-md"
                                id="">
                                <option value="">Choice gender</option>
                                <option value="male" {{ auth()->user()->gender === 'male' ? 'selected' : '' }}>Male
                                </option>
                                <option value="female" {{ auth()->user()->gender === 'female' ? 'selected' : '' }}>
                                    Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="label-form block mb-1 text-gray-500 text-sm">Address</label>
                        <textarea name="addres"
                            class="inline-block tracking-wide h-20 bg-gray-100 border-[1.8px] border-gray-400 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                            id="" cols="30" rows="10">{{ auth()->user()->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <button
                            class="inline-block text-xs font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-1.5 px-2 hover:opacity-[90%]"
                            type="submit">Change</button>
                    </div>
                </div>

                <div class="change-password shadow border border-slate-200 p-[18px] rounded">
                    <h4
                        class="font-semibold mb-2.5 text-lg inline-block text-transparent bg-clip-text bg-gradient-to-r from-sky_light to-primary">
                        Change your password </h4>
                    <div class="col grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Password</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-100 border-[1.8px] border-gray-400 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                password="password" id="password" value="" autocomplete="off">
                        </div>
                        <div class="form-group mb-3">
                            <label class="label-form block mb-1 text-gray-500 text-sm">Password Confirm</label>
                            <input type="text"
                                class="inline-block tracking-wide bg-gray-100 border-[1.8px] border-gray-400 w-full py-2 text-sm px-3 focus:border-primary outline-none rounded-md"
                                name="password" id="password" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <button
                            class="inline-block text-xs font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-1.5 px-2 hover:opacity-[90%]"
                            type="submit">Change Password</button>
                    </div>
                </div>
            </div>
        </main>
    </form>
@endsection
