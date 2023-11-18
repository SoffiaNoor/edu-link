@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 bg-black">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
        <div class="container px-6 py-12 mx-auto">
            <div class="grid items-center gap-4 xl:grid-cols-1 text-center">
                <div
                    class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center sm:space-x-6 pt-3 mt-2 aos-init aos-animate">
                    <blockquote data-aos="zoom-out-up" data-aos-duration="1000"
                        class="lg:text-5xl font-semibold italic text-center pt-24 lg:pb-20 text-white">
                        <a href="#"
                            class="before:block before:absolute before:-inset-2 before:-skew-y-3 p-6 before:bg-[#FFE200] relative inline-block">
                            <span class="lg:text-5xl text-3xl relative text-black font-extrabold">"Terima Kasih atas
                                Dukungan Anda"</span>
                        </a>
                    </blockquote>
                </div>
                <hr data-aos="zoom-out-up" data-aos-duration="1000" class="w-56 h-2 mx-auto bg-[#FFE200] rounded">
                <p data-aos="zoom-out-up" data-aos-duration="1000"
                    class="paragraph text-white lg:text-xl text-center p-10">Kami sangat berterima kasih atas dukungan
                    dan
                    kepercayaan Anda. Kontribusi Anda sangat berarti bagi kami dan akan membantu kami terus berkembang
                    dan mencapai misi kami. Bersama-sama, kita bisa membuat perbedaan dan menciptakan masa depan yang
                    lebih baik.</p>
                <p class="underline underline-offset-8 font-extrabold text-[#FFE200] lg:text-xl text-center p-10"> 1017 Studios </p>
                <div data-aos="zoom-out-up" data-aos-duration="1000"
                    class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center sm:space-x-6 pt-3 mt-2 aos-init aos-animate">
                    <a class="lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-[#FFE200] text-black"
                        href="{{url('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Kembali
                    </a>
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