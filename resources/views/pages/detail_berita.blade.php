@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 bg-black">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
        <div data-aos="zoom-out-up" data-aos-duration="1000"
            class="col-span-12 lg:col-span-6 mt-20 xl:mt-20 space-y-6 px-4 aos-init"="">
            <h2 class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 xl:pr-12"="">
                Detail Berita
            </h2>
            <hr class="w-48 h-2 my-4 bg-[#FFE200] border-0 rounded md:my-10">
            <div class="m-5">
                <a rel="noopener noreferrer" href="{{ url()->previous() }}"
                    class="bg-[#FFE200] hover:bg-[#FFE200] text-black font-bold py-2 px-4 rounded-full p-1 hover:underline"><i
                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            </div>
            <div class="flex flex-col max-w-6xl mx-auto overflow-hidden rounded object-cover" data-aos="zoom-out-up"
                data-aos-duration="1000">
                @if($berita->photo)
                <img src="{{ asset('assets/img/berita/'.$berita->photo) }}" alt=""
                    class="w-full object-cover h-60 sm:h-96 bg-white">
                @else
                <span>No image found!</span>
                @endif
                <div
                    class="p-6 pb-8 m-4 mx-auto -mt-16 space-y-6 lg:max-w-2xl sm:px-10 sm:mx-12 text-black lg:rounded-md bg-[#FFE200]">
                    <div class="space-y-2">
                        <a rel="noopener noreferrer" href="#"
                            class="inline-block text-2xl font-extrabold sm:text-4xl">{{ $berita->title }}</a>
                        @if($tagBerita)
                        <div class="flex flex-wrap space-x-2 text-sm pt-4 mt-5 lg:pt-15 text-black">
                            <a rel="noopener noreferrer" href="#"
                                class="bg-black hover:bg-[#1c1c1c] text-white font-bold py-2 px-4 rounded-full p-1 hover:underline">{{
                                $tagBerita->name }}</a>
                            <a rel="noopener noreferrer" href="#"
                                class="bg-black hover:bg-[#1c1c1c] text-white font-bold py-2 px-4 rounded-full p-1 hover:underline">{{
                                $tagBerita2->name }}</a>
                        </div>
                        @endif
                        <p class="text-sm text-black">by
                            <a href="#" target="_blank" rel="noopener noreferrer" class="hover:underline text-black">
                                <span>{{ $berita->author }}</span>
                            </a>on
                            <time datetime="2021-02-12 15:34:18-0200">Feb 12th 2021</time>
                        </p>
                    </div>
                </div>
            </div>
            <p class="paragraph text-white lg:text-xl text-justify "="">{{ $berita->description }}
            </p>
        </div>
    </div>
</section>
@endsection

@section('jquery')
<script>

</script>
@endsection