@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 "
    style="background-image: url({{ asset('assets/images/bubble1.png') }});background-size: cover;">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
        <div class="col-span-12 lg:col-span-6 sm:hidden mb-8"="">
            <div class="w-full"><img src="/_nuxt/img/buy-and-trade.69b9f7b.webp" alt="" class="mt-4 sm:-mt-4"></div>
        </div>
        <div data-aos="zoom-out-up" data-aos-duration="1000"
            class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init"="">
            <h1
                class="font-extrabold text-transparent text-center pb-2 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                Konsultasi
            </h1>
            <hr class="w-1/2 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                style="margin-top:10px;">
            <div class="text-justify mx-auto">
                <div class="text-xl font-medium font-[Fredoka] text-white">
                    <div class="mb-6">
                        Proses persiapan dan pendaftaran PTN selalu berubah-ubah dan itu sangat membingungkan. Belum
                        lagi
                        apakah kita sudah tepat dalam memilih jurusan yang dituju. Maka dari itu, kami hadirkan
                        Konsultan
                        Edulink untuk membantu mereview Rapot kamu. Hanya di Edulink kamu akan mendapatkan saran
                        terperinci
                        untuk mengarahkan perencanaan kuliahmu.
                    </div>
                    <i class="fa fa-check text-xl p-5 mr-2" aria-hidden="true"><span
                            class="ml-5 bg-gradient-to-r from-fuchsia-600 to-violet-800 py-2 px-4 rounded-full font-[Fredoka]">
                            Rapot akan direview, baik pola peningkatan nilai, minat,
                            dan keperluan lainnya.</span></i>
                    <br>
                    <i class="fa fa-check text-xl p-5 mr-2" aria-hidden="true"><span
                            class="ml-5 bg-gradient-to-r from-fuchsia-600 to-violet-800 py-2 px-4 rounded-full font-[Fredoka]">
                            Pembahasan detail untuk persiapan yang diperlukan sesuai minat.</span></i>
                </div>
            </div>
            <div class="max-w-screen-xl mx-auto px-4 m sm:px-6 lg:px-0 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12"
                data-aos="zoom-in-up">
                <h1 style="padding-top:3rem"
                    class="font-extrabold text-transparent text-center pb-10 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Program Mentoring </h1>
                <hr class="w-72 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                    style="margin-top:-20px;">
                <div id="portfolio-home"
                    class="flex flex-col font-[Fredoka] flex-wrap md:py-6 sm:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                    <div class="mx-auto" data-aos="zoom-in">
                        <div class="relative flex flex-col h-full bg-indigo-700 shadow-lg rounded-lg shadow-lg p-5">
                            <div class="absolute top-0 right-5">
                                <div
                                    class="text-xs inline-flex font-semibold bg-green-100 text-green-600 rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2">
                                    Most Popular</div>
                            </div>
                            <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                                <div class="mb-2">
                                    <svg width="42" height="44" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <linearGradient x1="27.515%" y1="0%" x2="59.658%" y2="100%" id="b">
                                                <stop stop-color="#5EEAD4" offset="0%" />
                                                <stop stop-color="#2DD4BF" offset="100%" />
                                            </linearGradient>
                                            <linearGradient x1="67.338%" y1="82.466%" x2="4.807%" y2="15.884%" id="c">
                                                <stop stop-color="#F0FDFA" stop-opacity=".12" offset="0%" />
                                                <stop stop-color="#F0FDFA" offset="100%" />
                                            </linearGradient>
                                            <linearGradient x1="47.38%" y1="24.752%" x2="58.769%" y2="81.336%" id="e">
                                                <stop stop-color="#0F766E" stop-opacity=".24" offset="0%" />
                                                <stop stop-color="#0D9488" stop-opacity="0" offset="100%" />
                                            </linearGradient>
                                            <path id="a" d="M25.015 44 0 29.437 10.654 0l25.17 4.338L42 26.648z" />
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <mask id="d" fill="#fff">
                                                <use xlink:href="#a" />
                                            </mask>
                                            <use fill="url(#b)" xlink:href="#a" />
                                            <path
                                                d="m10.281-.584 23.651 20.647 14.84 11.177 7.884-14.748-.927-9.78-11.44-7.296-8.81-3.26L20.02-4.62 10.281-.584Z"
                                                fill="url(#c)" style="mix-blend-mode:overlay" mask="url(#d)" />
                                            <path
                                                d="M43.015 17.16-1.969 29.974l6.647 11.579c6.184 3.808 9.481 5.867 9.894 6.175.412.31 7.729.31 21.95 0l7.884-9.88-1.391-20.688Z"
                                                fill="url(#e)" style="mix-blend-mode:multiply" mask="url(#d)" />
                                            <path fill-opacity=".32" fill="#F0FDFA" style="mix-blend-mode:overlay"
                                                mask="url(#d)"
                                                d="m36.18 3.3-2.17 16.714L23.625 48.18l20.15-5.107 5.89-11.297 1.085-18.881z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="font-extrabold mb-1"><span class="text-4xl text-indigo-50">1x Konsultasi</span>
                                </div>
                                <div class="text-indigo-200">Bimbingan Persiapan Kuliah sampai Diterima PTN.
                                </div>
                            </header>
                            <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Review Rapot 1 - 5 Semester dan Rekomendasi Jurusan</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Persiapan Menyeluruh. Saran Kelengkapan berbagai Jalur PTN</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span class="font-bold text-xl">Rp 25.000</span>
                                </li>
                            </ul>
                            <button
                                class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-green-400 hover:bg-green-500 text-white focus:outline-none focus-visible:ring-2">
                                Pesan Konsul
                            </button>
                        </div>
                    </div>
                    <div class="mx-auto mb-8" data-aos="zoom-in">
                        <div class="relative flex flex-col h-full bg-gradient-to-r from-fuchsia-600 to-violet-800 shadow-lg rounded-lg shadow-lg p-5">
                            <div class="absolute top-0 right-5">
                                <div
                                    class="text-xs inline-flex font-semibold bg-green-100 text-green-600 rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2">
                                    Expert</div>
                            </div>
                            <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                                <div class="mb-2">
                                    <svg width="42" height="44" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <linearGradient x1="27.515%" y1="0%" x2="59.658%" y2="100%" id="b">
                                                <stop stop-color="#5EEAD4" offset="0%" />
                                                <stop stop-color="#2DD4BF" offset="100%" />
                                            </linearGradient>
                                            <linearGradient x1="67.338%" y1="82.466%" x2="4.807%" y2="15.884%" id="c">
                                                <stop stop-color="#F0FDFA" stop-opacity=".12" offset="0%" />
                                                <stop stop-color="#F0FDFA" offset="100%" />
                                            </linearGradient>
                                            <linearGradient x1="47.38%" y1="24.752%" x2="58.769%" y2="81.336%" id="e">
                                                <stop stop-color="#0F766E" stop-opacity=".24" offset="0%" />
                                                <stop stop-color="#0D9488" stop-opacity="0" offset="100%" />
                                            </linearGradient>
                                            <path id="a" d="M25.015 44 0 29.437 10.654 0l25.17 4.338L42 26.648z" />
                                        </defs>
                                        <g fill="none" fill-rule="evenodd">
                                            <mask id="d" fill="#fff">
                                                <use xlink:href="#a" />
                                            </mask>
                                            <use fill="url(#b)" xlink:href="#a" />
                                            <path
                                                d="m10.281-.584 23.651 20.647 14.84 11.177 7.884-14.748-.927-9.78-11.44-7.296-8.81-3.26L20.02-4.62 10.281-.584Z"
                                                fill="url(#c)" style="mix-blend-mode:overlay" mask="url(#d)" />
                                            <path
                                                d="M43.015 17.16-1.969 29.974l6.647 11.579c6.184 3.808 9.481 5.867 9.894 6.175.412.31 7.729.31 21.95 0l7.884-9.88-1.391-20.688Z"
                                                fill="url(#e)" style="mix-blend-mode:multiply" mask="url(#d)" />
                                            <path fill-opacity=".32" fill="#F0FDFA" style="mix-blend-mode:overlay"
                                                mask="url(#d)"
                                                d="m36.18 3.3-2.17 16.714L23.625 48.18l20.15-5.107 5.89-11.297 1.085-18.881z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="font-extrabold mb-1"><span class="text-4xl text-indigo-50">3 Tahun Konsultasi</span>
                                </div>
                                <div class="text-indigo-200">Bimbingan Persiapan Kuliah sampai Diterima PTN.
                                </div>
                            </header>
                            <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Program 12 Bulan Exclusive. Jaminan Lolos</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Persiapan Menyeluruh. Saran Kelengkapan berbagai Jalur PTN</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                        viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>Program Review Rapot oleh Konsultan dan Rekomendasi
                                        Jurusan.</span>
                                </li>
                            </ul>
                            <button
                                class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-green-400 hover:bg-green-500 text-white focus:outline-none focus-visible:ring-2">
                                Pesan Konsul
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(auth()->check())
    @else
    <div 
        class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center sm:space-x-6 pt-3 mt-2 aos-init aos-animate">
        <a class="lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white"
            href="{{url('/login')}}">
            Pesan Kursus
        </a>
    </div>
    @endif
</section>
@endsection

@section('jquery')
<script>

</script>
@endsection