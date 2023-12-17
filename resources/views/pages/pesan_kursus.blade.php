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
                Mau Pesan Kursus Apa di Edulink?
            </h1>
            <hr class="w-1/2 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                style="margin-top:10px;">
            <div class="mx-auto">
                <div class="text-xl text-center font-medium font-[Fredoka] text-white">
                    <div class="mb-6">
                        Pilih salah satu dari mata pelajaran di bawah ini
                    </div>
                </div>
            </div>
            <div id="portfolio-home"
                class="flex flex-col font-[Fredoka] lg:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                <form id="form1" method="POST" action="{{ route('save.pesan.kursus')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-indigo-950 border-4 border-violet-600 px-10 py-10 rounded-xl shadow-xl">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Pilihan Bidang
                                </label>
                                <select id="bidang" name="bidang"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($bidang as $b)
                                    <option value="{{$b->idbidang}}">{{$b->namabidang}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Pilihan Mata Pelajaran
                                </label>
                                <select id="mapel" name="mapel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                    for="mentor">
                                    Pilihan Mentor
                                </label>
                                <select
                                    class="appearance-none block w-full bg-gray-200 text-indigo-900 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="mentor" name="mentor">
                                </select>
                                <p class="text-gray-600 text-xs italic">Pilih Mentor Profesional untuk Kursus Onlinemu!
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                    for="jadwal">
                                    Pilih Jadwal Kursus
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-indigo-900 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="jadwal" name="jadwal">
                                        <option value="Senin, Rabu, Jumat 08:00 - 09:00 WIB">Senin, Rabu, Jumat 08:00 - 09:00 WIB</option>
                                        <option value="Selasa, Kamis, Sabtu 08:00 - 09:00 WIB">Selasa, Kamis, Sabtu 08:00 - 09:00 WIB</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-black">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                    for="harga">
                                    Harga Kursus
                                </label>
                                <select
                                    class="appearance-none block w-full bg-gray-200 text-indigo-900 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="harga" name="harga">
                                </select>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                    for="via">
                                    Pilih Via Kursus
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-indigo-900 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="via" name="via">
                                        <option value="Google Meet">Google Meet</option>
                                        <option value="Zoom Meeting">Zoom Meeting</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-black">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full my-5 mb-6 md:mb-0">
                            <button class="btn btn-primary w-full" onclick="my_modal_5.showModal()" type="submit"> Pesan Sekarang!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>

<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
      <h3 class="font-bold text-4xl text-center font-[Fredoka] text-transparent mt-4 bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Menuju ke Halaman Pembayaran</h3>
        <img class="w-72 mx-auto my-6" src="assets/images/laptop.png" />
      <div class="modal-action">
        <form method="dialog" class="mx-auto" action="">
          <a href="{{ route('bayar.kursus')}}" class="btn rounded-full font-[Fredoka] text-lg ease-in-out font-extrabold text-center transition bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white px-10 py-2">Bayar</a>
        </form>
      </div>
    </div>
  </dialog>
@endsection

@section('jquery')
<script>
    $( document ).ready(function() {
    getMatkul($('#bidang').val());
});

$('#bidang').on("change", function(){
    getMatkul($(this).val());
});

function getMatkul(bidang){
    $.ajax({
        type: "GET",
        dataType:'json',
        url: "pesan/get-bidang",
        data: {
            'bidang':bidang
        },
        cache: false,
        success: function(data){
            if(data.success){
                if(data.data){
                    var $el = $("#mapel");
                    $el.empty();
                    $.each(data.data, function(key,value) {
                        $el.append($("<option></option>").attr("value", value.id).text(value.name));
                    });
                }
            }else{
                alert(data.message);
            }
        }
    });
}


$( document ).ready(function() {
    getMentor($('#bidang').val());
});

$('#bidang').on("change", function(){
    getMentor($(this).val());
});

function getMentor(bidang){
    $.ajax({
        type: "GET",
        dataType:'json',
        url: "pesan/get-mentor",
        data: {
            'bidang':bidang
        },
        cache: false,
        success: function(data){
            if(data.success){
                if(data.data){
                    var $el = $("#mentor");
                    $el.empty();
                    $.each(data.data, function(key,value) {
                        $el.append($("<option></option>").attr("value", value.id).text(value.name));
                    });
                }
            }else{
                alert(data.message);
            }
        }
    });
}

$( document ).ready(function() {
    getHarga($('#bidang').val());
});

$('#mapel').on("change", function(){
    getHarga($(this).val());
});

function getHarga(mapel){
    $.ajax({
        type: "GET",
        dataType:'json',
        url: "pesan/get-harga",
        data: {
            'mapel':mapel
        },
        cache: false,
        success: function(data){
            if(data.success){
                if(data.data){
                    var $el = $("#harga");
                    $el.empty();
                    $.each(data.data, function(key,value) {
                        $el.append($("<option></option>").attr("value", value.id).text(value.name));
                    });
                }
            }else{
                alert(data.message);
            }
        }
    });
}

$(document).ready(function() {
    $('#form1').submit(function(e) {
        e.preventDefault();

        var bidang = $('#bidang').val();
        var mapel = $('#mapel').val();
        var mentor = $('#mentor').val();
        var jadwal = $('#jadwal').val();
        var via = $('#via').val();

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "{{ route('save.pesan.kursus') }}",
            data: {
                'bidang': bidang,
                'mapel': mapel,
                'mentor': mentor,
                'jadwal': jadwal,
                'via': via,
                '_token': '{{ csrf_token() }}',
            },
            cache: false,
            success: function(data) {
                if (data.success) {
                    // Show the custom modal for payment notification
                    $('#my_modal_5').removeClass('hidden');
                } else {
                    alert(data.message);
                }
            }
        });
    });

    // Close the modal when the close button is clicked
    $('#closeModal').click(function() {
        $('#my_modal_5').addClass('hidden');
    });
});
</script>
@endsection