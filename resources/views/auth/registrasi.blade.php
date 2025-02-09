<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Kolabora</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/kolabora.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('library/sweetalert/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <section class="login-section flex flex-col lg:flex-row relative w-full  lg:overflow-hidden">
        <div class="left-col hidden lg:flex-1 bg-sky-600 w-full py-56 lg:flex px-[6%]">
            <img class="w-full" src="{{ asset('images/auth/image-job.png') }}" alt="">
        </div>
        <div class="right-col flex-1 py-28 lg:py-14 px-[6%] w-full relative">
            <div
                class="blob-1 w-64 h-64 sm:w-44 sm:h-44 bg-sky-500 blur-3xl rounded-full opacity-35 -z-10 absolute -top-20 right-0">
            </div>
            <div
                class="blob-2 w-64 h-64 sm:w-52 sm:h-52 bg-orange-500 blur-3xl rounded-full opacity-35 -z-10 absolute -bottom-20 left-0">
            </div>
            <div class="mb-5">
                <div class="flex items-center">
                    <img class="w-10 h-10" src="{{ asset('images/logo/kolabora-transparent.png') }}" alt="">
                    <h1 class="text-2xl font-bold text-orange-300">Kola<span class="text-sky-600">Bora</span></h1>
                </div>
                <h2 class="font-bold text-3xl my-2">Create your Account</h2>
                <p class="text-gray-500">Enter your personal data to create your account</p>
            </div>
            <form action="{{ route('processRegistrasi') }}" method="post">
                @csrf
                <div class="form-group mb-6">
                    <label class="label-form block mb-1 text-gray-500 text-md">Name</label>
                    <input type="text"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-sky-500 outline-none rounded-md"
                        name="name" id="name" autocomplete="off">
                </div>
                <div class="form-group mb-6">
                    <label class="label-form block mb-1 text-gray-500 text-md">Email</label>
                    <input type="text"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-sky-500 outline-none rounded-md"
                        name="email" id="email" autocomplete="off">
                </div>
                <div class="form-group mb-6">
                    <label class="label-form block mb-1 text-gray-500 text-md">Username</label>
                    <input type="text"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-sky-500 outline-none rounded-md"
                        name="username" id="username" autocomplete="off">
                </div>
                <div class="form-group mb-6">
                    <label class="label-form block mb-1 text-gray-500 text-md">Password</label>
                    <input type="password"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-sky-500 outline-none rounded-md"
                        name="password" id="password" autocomplete="off">
                    <span class="password-icon"><i class="fas fa-eye"></i></span>
                </div>
                <div class="form-group">
                    <button
                        class="inline-block font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky-500  to-sky-700 text-white py-2.5 px-3 w-full hover:opacity-[90%]"
                        type="submit">Sign Up</button>
                </div>
            </form>
            <p class="text-center mt-2 text-gray-500">Already have an account? <a href="{{ url('auth/login') }}"
                    class="text-sky-500">Sign In</a></p>
        </div>
    </section>

    <script src="{{ asset('library/sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/auth.js') }}"></script>

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                html: '<ul>' +
                    @foreach ($errors->all() as $error)
                        '<li>{{ $error }}</li>' +
                    @endforeach
                '</ul>',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
</body>

</html>
