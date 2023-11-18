<html>

<head>
    <!--SEO-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta name="keywords" content="">
    <link rel='icon' type="image/x-icon" href='{{asset('assets/img/favicon.ico')}}'>
    <title>1017 Studios</title>

    <!--CSS-->
    {{-- @vite('resources/css/app.css') --}}

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Font-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/function.js') }}"></script>

    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #2d2c2c;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #FFE200;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #ffe100ee;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin 4s linear infinite;
            background-image: url("assets/img/favicon.png");
            background-size: contain;
            /* Adjust the size as per your preference */
            background-repeat: no-repeat;
            background-position: center;
        }

        @keyframes rock-boat {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(5deg);
            }
        }

        .boat {
            animation: rock-boat 3s ease-in-out infinite;
        }

        .portfolio-item {
            display: block;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        .fade-in {
            opacity: 1;
        }

        .fade-out {
            opacity: 0;
        }

        .scrolled {
            opacity: 0.8;
            /* Set the desired opacity value when scrolling */
        }
        .loader {
            border-top-color: #FFE200;
            -webkit-animation: spinner 1.5s linear infinite;
            animation: spinner 1.5s linear infinite;
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="bg-white">
    <div id="loader" wire:loading
        class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-black flex flex-col items-center justify-center">
        <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-12 w-12 mb-4"></div>
        <h2 class="text-center text-white text-xl font-extrabold">Loading...</h2>
        <p class="text-xl text-center font-extrabold text-[#FFE200]">- 1017 studios -</p>
    </div>
        <div id="__layout">
            <div class="min-h-screen font-sans antialiased relative">
                <div class="relative">
                    <div class="absolute top-0 left-0 w-full h-[130vh] sm:h-[225vh] md:h-[100vh] lg:h-[100vh] bg-cover"
                        style="background-image: url({{ asset('assets/img/default-background.jpg') }});">
                    </div>
                    <nav class="hover:shadow-xl sticky z-10 w-full text-neutral-800 hover:bg-[#1c1c1c] duration-500">
                        <div
                            class="flex flex-col max-w-screen-xl px-8 mx-auto lg:items-center lg:justify-between lg:flex-row py-4">
                            <div class="flex flex-col lg:flex-row items-center space-x-4 xl:space-x-8">
                                <div class="w-full flex flex-row items-center justify-between py-6">
                                    <div><a href="{{url('/')}}"><img src="{{ asset('assets/img/logo.png') }}"
                                                alt="Nefa Logo" class="w-24 xl:w-28"></a>
                                    </div>
                                    <div class="lg:hidden">
                                        <button
                                            class="navbar-burger rounded-lg focus:outline-none focus:shadow-outline"><span
                                                aria-hidden="true" role="img"
                                                class="material-design-icon segment-icon"><svg fill="white" width="24"
                                                    height="24" viewBox="0 0 24 24" class="material-design-icon__svg">
                                                    <path d="M21,8H3V6H21M9,13H21V11H9M9,18H21V16H9">
                                                        <!---->
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="space-x-3 hidden lg:flex">
                                <ul
                                    class="w-full h-auto flex flex-col flex-grow lg:items-center pb-4 lg:pb-0 lg:justify-end lg:flex-row origin-top duration-300 xl:space-x-2 space-y-3 lg:space-y-0 hidden lg:flex">
                                    <li class="w-25"><a href="{{url('/')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Home
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/portofolio')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Portofolio
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/about_us')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Tentang Kami
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/testimoni')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Testimoni
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/kontak')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Kontak
                                        </a></li>
                                    <li class="w-25"><a href="{{url('/berita')}}"
                                            class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                            Berita
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="navbar-menu relative z-50 hidden">
                        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                        <nav
                            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-[#FFE200] overflow-y-auto">
                            <div class="flex items-center mb-8">
                                <a href="{{url('/')}}" class="mr-auto text-3xl font-bold leading-none"><img
                                        src="{{ asset('assets/img/favicon.png') }}" alt="Nefa Logo"
                                        class="w-24 xl:w-28"></a>
                                <button class="navbar-close">
                                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="black">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <ul>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/portofolio')}}">Portofolio</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/about_us')}}">Tentang Kami</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/testimoni')}}">Testimoni</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/kontak')}}">Kontak</a>
                                    </li>
                                    <li class="mb-1">
                                        <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300"
                                            href="{{url('/berita')}}">Berita</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="text-neutral-800">
                        <div class="w-full"="">
                            <section id="hero" class="w-full pb-24"="">
                                <div
                                    class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid grid-cols-12 gap-x-6 overflow-hidden"="">
                                    <div data-aos="fade-right" data-aos-duration="1000"
                                        class="col-span-12 lg:col-span-6 md:col-span-6 mt-12 lg:mt-20 space-y-4 sm:space-y-6 px-6 text-center sm:text-left"="">
                                        <span data-aos="fade-right" data-aos-once="true"
                                            class="lg:text-3xl text-2xl text-white font-semibold aos-init aos-animate"="">Mengapa
                                            Memilih
                                            Kami?</span>
                                        <h1 data-aos="fade-right" data-aos-once="true"
                                            class="text-4xl lg:text-6xl font-extrabold leading-tight capitalize sm:pr-8 xl:pr-10 aos-init aos-animate text-white"="">
                                            KAMI AHLINYA
                                        </h1>
                                        <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300"
                                            class="lg:text-3xl text-3xl font-bold text-[#FFE200] paragraph sm:block aos-init aos-animate"="">
                                            Jasa Desain Logo <br> dan Website <br> Sejak 2014
                                        </p>
                                        <div
                                            class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-6 pt-1 pb-1 mt-2 aos-init aos-animate">
                                            <a data-aos="fade-down" data-aos-once="true" data-aos-delay="300"
                                                href="{{url('/about_us')}}"
                                                class="lg:text-sm text-sm font-light text-white paragraph sm:block aos-init aos-animate hover:text-[#FFE200] duration-500">
                                                Baca Selengkapnya...
                                            </a>
                                        </div>
                                        <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700"
                                            class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-6 pt-3 pb-3 mt-2 aos-init aos-animate">
                                            <a class="lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-[#FFE200] text-black"
                                                href="{{url('/kontak')}}">
                                                SAYA MAU PESAN !!
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="hidden sm:block col-span-12 mt-12 lg:mt-20 md:col-span-6 lg:col-span-6 place-self-center boat"="">
                                        <div class="lg:w-full lg:place-self-center boat"=""><img data-aos="fade-up"
                                                data-aos-once="true" src="{{ asset('assets/img/logo.png') }}" alt=""
                                                class="-mt-30 aos-init aos-animate"="">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-0 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12">

                                <div id="portfolio-home" data-aos="fade-up" data-aos-duration="1000"
                                    class="flex flex-col flex-wrap md:py-6 sm:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                                    <div
                                        class="group md:py-6 portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-1.jpg') }}"
                                            class="img-fluid object-cover w-full" alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="group portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-2.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="group portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-3.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="group md:py-6 portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-1.jpg') }}"
                                            class="img-fluid object-cover w-full" alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="group portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-2.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="group portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-3.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="group portfolio-item md:py-6 website relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-4.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="group portfolio-item website relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-5.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="group portfolio-item website relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-port-6.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div
                                            class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 h-0 group-hover:bg-opacity-100 group-hover:h-full">
                                            1017 studios
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col sm:flex-row mt-7 items-center justify-center space-y-6 sm:space-y-0">
                                        <div
                                            class="flex flex-wrap justify-center space-y-6 sm:space-y-0 sm:space-x-6 pt-3 pb-3 mt-2 aos-init aos-animate">
                                            <button type="button"
                                                class="hidden filter-btn lg:text-lg duration-300 font-extrabold shadow-md hover:shadow-xl text-center rounded-full lg:w-[200px] px-6 py-4 bg-[#FFE200] text-black"
                                                fdprocessedid="rdwmjd" data-filter="all">
                                                ALL
                                            </button>
                                            <button type="button"
                                                class="filter-btn lg:text-lg duration-300 font-extrabold shadow-md hover:shadow-xl text-center rounded-full  lg:w-[200px] px-6 py-4 bg-[#FFE200] text-black"
                                                fdprocessedid="rdwmjd" data-filter="all">
                                                ALL
                                            </button>
                                            <button type="button"
                                                class="filter-btn lg:text-lg duration-300 font-extrabold shadow-md hover:shadow-xl text-center rounded-full lg:w-[200px] px-6 py-4 bg-[#FFE200] text-black"
                                                fdprocessedid="rdwmjd" data-filter="logo">
                                                LOGO
                                            </button>
                                            <button type="button"
                                                class="filter-btn lg:text-lg duration-300 font-extrabold shadow-md hover:shadow-xl text-center rounded-full lg:w-[200px] px-6 py-4 bg-[#FFE200] text-black"
                                                fdprocessedid="rdwmjd" data-filter="website">
                                                WEBSITE
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="w-full my-10" 
                                style="background-image: url({{ asset('assets/img/default-background.jpg') }});background-size: cover;">
                                <div
                                    class="relative max-w-screen-xl px-4 sm:px-8 pb-20 mx-auto grid gap-x-6 overflow-hidden"="">
                                    <div class="col-span-12 lg:col-span-6 sm:hidden mb-8"="">
                                        <div class="w-full"><img src="/_nuxt/img/buy-and-trade.69b9f7b.webp" alt=""
                                                class="mt-4 sm:-mt-4"></div>
                                    </div>
                                    <div data-aos="fade-up" data-aos-duration="1000"
                                        class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init"="">
                                        <h2
                                            class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 xl:pr-12"="">
                                            Tentang Kami
                                        </h2>
                                        <p class="paragraph text-white lg:text-xl text-justify "="">
                                            Desain Logo dan Website untuk usaha anda adalah Asset yang sangat berharga.
                                            <br><br>
                                            1017 Studios di bidang Jasa Desain Logo untuk Brand maupun desain promotion
                                            tools seperti desain brosur,
                                            desain banner, desain poster dll untuk meningkatkan omzet. 1017 Studios
                                            telah
                                            berpengalaman berdiri sejak
                                            2014 memiliki visi misi meningkatkan daya jual pemasaran melalui desain yang
                                            berkualitas. <br><br> Desain Logo adalah identitas dari sebuah produk,
                                            sehingga
                                            harus di desain dengan serius sesuai dengan target
                                            marketnya. Selain desain logo, kami berpengalaman dalam desain grafis
                                            lainnya
                                            seperti brosur, office tools,
                                            packaging, dan lainnya. Perkembangan Desain Logo saat ini tidak hanya
                                            digunakan
                                            di perusahaan besar saja,
                                            namun di terapkan pada pengusaha UMKM, Start Up, dan lainnya, hal itu
                                            dikarenakan karena Desain Logo
                                            sangat membantu dalam menyampaikan brand image. <br><br> Desain logo keren
                                            memiliki
                                            fungsi yang cukup penting bagi sebuah perusahaan maupun brand. Dimana logo
                                            termasuk dalam program marketing yang berfungsi sebagai brand image. Desain
                                            logo
                                            sangat berperan dalam
                                            perkembangan brand, program marketing, identitas dan lainnya. Desain Logo
                                            yang
                                            baik adalah dapat
                                            menimbulkan citra / image dari sebuah brand sesuai dari visi dan misi brand.
                                            <br><br> Desain logo / desain grafis yang kami hasilkan adalah desain yang
                                            original,
                                            sehingga tidak usah khawatir
                                            bahwa desain logo / desain grafis anda sama dengan lainnya. Kami
                                            berpengalaman
                                            lebih dari 5 tahun dalam
                                            pembuatan desain logo, desain grafis, web development, 3d desain yang
                                            tentunya
                                            sesuai dengan kebutuhan
                                            pasar.
                                        </p>
                                    </div>
                                </div>
                            </section>
                            <section class="w-full my-24">
                                <div
                                    class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-0 py-6 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12">
                                    <div
                                        class="flex flex-col flex-wrap sm:flex-row items-center justify-center space-y-6 mt-50 sm:space-y-0 -mx-4">
                                        <div data-aos="fade-down-right" data-aos-duration="1000"
                                            class="relative sm:w-1/2 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                            <img src="{{ asset('assets/img/default-superior-1.png') }}"
                                                class="img-fluid" alt="">
                                            <h3 class="text-4xl font-bold text-center">Desainer dan Developer</h3>
                                            <p class="font-extrabold text-2xl text-center">Senior & Profesional</p>
                                        </div>
                                        <div data-aos="fade-down-right" data-aos-duration="1000"
                                            class="relative sm:w-1/2 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                            <img src="{{ asset('assets/img/default-superior-2.png') }}"
                                                class="img-fluid" alt="">
                                            <h3 class="text-4xl font-bold text-center">Proses Pengerjaan</h3>
                                            <p class="font-extrabold text-2xl text-center">Cepat & Tepat Waktu</p>
                                        </div>
                                        <div data-aos="fade-up-right" data-aos-duration="1000"
                                            class="relative sm:w-1/2 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                            <img src="{{ asset('assets/img/default-superior-3.png') }}"
                                                class="img-fluid" alt="">
                                            <h3 class="text-4xl font-bold text-center">Konsultasi</h3>
                                            <p class="font-extrabold text-2xl text-center">Gratis & Solutif</p>
                                        </div>
                                        <div data-aos="fade-up-right" data-aos-duration="1000"
                                            class="relative sm:w-1/2 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                            <img src="{{ asset('assets/img/default-superior-4.png') }}"
                                                class="img-fluid" alt="">
                                            <h3 class="text-4xl font-bold text-center">Output</h3>
                                            <p class="font-extrabold text-2xl text-center">Master File / Akses (Website)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="w-full lg:my-24"=""
                                style="background-image: url({{ asset('assets/img/default-background.jpg') }});background-size: cover;">
                                <div
                                    class="relative max-w-screen-xl px-4 sm:px-8 pb-20 mx-auto grid gap-x-6 overflow-hidden"="">
                                    <div class="col-span-12 lg:col-span-6 sm:hidden mb-8"="">
                                        <div class="w-full"><img src="/_nuxt/img/buy-and-trade.69b9f7b.webp" alt=""
                                                class="mt-4 sm:-mt-4"></div>
                                    </div>
                                    <div data-aos="fade-up" data-aos-duration="1000"
                                        class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init"="">
                                        <h2
                                            class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 xl:pr-12"="">
                                            FAQ
                                        </h2>
                                        <h2 class="lg:text-4xl text-2xl text-white font-extrabold sm:pr-8 xl:pr-12"="">
                                            Pertanyaan yang sering diajukan
                                        </h2>
                                        <table class="w-full">
                                            <tr>
                                                <td class="lg:text-xl font-bold pr-1 text-white">+</td>
                                                <td class="lg:text-xl font-bold text-white">Bagaimana cara pemesanan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold"></td>
                                                <td class="lg:text-xl font-bold text-[#FFE200]">Tekan tombol SAYA MAU
                                                    PESAN
                                                    atau
                                                    hubungi kami melalui Whatsapp melalui icon Whatsapp.</td>
                                            </tr>

                                            <tr>
                                                <td class="lg:text-xl pr-1 font-extrabold text-white">+</td>
                                                <td class="lg:text-xl font-bold text-white">Bagaimana cara pembayaran
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold"></td>
                                                <td class="lg:text-xl font-bold text-[#FFE200]">Pengerjaan akan dimulai
                                                    setelah
                                                    kami menerima pembayaran DP sebesar 50% dari klien.
                                                    Hasil kerja final yang sudah melewati proses revisi–akan dikirimkan
                                                    setelah kami menerima pelunasan.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="lg:text-xl pr-1 font-extrabold text-white">+</td>
                                                <td class="lg:text-xl font-bold text-white">Bagaimana apabila hasil
                                                    kurang
                                                    cocok</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold"></td>
                                                <td class="lg:text-xl font-bold text-[#FFE200]">Anda mendapatkan
                                                    fasilitas /
                                                    garansi revisi sesuai dengan paket desain yang dipilih. Kami selalu
                                                    berkomitmen dan berusaha untuk memberikan solusi dan hasil terbaik
                                                    untuk
                                                    kebutuhan anda.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="lg:text-xl pr-1 font-extrabold text-white">+</td>
                                                <td class="lg:text-xl font-bold text-white">Bagaimana apabila saya ingin
                                                    membatalkan project yang sedang berjalan?</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold "></td>
                                                <td class="lg:text-xl font-bold text-[#FFE200]">Ketentuan untuk tidak
                                                    melanjutkan project karena alasan apapun, cukup infokan ke kami
                                                    untuk
                                                    menghentikan project ini. Kamu tidak perlu melunasi sisa biaya yang
                                                    belum terbayar.
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="lg:text-xl pr-1 font-extrabold text-white">+</td>
                                                <td class="lg:text-xl font-bold text-white">Apakah bisa merubah project
                                                    yang
                                                    sedang berjalan dan mengganti dengan yang baru?</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold"></td>
                                                <td class="lg:text-xl font-bold text-[#FFE200]">Project yang sedang
                                                    berjalan
                                                    akan dianggap batal dan tidak harus membayar kekurangan biaya yang
                                                    belum terbayar. Untuk project yang baru, anda harus memesan kembali
                                                    paket desain sesuai kebutuhan.
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </section>

                            <section class="w-full lg:my-24"="">
                                <div
                                    class="flex flex-col flex-wrap sm:flex-row items-center justify-center space-y-6 mt-50 sm:space-y-0">
                                    <div data-aos="zoom-out-up" data-aos-duration="2000"
                                        class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center p-10 sm:space-x-6 lg:pt-3 lg:pb-3 mt-2 aos-init aos-animate">
                                        <a class="lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-[#FFE200] text-black"
                                            href="{{url('/kontak')}}">
                                            SAYA MAU PESAN !!
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="fixed bottom-20 left-10 z-10">
                        <button id="to-top-button" onclick="goToTop()" title="Go To Top"
                            class="hidden fixed z-90 border-0 w-16 h-16 rounded-full drop-shadow-md bg-[#FFE200] text-black text-3xl font-bold">&uarr;</button>
                    </div>

                    <div class="fixed bottom-10 right-10 z-10">
                        <a title="Chat Whatsapp" href="{{url('/kontak')}}" target="_blank"
                            class="block rounded-full transition-all shadow transform hover:scale-110 hover:rotate-12">
                            <img class="object-cover object-center lg:w-36 lg:h-36 w-24 h-24"
                                src="{{ asset('assets/img/order.png') }}" alt="Saya mau pesan">
                        </a>
                    </div>

                    <footer class="relative bg-black pt-8 pb-6">
                        <div class="container mx-auto px-4">
                            <div class="flex flex-wrap text-left lg:text-left place-content-center">
                                <div class="w-full lg:w-3/12 px-4">
                                    <div
                                    class="hidden sm:block col-span-12 mt-12 mb-12 lg:mt-20 lg:col-span-6 place-self-center"="">
                                    <div class="w-full place-self-center"=""><img data-aos="fade-up"
                                            data-aos-once="true" src="{{ asset('assets/img/logo.png') }}" alt=""
                                            class="-mt-30 aos-init aos-animate"="">
                                    </div>
                                    <div class="mt-7">
                                        <h3 class="text-xl font-bold text-white text-center">berdiri sejak
                                            2014<br>lebih dari 2000 klien</h3>
                                    </div>
                                </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4 place-self-center">
                                    <div class="flex flex-wrap items-top mb-6">
                                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl"
                                                        href="{{url('/berita')}}">Berita</a>
                                                </li>
                                                <li>
                                                    <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl"
                                                        href="{{url('/portofolio')}}">Portofolio</a>
                                                </li>
                                                <li>
                                                    <a class="font-bold block pb-2 text-xl" style="color:#FFE200"
                                                        href="{{url('/kontak')}}">Saya mau pesan</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr class="lg:hidden color-white">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <ul class="list-unstyled">
                                                <li class="flex items-center lg:justify-end">
                                                    <i class="fab fa-whatsapp text-white text-2xl mr-2"
                                                        aria-hidden="true"></i>
                                                    <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl lg:text-right"
                                                        href="https://api.whatsapp.com/send?phone=6281938646560">081 938 64 6560</a>
                                                </li>
                                                <li class="flex items-center lg:justify-end">
                                                    <i class="fab fa-instagram text-white text-2xl mr-2"></i>
                                                    <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl lg:text-right"
                                                        href="https://www.instagram.com/studiodesign1017/"
                                                        target="_blank">studiodesign1017</a>
                                                </li>
                                                <li class="flex items-center lg:justify-end lg:mt-20">
                                                    <a class="font-bold text-white block pb-2 text-xl lg:text-right"
                                                        href="https://goo.gl/maps/your-location" target="_blank">
                                                        Jemundo, Sawunggaling<br>
                                                        Timur 3 RT 22 RW 04<br>
                                                        Sepanjang - Sidoarjo
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center md:justify-between justify-center">
                                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                                    <div class="text-sm text-white font-semibold py-1">
                                        © 2023 Copyright 1017studios All Right reserved
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');
    
        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    
        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');
    
        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    
        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
        });
        $(document).ready(function() {
        $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
        $('#navbar').addClass('scrolled');
        } else {
         $('#navbar').removeClass('scrolled');
        }
        });
        });
    </script>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterButtons.forEach(button => {
        button.addEventListener('click', () => {
      const filterValue = button.dataset.filter;

      portfolioItems.forEach(item => {
        if (filterValue === 'all' || item.classList.contains(filterValue)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
        });
    });
    window.addEventListener('load', function () {
    const loader = document.getElementById('loader');
    const content = document.getElementById('content');

    loader.style.display = 'none';
    content.style.display = 'block';
    });

  
    </script>
    <script>
        var toTopButton = document.getElementById("to-top-button");
        window.onscroll = function () {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                toTopButton.classList.remove("hidden");
            } else {
                toTopButton.classList.add("hidden");
            }
        }
        function goToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</body>

</html>