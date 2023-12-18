@extends('layouts/header_footer')
@section('content')
<style>
    input:checked+label {
        border-radius: 1.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        background: linear-gradient(45deg, #b525cf, transparent);
        box-shadow: 10px;
    }
</style>
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
                Mau Pesan Konsul Apa di Edulink?
            </h1>
            <hr class="w-1/2 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                style="margin-top:10px;">
            <div class="mx-auto">
                <div class="text-xl text-center font-medium font-[Fredoka] text-white">
                    <div class="mb-6">
                        Pilih salah satu dari konsultasi di bawah ini
                    </div>
                </div>
            </div>
            <div id="portfolio-home"
                class="flex flex-col font-[Fredoka] lg:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                <form method="POST" style="height:500px" action="{{ route('save_pesan_konsul') }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-8">
                        <div class="w-72 h-36 place-content-center" style="height:400px">
                            <input class="hidden" id="radio_1" type="radio" name="radio" value="1" checked>
                            <label class="flex flex-col p-4 border-2 border-gray-400 rounded-3xl cursor-pointer h-36 place-content-center"
                                for="radio_1" style="height:400px">
                                <span class="text-xl font-semibold uppercase text-center text-white">Sekali Konsultasi</span>
                                <span class="text-4xl font-bold mt-2 text-center text-white">Rp. 25000 ,-</span>
                                <ul class="text-lg mt-2 text-center text-white">
                                    <li>Bimbingan Persiapan Kuliah sampai Diterima PTN.</li>
                                </ul>
                            </label>
                        </div>
                        <div class="w-72 h-36" style="height:400px">
                            <input class="hidden" id="radio_2" type="radio" name="radio" value="2">
                            <label class="flex flex-col p-4 border-2 border-gray-400 rounded-3xl cursor-pointer h-36 place-content-center"
                                for="radio_2" style="height:400px">
                                <span class="text-xl font-semibold uppercase text-center text-white">Per Semester</span>
                                <span class="text-4xl font-bold mt-2 text-center text-white">Rp. 75000 ,-</span>
                                <ul class="text-lg mt-2 text-center text-white">
                                    <li>Program 12 Bulan Exclusive. Jaminan Lolos</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center sm:space-x-6 pt-3 mt-2 aos-init aos-animate">
                        <button type="submit" onclick="my_modal_5.showModal()"
                            class="lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white">
                            Pesan Konsul
                        </button>
                    </div>
                </form>
            </div>
        </div>
</section>

<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="font-bold text-4xl text-center font-[Fredoka] text-transparent mt-4 bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
            Menuju ke Halaman Pembayaran</h3>
        <img class="w-72 mx-auto my-6" src="assets/images/laptop.png" />
        <div class="modal-action">
            <form method="dialog" class="mx-auto" action="">
                <a href="{{ $redirectRoute }}"
                    class="btn rounded-full font-[Fredoka] text-lg ease-in-out font-extrabold text-center transition bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white px-10 py-2">Bayar</a>
            </form>
        </div>
    </div>
</dialog>
@endsection

@section('jquery')
@endsection