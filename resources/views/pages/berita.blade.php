@extends('layouts/header_footer')
@section('content')

<section class="w-full min-h-screen py-24 bg-black">
  <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
    <div class="container mx-auto place-content-center">
      <div data-aos="zoom-out-up" data-aos-duration="1000"
        class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 lg:px-4 aos-init"="">
        <h2 class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 pl-6 lg:pl-0 pt-20 lg:pt-0 xl:pr-12"="">
          Berita
        </h2>
      </div>
      <div class="py-10" data-aos="zoom-out-up" data-aos-duration="1000">
        <div class="flex flex-wrap justify-around">
          @foreach ($berita as $b)
          <div class="flex flex-col gap-5 w-full sm:w-1/2 md:w-1/2 xl:w-1/2 p-4">
            <div
              class="card lg:w-100 rounded-none bg-white border-solid border-4 border-white duration-300 hover:scale-105 ease-in-out hover:shadow-xl hover:shadow-[#8d7c00] duration-300">
              <figure>
                <div class="h-60">
                  <img src="{{ asset('assets/img/berita/'.$b->photo) }}" alt="Shoes" />
                </div>
              </figure>
              <div class="h-80">
                <div class="card-body text-black ">
                  <h2 class="card-title font-extrabold lg:text-3xl">{{ $b->title }}</h2>
                  <p class="font-semibold">{{ substr($b->description,0,90).'...' }}</p>
                  <div class="card-actions justify-end">
                    <a href="{{url('/berita/'.$b->id.'')}}"
                      class="btn btn-warning shadow-xl font-extrabold bg-[#FFE200] border-none">Read More...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
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

{{-- <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/2 p-4">
  <div
    class="card lg:w-100 rounded-none bg-white border-solid border-4 border-white duration-300 hover:scale-105 ease-in-out hover:shadow-xl hover:shadow-[#8d7c00] duration-300">
    <figure><img src="{{ asset('assets/img/default-port-6.jpg') }}" alt="Shoes" /></figure>
    <div class="card-body text-black ">
      <h2 class="card-title font-extrabold lg:text-3xl">Shoes!</h2>
      <p class="font-semibold">If a dog chews shoes whose shoes does he choose?</p>
      <div class="card-actions justify-end">
        <a href="{{url('/berita/detail_berita')}}"
          class="btn btn-warning shadow-xl font-extrabold bg-[#FFE200] border-none">Read More...</a>
      </div>
    </div>
  </div>
</div> --}}