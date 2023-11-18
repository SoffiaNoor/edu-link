@extends('layouts/header_footer')
<style>
    .map-container {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
        /* 16:9 aspect ratio - adjust this based on your map's aspect ratio */
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
@section('content')
<section class="w-full min-h-screen py-24 bg-black">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
        <div class="container mx-auto place-content-center">
            <div data-aos="zoom-out-up" data-aos-duration="1000"
                class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 lg:px-4 aos-init"="">
                <h2
                    class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 pl-6 lg:pl-0 pt-20 lg:pt-0 xl:pr-12"="">
                    Kontak
                </h2>
            </div>
            <div class="grid-cols-1 grid lg:grid-cols-2 gap-4">
                <div class="mt-4 xl:mt-5 space-y-6 px-4 lg:px-4" data-aos="zoom-out-up" data-aos-duration="1000">
                    <p class="font-semibold text-white sm:text-xl">Tinggalkan pesan disini</p>
                    <form action="{{ route('kontak.store') }}" class="space-y-8" method="POST">
                        @csrf
                        <div class="flex flex-col md:flex-row">
                            <div class="md:mr-2 mb-2 md:mb-0 w-full">
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-white dark:text-gray-300">First
                                    Name</label>
                                <input type="text" name="first_name" id="first_name"
                                    class="input input-bordered input-warning w-full max-w-xs" placeholder="first"
                                    required>
                            </div>
                            <div class="md:ml-2 w-full">
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Last
                                    Name</label>
                                <input type="text" name="last_name" id="last_name"
                                    class="input input-bordered input-warning w-full max-w-xs" placeholder="last"
                                    required>
                            </div>
                        </div>
                        <div class="w-full">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email"
                                class="input input-bordered input-warning w-full max-w-xl"
                                placeholder="example@gmail.com" required>
                        </div>
                        <div class="w-full">
                            <label for="nomor_wa"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Nomor
                                Telepon/Whatsapp</label>
                            <input type="text" name="nomor_wa" id="nomor_wa"
                                class="input input-bordered input-warning w-full max-w-xl" placeholder="+62 000 000 000"
                                required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="pesan"
                                class="block mb-2 text-sm font-medium text-white dark:text-gray-400">Pesan</label>
                            <textarea name="pesan" id="pesan" class="textarea textarea-warning w-full"
                                placeholder="Tinggalkan pesan disini" required></textarea>
                        </div>
                        <button type="submit"
                            class="btn btn-warning w-full bg-[#FFE200] font-extrabold text-black hover:bg-[#c79305] border-none duration-500">SUBMIT</button>
                    </form>
                </div>
                <div>
                    <div class="grid gap-4 md:grid-cols-1">
                        <div class="grid gap-4">
                            <div class="max-w-2xl mx-auto my-8 space-y-4 text-center xl:col-span-2 xl:text-left"
                                data-aos="zoom-out-up" data-aos-duration="1000">
                                <h2 class="lg:text-2xl text-2xl text-white font-extrabold sm:pr-8 xl:pr-12">
                                    Hubungi kami sekarang</h2>
                                <p class="mb-8 lg:mb-16 font-semibold text-white sm:text-xl"><i
                                        class="fab fa-whatsapp text-white text-2xl mr-2" aria-hidden="true"></i>081 938
                                    64 65 60</p>
                                <p class="mb-8 lg:mb-16 font-semibold text-white sm:text-xl"><i
                                        class="fab fa-instagram text-white text-2xl mr-2"
                                        aria-hidden="true"></i>studiodesign1017</p>
                                <p class="mb-8 lg:mb-16 font-semibold text-white sm:text-xl"><i
                                        class="fa fa-envelope text-white text-2xl mr-2"
                                        aria-hidden="true"></i>mahendrataditya@gmail.com</p>
                                <p class="mb-8 lg:mb-16 font-semibold text-white sm:text-xl"><i
                                        class="fa fa-caret-down text-white text-2xl mr-2" aria-hidden="true"></i>Klik
                                    button di bawah ini untuk konsultasi desain</p>
                                <a href="https://api.whatsapp.com/send?phone=6281938646560"
                                    class="btn btn-warning w-full bg-[#FFE200] font-extrabold text-black hover:bg-[#c79305] border-none duration-500">Konsultasi
                                    Desain
                                </a>
                                <div class="map-container">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7914.8693808254975!2d112.782346!3d-7.304963000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7faf5f5654195%3A0x240bfb7744077396!2sJunior%20High%20School%20State%2052%20of%20SURABAYA!5e0!3m2!1sen!2sid!4v1690790159441!5m2!1sen!2sid"
                                        width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('jquery')
<script>

</script>
@endsection