<footer class="bg-gray-100">
    <!-- Disclaimer Section -->
    {{-- <div class="px-10 py-4 text-xs text-center bg-black text-white italic">
        Disclaimer: Politeknik Negeri Malang Intelektual tidak menjamin keakuratan informasi yang terdapat dalam Pangkalan Data Kekayaan Intelektual ini. Pembaharuan, Koreksi, atau perubahan terkini mungkin tidak disertakan. Disarankan untuk berkonsultasi dengan Konsultan kekayaan Intelektual terdaftar jika diperlukan pencarian menyeluruh terhadap merek atau interpretasi hasil pencarian. Pangkalan Data Kekayaan Intelektual ini hanya untuk tujuan informasi saja. Keputusan tidak boleh dibuat berdasarkan pencarian ini saja.
    </div> --}}

    <!-- Footer Content -->
    <div class="w-full px-10 md:px-6 py-6 grid md:grid-cols-3 gap-10 bg-black">
        <!-- Left Section -->
        <div class="grid gap-6">
            <img src="{{ asset('img/brantaLogo.png') }}" alt="Polinema Footer Logo" class="h-16 w-auto scale-500 pl-10">
            <font size="-2">
                <b>DINAS KESEHATAN KABUPATEN PASURUAN</b> <br>
                - Jl. Raya Raci km. 15, Jati,  <br>
                &nbsp; Masangan, Kec. Bangil, Pasuruan,  <br>
                &nbsp; East Java - Indonesia<br>
            </font>
        </div>

        <!-- Center Section -->
        <div class="grid gap-6">
            <div class="flex flex-col w-full">
                <div data-orientation="horizontal" role="none" class="shrink-0 bg-gray-300 h-[2px] w-full"></div>
                <div data-orientation="horizontal" role="none" class="shrink-0 bg-gray-300 h-[3px] w-1/3"></div>
            </div>
            <a href="https://www.instagram.com/promkeskab.pasuruan/" target="_blank">
                <div class="grid gap-1 cursor-pointer">
                    <h1 class="font-semibold hover:text-blue-500 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-brand-instagram">
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M16.5 7.5l0 .01"></path>
                        </svg>
                        Instagram
                    </h1>
                    <p class="text-xs">@promkeskab.pasuruan</p>
                </div>
            </a>
            <a href="https://www.facebook.com/people/Promkes-Kabupaten-Pasuruan/100046895376621/" target="_blank">
                <div class="grid gap-1 cursor-pointer">
                    <h1 class="font-semibold hover:text-blue-500 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-brand-facebook">
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                        Facebook
                    </h1>
                    <p class="text-xs">@Promkes Kabupaten Pasuruan</p>
                </div>
            </a>
            <a href="https://x.com/pemkabpasuruan_" target="_blank">
                <div class="grid gap-1 cursor-pointer">
                    <h1 class="font-semibold hover:text-blue-500 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-brand-twitter">
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                        </svg>
                        Twitter
                    </h1>
                    <p class="text-xs">@pemkabpasuruan_</p>
                </div>
            </a>
        </div>

        <!-- Right Section -->
        <div class="grid gap-2 ">
            <div class="flex flex-col w-full">
                <div data-orientation="horizontal" role="none" class="shrink-0 bg-gray-300 h-[2px] w-full"></div>
                <div data-orientation="horizontal" role="none" class="shrink-0 bg-gray-300 h-[3px] w-1/3 mb-5"></div>
            </div>
            <a href="https://dinkes.pasuruankab.go.id" target="_blank">
                <div class="grid gap-1 cursor-pointer">
                    <h1 class="font-semibold hover:text-blue-500 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-link">
                            <path d="M9 15l6 -6"></path>
                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                        </svg>
                        Portal Dinkes Kab. Pasuruan
                    </h1>
                </div>
            </a>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center py-6 px-10 border-t text-sm font-light bg-black">
        Copyright © {{ date('Y') }} Dinas Kesehatan Kabupaten Pasuruan. All rights reserved.
    </div>
</footer>