@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 "
    style="background-image: url({{ asset('assets/images/bubble1.png') }});background-size: cover;">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden">
        <div class="flex gap-8">
            <div
                class="w-1/3 h-1/2 bg-[#1f2652] font-[Fredoka] p-5 mt-20 rounded-xl bg-opacity-60 backdrop-filter backdrop-blur-lg">
                <div class="header-card flex justify-between font-semibold">
                    <div class="text-2xl text-white">Akun saya</div>
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <a href="/dashboard"
                        class="py-3 px-8 text-white {{ preg_match('/dashboard/', Route::current()->uri) == 1 ? 'bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white rounded-xl shadow-xl': '' }}">
                        <i class="fa fa-user text-white mr-5"></i>Profil Saya
                    </a>
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <a href="/akses_matapelajaran"
                        class="py-3 px-8 text-white {{ preg_match('/akses_matapelajaran/', Route::current()->uri) == 1 ? 'bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white rounded-xl shadow-xl': '' }}">
                        <i class="fa fa-paper-plane text-white mr-5"></i>Akses Mata Pelajaran
                    </a>
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <div
                        class="py-3 px-8 text-white {{ preg_match('/akses_konsultasi/', Route::current()->uri) == 1 ? 'bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white rounded-xl shadow-xl': '' }}">
                        <i class="fa fa-handshake-o text-white mr-5"></i>Akses Konsultasi
                    </div>
                </div>
            </div>
            <div
                class="w-2/3 bg-[#1f2652] font-[Fredoka] p-5 mt-20 rounded-xl bg-opacity-60 backdrop-filter backdrop-blur-lg">
                <div class="header-card text-center font-semibold">
                    <div class="text-2xl text-white text-center">Halo, {{$user->name}}</div>
                </div>
                <div class="header-card text-center">
                    <div class="text-lg text-white text-center">Data profil dan pembelian Anda disemua program EduLink
                    </div>
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <label class="text-white px-4 py-0 mb-[-1rem]">Nama Lengkap</label>
                    <input class="form-control rounded-2xl m-3 py-3 px-4" value="{{$user->name}}" />
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <label class="text-white px-4 py-0 mb-[-1rem]">Asal Sekolah</label>
                    <input class="form-control rounded-2xl m-3 py-3 px-4" value="" />
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <label class="text-white px-4 py-0 mb-[-1rem]">Gender</label>
                    <input class="form-control rounded-2xl m-3 py-3 px-4" value="" />
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <label class="text-white px-4 py-0 mb-[-1rem]">Tanggal Lahir</label>
                    <input class="form-control rounded-2xl m-3 py-3 px-4" value="" />
                </div>
                <div class="card-content divide-y text-right mr-4 mt-5">
                    <div class="btn btn-info py-2 px-4 rounded-full">Simpan</div>
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