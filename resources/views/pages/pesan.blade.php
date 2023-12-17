@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 "
    style="background-image: url({{ asset('assets/images/bubble1.png') }});background-size: cover;">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden">
        <div class="col-span-12 lg:col-span-6 sm:hidden mb-8">
            <div class="w-full"><img src="/_nuxt/img/buy-and-trade.69b9f7b.webp" alt="" class="mt-4 sm:-mt-4"></div>
        </div>
        <div data-aos="zoom-out-up" data-aos-duration="1000"
            class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init">
            <h1
                class="font-extrabold text-transparent text-center pb-2 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                Mau Pesan Program Edulink?
            </h1>
            <hr class="w-1/2 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                style="margin-top:10px;">
            <div class="mx-auto">
                <div class="text-xl text-center font-medium font-[Fredoka] text-white">
                    <div class="mb-6">
                        Pilih salah satu dari program di bawah ini
                    </div>
                </div>
            </div>
            <div id="portfolio-home"
                class="flex flex-col font-[Fredoka] lg:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                <div id="card1" class="max-w-lg w-full lg:max-w-[48%] lg:flex mx-4 h-[15rem]">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('assets/images/study2.jpg')" title="Woman holding a mug"></div>
                    <div
                        class="border-r lg:w-2/3 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div
                                class="font-bold text-3xl mb-2 text-transparent bg-clip-text bg-gradient-to-r from-purple-700 to-pink-600">
                                Pesan E-Course SMA</div>
                            <p class="text-indigo-900 text-base">Dapatkan Penawaran Menarik untuk pembelian kursus
                                pertama
                                kali!</p>
                        </div>
                        <div class="flex items-center">
                            <a href="/pesankursus"
                                class="px-4 rounded-xl shadow-xl py-2 bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white">
                                Pesan Kursus
                            </a>
                        </div>
                    </div>
                </div>
                <div id="card2" class="max-w-lg w-full lg:max-w-[48%] lg:flex mx-4 mb-8 h-[15rem]">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('assets/images/study1.jpg')" title="Woman holding a mug"></div>
                    <div
                        class="border-r lg:w-2/3 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div
                                class="font-bold text-3xl mb-2 text-transparent bg-clip-text bg-gradient-to-r from-purple-700 to-pink-600">
                                Pesan Konsultasi</div>
                            <p class="text-indigo-900 text-base">Dapatkan Penawaran Menarik untuk pembelian kursus
                                pertama
                                kali!</p>
                        </div>
                        <div class="flex items-center">
                            <a href="/pesankonsul"
                                class="px-4 rounded-xl shadow-xl py-2 bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white">
                                Pesan Konsul
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

@section('jquery')
@endsection