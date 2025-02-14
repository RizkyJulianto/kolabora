{{-- Footer --}}
<footer class="shadow">
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 py-9 w-full px-[5%] lg:px-[3%] border-t border-slate-200 relative">
        <div class="logo-footer">
            <div class="logo flex items-center">
                <img class="w-12" src="{{ asset('images/logo/kolabora-transparent.png') }}" alt="">
                <h1 class="text-2xl font-bold text-orange-300">Kola<span class="text-primary">Bora</span></h1>
            </div>
            <p class="text-[15px] mt-2 mb-4">Kolaborasi Tanpa Batas Peluang Tak Terbatas!</p>
            <div class="border border-slate-200 shadow flex rounded p-1">
                <input class="w-[70%] py-2 px-3 outline-none placeholder:text-[15px]" type="email" name=""
                    id="" placeholder="Masukan email anda">
                <button
                    class="w-[30%] py-2 px-3 text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50  dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 tracking-wide text-[15px] rounded hover:opacity-85"
                    type="submit">Kirim</button>
            </div>
        </div>
        <div class="permalinks">
            <div>
                <h5 class="font-semibold pb-1">Permalinks</h5>
                <div class="w-full h-[1.5px] bg-slate-400 relative">
                    <div class="absolute -top-1 right-0 w-10 h-2 bg-[#2557D6] hover:bg-[#2557D6]/90 focus:ring-4 focus:ring-[#2557D6]/50 focus:outline-none"></div>
                </div>
            </div>
            <div class="flex flex-col gap-1 text-[15px] mt-2">
                <a href=""
                    class="pemalinks-footer hover:opacity-60 active-menu hover:translate-x-1 transition-all">Find
                    Job</a>
                <a href=""
                    class="pemalinks-footer hover:opacity-60 hover:translate-x-1 transition-all">Message</a>
                <a href=""
                    class="pemalinks-footer hover:opacity-60 hover:translate-x-1 transition-all">Hiring</a>
                <a href=""
                    class="pemalinks-footer hover:opacity-60 hover:translate-x-1 transition-all">Community</a>
                <a href=""
                    class="pemalinks-footer hover:opacity-60 hover:translate-x-1 transition-all">FAQ</a>
            </div>
        </div>
        <div class="social_media">
            <div>
                <h5 class="font-semibold pb-1">Social Media</h5>
                <div class="w-full h-[1.5px] bg-slate-400 relative">
                    <div class="absolute -top-1 right-0 w-10 h-2 bg-[#2557D6] hover:bg-[#2557D6]/90 focus:ring-4 focus:ring-[#2557D6]/50 focus:outline-none"></div>
                </div>
            </div>
            <div class="flex flex-col gap-1 text-[15px] mt-2">
                <div class="flex items-center gap-2">
                    <div
                        class="flex items-center w-[34px] h-[34px] rounded justify-center bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 text-white text-lg">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <a href="{{ url('www.youtube.com') }}"
                        class="social-footer hover:text-orange_normal">kolabora</a>
                </div>
                <div class="flex items-center gap-2">
                    <div
                        class="flex items-center w-[34px] h-[34px] rounded justify-center bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 text-white text-lg">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <a href="{{ url('mailto:juliantorizky01@gmail.com') }}"
                        class="social-footer hover:text-orange_normal">kolabora@gmail.com</a>
                </div>
                <div class="flex items-center gap-2">
                    <div
                        class="flex items-center w-[34px] h-[34px] rounded justify-center bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 text-white text-[16px]">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <a href="{{ url('www.youtube.com') }}" class="social-footer hover:text-orange_normal">(0281)
                        5161 1234</a>
                </div>
                <div class="flex items-center gap-2">
                    <div
                        class="flex items-center w-[34px] h-[34px] rounded justify-center bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 text-white text-lg">
                        <i class="fa-brands fa-facebook-f"></i>
                    </div>
                    <a href="{{ url('www.youtube.com') }}"
                        class="social-footer hover:text-orange_normal">kolabora</a>
                </div>
            </div>
        </div>
        <div class="permalinks">
            <div>
                <h5 class="font-semibold pb-1">Alamat</h5>
                <div class="w-full h-[1.5px] bg-slate-400 relative">
                    <div class="absolute -top-1 right-0 w-10 h-2 bg-[#2557D6] hover:bg-[#2557D6]/90 focus:ring-4 focus:ring-[#2557D6]/50 focus:outline-none"></div>
                </div>
            </div>
            <div class="flex flex-col gap-1 mt-2">
                <p class="text-[15px]">Jl. Jenderal Soedirman No. 41, Purbalingga Tenggara, Purbalingga, Jawa
                    Tengah 53373</p>
            </div>
        </div>
    </div>
    <div class="copyrigt text-sm text-center bg-slate-50">
        <p class="py-4">&copy; <span id="copyright">
                <script>
                    document.getElementById('copyright').innerHTML = new Date().getFullYear();
                </script>
            </span> <span class="text-orange_light font-semibold">Kola</span><span
                class="text-primary font-semibold">Bora</span>. All
            Rights Reserved</p>
    </div>
</footer>
