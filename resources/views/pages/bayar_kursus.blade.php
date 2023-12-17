@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 "
    style="background-image: url({{ asset('assets/images/bubble1.png') }});background-size: cover;">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden">
        <div data-aos="zoom-out-up" data-aos-duration="1000"
            class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init">
            <h1
                class="font-extrabold text-transparent text-center pb-2 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                Kirim Bukti Pembayaran Anda di sini
            </h1>
            <hr class="w-1/2 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                style="margin-top:10px;">
            <form action="{{ route('buktiBayarKursus') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6" style="text-align:-webkit-center">
                    <div class="w-full px-10">
                        <label class="block uppercase font-[Fredoka] tracking-wide text-center text-white text-xs font-bold mb-2" for="buktibayar">
                            Unggah Bukti Pembayaran (Foto/Scan)
                        </label>
                        <input type="file" id="buktibayar" name="buktibayar"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3 text-center">
                        <button type="submit" onclick="my_modal_5.showModal()"
                            class="bg-blue-500 text-white font-extrabold rounded-lg font-[Fredoka] px-4 py-2 hover:bg-blue-700 focus:outline-none rounded-full focus:border-blue-700 focus:ring focus:ring-blue-200">
                            Kirim Bukti Pembayaran
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
      <h3 class="font-bold text-4xl text-center font-[Fredoka] text-transparent mt-4 bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Terima kasih telah melakukan pembayaran <i class="fa fa-heart text-pink-800" aria-hidden="true"></i></h3>
        <img class="w-72 mx-auto my-6" src="assets/images/laptop.png" />
      <div class="modal-action">
        <form method="dialog" class="mx-auto" action="">
          <a href="/dashboard_murid" class="btn rounded-full font-[Fredoka] text-lg ease-in-out font-extrabold text-center transition bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white px-10 py-2">Dashboard Murid</a>
        </form>
      </div>
    </div>
  </dialog>
@endsection

@section('jquery')
<script>
    $(document).ready(function () {
        var showModal = {{ json_encode($modal ?? '') }};
        
        if (showModal === 'show') {
            $('#buktibayarForm').on('submit', function (e) {
                e.preventDefault(); 
                
                var form = $(this);
                var formData = new FormData(form[0]);
                
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.success) {
                            $('#myModal').addClass('flex').removeClass('hidden');

                            $('#closeModal').on('click', function () {
                                $('#myModal').addClass('hidden').removeClass('flex');
                            });

                            $(document).mouseup(function (e) {
                                var modal = $('#myModal');
                                if (!modal.is(e.target) && modal.has(e.target).length === 0) {
                                    modal.addClass('hidden').removeClass('flex');
                                }
                            });
                        }
                    },
                    error: function (error) {
                        console.error('Error uploading file:', error);
                    }
                });
            });
        }
    });
</script>
@endsection