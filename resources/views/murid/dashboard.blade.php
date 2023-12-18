@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 "
    style="background-image: url({{ asset('assets/images/bubble1.png') }});background-size: cover;">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden">
        <div class="flex gap-8">
            <div
                class="w-1/3 h-96 bg-[#1f2652] font-[Fredoka] p-5 mt-20 rounded-xl bg-opacity-60 backdrop-filter backdrop-blur-lg">
                <div class="header-card flex justify-between font-semibold">
                    <div class="text-2xl text-white">Akun saya</div>
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <a href="/dashboard_murid"
                        class="py-3 px-8 text-white {{ preg_match('/dashboard_murid/', Route::current()->uri) == 1 ? 'bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white rounded-xl shadow-xl': '' }}">
                        <i class="fa fa-user text-white mr-5"></i>Profil Saya
                    </a>
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <a href="/akses_matapelajaran_murid"
                        class="py-3 px-8 text-white {{ preg_match('/akses_matapelajaran_murid/', Route::current()->uri) == 1 ? 'bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white rounded-xl shadow-xl': '' }}">
                        <i class="fa fa-paper-plane text-white mr-5"></i>Akses Mata Pelajaran
                    </a>
                </div>
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <a href="/akses_konsultasi_murid"
                        class="py-3 px-8 text-white {{ preg_match('/akses_konsultasi_murid/', Route::current()->uri) == 1 ? 'bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white rounded-xl shadow-xl': '' }}">
                        <i class="fa fa-handshake-o text-white mr-5"></i>Akses Konsultasi
                    </a>
                </div>
            </div>

            <div
                class="w-2/3 bg-[#1f2652] font-[Fredoka] p-5 mt-20 rounded-xl bg-opacity-60 backdrop-filter backdrop-blur-lg">
                <div class="header-card text-center font-semibold">
                    <div class="text-2xl text-white text-center">Halo, {{$muridData->namamurid}}</div>
                </div>
                <form class="p-3" method="POST" action="{{ route('simpan.murid')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="header-card text-center">
                        <div class="text-lg text-white text-center">Data profil dan pembelian Anda disemua program
                            EduLink</div>
                    </div>
                    <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                        <div class="flex flex-row items-center">
                            <div class="w-full mr-2">
                                <label class="text-white px-4 py-0 mb-[-1rem]">Nama Lengkap</label>
                                <input class="form-control rounded-2xl m-3 py-3 px-4 w-full" name="namamurid"
                                    value="{{$muridData->namamurid}}" />
                            </div>
                            <div class="w-full mr-2">
                                <label class="text-white px-4 py-0 mb-[-1rem]">Asal Sekolah</label>
                                <input class="form-control rounded-2xl m-3 py-3 px-4 w-full" name="namasekolah"
                                    value="{{$muridData->namasekolah}}" />
                            </div>
                        </div>
                        <div class="flex flex-row items-center">
                            <div class="w-full mr-2">
                                <label class="text-white px-4 py-0 mb-[-1rem]">Gender</label>
                                <select class="form-control rounded-2xl m-3 py-3 px-4 w-full" name="gender">
                                    <option value="Laki-laki" @if($muridData->gender === 'Laki-laki') selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if($muridData->gender === 'Perempuan') selected @endif>Perempuan</option>
                                    <option value="other" @if($muridData->gender === 'other') selected @endif>Other</option>
                                </select>
                            </div>
                            <div class="w-full mr-2">
                                <label class="text-white px-4 py-0 mb-[-1rem]">Tanggal Lahir</label>
                                <input type="date" class="form-control text-left rounded-2xl m-3 py-3 w-full" name="tanggallahir"
                                    value="{{$muridData->tanggallahir}}" />
                            </div>
                        </div>
                        <div class="flex flex-row items-center">
                            <div class="w-full mr-2">
                                <label class="text-white px-4 py-0 mb-[-1rem]">Kelas</label>
                                <input type="number" class="form-control rounded-2xl m-3 py-3 px-4 w-full" name="kelas"
                                    value="{{$muridData->kelas}}" />
                            </div>
                            <div class="w-full mr-2">
                                <label class="text-white px-4 py-0 mb-[-1rem]">Bidang</label>
                                <select class="form-control rounded-2xl m-3 py-3 px-4 w-full" name="idbidang">
                                    <option value="1" @if($muridData->idbidang === 1) selected @endif>IPA</option>
                                    <option value="2" @if($muridData->idbidang === 2) selected @endif>IPS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-content divide-y text-right mr-4 mt-5">
                        <button type="submit" class="btn btn-info py-2 px-4 rounded-full">Simpan</button>
                    </div>
                </form>

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