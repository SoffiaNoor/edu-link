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
    <link rel='icon' type="image/x-icon" href='{{asset('assets/images/logo2.ico')}}'>
    <title>Edulink</title>

    <!--CSS-->
    {{-- @vite('resources/css/app.css') --}}

    
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Font-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/function.js') }}"></script>

    <style>
        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            object-fit: cover;
        }


        /* Custom styles for the overlay effect */
        .overlay {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .group:hover .overlay {
            opacity: 1;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #2e1065;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #4c1d95;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #4c1d95;
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
            border-top-color: #7e22ce;
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

        #movingImage {
            position: absolute;
            transition: transform 0.2s ease-out;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-[#0e1737] to-[#0e183b]">
    <div id="loader" wire:loading
        class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-gradient-to-r from-indigo-950 to-blue-950 flex flex-col items-center justify-center">
        <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-12 w-12 mb-4"></div>
        <img src="{{ asset('assets/images/edulink2.png') }}" alt="Nefa Logo" class="w-24 xl:w-28">
    </div>
    <div id="__layout">
        <div class="min-h-screen font-sans antialiased relative">
            <div class="relative">
                <div class="absolute top-0 left-0 h-[130vh] w-full sm:h-[225vh] md:h-[100vh] lg:h-[100vh] bg-cover bg-center"
                    style="background-image: url({{ asset('assets/images/bg6.png') }});">
                </div>
                <nav
                    class="hover:shadow-xl hover:bg-gradient-to-r from-[#0e1737] to-[#0e183b] sticky z-10 w-full text-neutral-800 duration-500">
                    <div
                        class="flex flex-col max-w-screen-xl px-8 mx-auto lg:items-center lg:justify-between lg:flex-row py-4">
                        <div class="flex flex-col lg:flex-row items-center space-x-4 xl:space-x-8">
                            <div class="w-full flex flex-row items-center justify-between py-6">
                                <div><a href="{{url('/')}}"><img src="{{ asset('assets/images/edulink2.png') }}"
                                            alt="Nefa Logo" class="w-24 xl:w-28"></a>
                                </div>
                                <div class="lg:hidden">
                                    <button
                                        class="navbar-burger rounded-lg focus:outline-none focus:shadow-outline"><span
                                            aria-hidden="true" role="img" class="material-design-icon segment-icon"><svg
                                                fill="white" width="24" height="24" viewBox="0 0 24 24"
                                                class="material-design-icon__svg">
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
                                class="w-full font-['Fredoka'] h-auto flex flex-col flex-grow lg:items-center pb-4 lg:pb-0 lg:justify-end lg:flex-row origin-top duration-300 xl:space-x-2 space-y-3 lg:space-y-0 hidden lg:flex">
                                <li class="w-25"><a href="{{url('/kursus')}}"
                                        class="md:px-2 py-2 font-bold text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        E-Course </a></li>
                                <li class="w-25"><a href="{{url('/konsultasi')}}"
                                        class="md:px-2 py-2 font-bold text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Konsultasi </a></li>
                                <li class="w-25"><a href="{{url('/pelayanan')}}"
                                        class="md:px-2 py-2 font-bold text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Pelayanan </a></li>
                                @if(auth()->check())
                                <li class="w-25"><a href="{{url('/pesan')}}"
                                        class="md:px-2 py-2 font-bold text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Pesan </a></li>
                                @else
                                @endif
                                @if(auth()->check())
                                <li class="relative group">
                                    <div id="userDropdown"
                                        class="flex items-center px-6 py-2 shadow-xl bg-gradient-to-r from-fuchsia-600 to-violet-800 rounded-full cursor-pointer">
                                        <span class="mr-4 text-white font-bold text-xl">{{ auth()->user()->name
                                            }}</span>
                                        <img src="assets/images/profile-user.png" alt="Profile Photo"
                                            class="w-8 h-8 rounded-full">
                                    </div>
                                    <ul id="dropdownMenu"
                                        class="absolute hidden font-bold w-full text-md mt-2 bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white rounded-md shadow-lg z-10">
                                        <li><a href="{{ url('/admin') }}" class="block px-4 py-2">Dashboard</a></li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li><button class="block px-4 py-2" type="submit">Logout</button></li>
                                        </form>
                                    </ul>

                                    <script>
                                        document.getElementById('userDropdown').addEventListener('click', function () {
                                            var dropdown = document.getElementById('dropdownMenu');
                                            dropdown.classList.toggle('hidden');
                                        });
                                    </script>
                                </li>
                                @else
                                <li class="w-25">
                                    <a class="lg:text-xl duration-300 font-extrabold text-center rounded-full shadow-md transition max-w-full px-6 py-4 bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white"
                                        href="{{ url('/login') }}">
                                        Login
                                    </a>
                                </li>
                                @endif
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
                                    src="{{ asset('assets/images/edulink.png') }}" alt="Nefa Logo"
                                    class="w-24 xl:w-28"></a>
                            <button class="navbar-close">
                                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <ul class="font-['Fredoka']">
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-black hover:shadow-md rounded duration-300"
                                        href="{{url('/')}}">Home</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-black hover:shadow-md rounded duration-300"
                                        href="{{url('/portofolio')}}">Portofolio</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-black hover:shadow-md rounded duration-300"
                                        href="{{url('/about_us')}}">Tentang Kami</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-black hover:shadow-md rounded duration-300"
                                        href="{{url('/testimoni')}}">Testimoni</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-black hover:shadow-md rounded duration-300"
                                        href="{{url('/kontak')}}">Kontak</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-black hover:shadow-md rounded duration-300"
                                        href="{{url('/berita')}}">Berita</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <section id="hero" class="w-full pb-24">
                    <swiper-container class="mySwiper" pagination="true" style="margin-top:-10rem;margin-bottom:0px"
                        pagination-clickable="true" direction="vertical" space-between="30" mousewheel="true">
                        <swiper-slide class="bg-transparent">
                            <div class="max-w-screen-xl px-4 sm:px-8 mx-auto grid grid-cols-12 gap-x-6 overflow-hidden">
                                <div
                                    class="col-span-12 lg:col-span-6 md:col-span-6 mt-12 lg:mt-20 space-y-4 sm:space-y-6 text-center sm:text-left">
                                    <h1 style="padding-top:3rem"
                                        class="font-extrabold text-transparent font-['Fredoka'] text-8xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                                        Lupa Cara Rebahan
                                    </h1>
                                    <p
                                        class="lg:text-2xl text-3xl font-['Fredoka'] font-bold text-white paragraph sm:block aos-init aos-animate">
                                        Curi Start dan Dapatkan PTN Impian di Edulink
                                    </p>
                                    <div
                                        class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-6 pt-3 pb-3 mt-2 aos-init aos-animate">
                                        <a class="font-['Fredoka'] lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full shadow-md transition max-w-full px-6 py-4 bg-gradient-to-r from-purple-400 to-pink-600 text-white"
                                            href="{{url('/kontak')}}">
                                            Beli Kursus
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="hidden sm:block col-span-12 mt-12 lg:mt-20 md:col-span-6 lg:col-span-6 place-self-center">
                                    <div class="lg:w-full lg:place-self-center">
                                        <img src="{{ asset('assets/images/laptop.png') }}" alt=""
                                            class="-mt-30 aos-init aos-animate">
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="bg-transparent">
                            <div class="max-w-screen-xl px-4 sm:px-8 mx-auto grid grid-cols-12 gap-x-6 overflow-hidden">
                                <div
                                    class="col-span-12 lg:col-span-6 md:col-span-6 mt-12 lg:mt-20 space-y-4 sm:space-y-6 text-center sm:text-left">
                                    <h1 style="padding-top:3rem"
                                        class="font-extrabold text-transparent font-['Fredoka'] text-8xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                                        E-COURSE
                                    </h1>
                                    <p
                                        class="lg:text-2xl text-3xl font-['Fredoka'] font-bold text-white paragraph sm:block aos-init aos-animate">
                                        Kelas yang Fleksibel dan Kuasai Soal Prediksi Ujian dengan Sempurna
                                    </p>
                                    <div
                                        class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-6 pt-3 pb-3 mt-2 aos-init aos-animate">
                                        <a class="font-['Fredoka'] lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full shadow-md transition max-w-full px-6 py-4 bg-gradient-to-r from-purple-400 to-pink-600 text-white"
                                            href="{{url('/kontak')}}">
                                            Beli Kursus
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="hidden sm:block col-span-12 mt-12 lg:mt-20 md:col-span-6 lg:col-span-6 place-self-center">
                                    <div class="lg:w-full lg:place-self-center">
                                        {{-- <img src="" alt="" class="-mt-30 aos-init aos-animate"> --}}
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                        <swiper-slide class="bg-transparent">
                            <div class="max-w-screen-xl px-4 sm:px-8 mx-auto grid grid-cols-12 gap-x-6 overflow-hidden">
                                <div
                                    class="col-span-12 lg:col-span-6 md:col-span-6 mt-12 lg:mt-20 space-y-4 sm:space-y-6 text-center sm:text-left">
                                    <h1 style="padding-top:3rem"
                                        class="font-extrabold text-transparent font-['Fredoka'] text-8xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                                        Rencana Kuliah
                                    </h1>
                                    <p
                                        class="lg:text-2xl text-3xl font-['Fredoka'] font-bold text-white paragraph sm:block aos-init aos-animate">
                                        Konsultasi Rapot dan Matangkan Persiapan dari Sekarang
                                    </p>
                                    <div
                                        class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-6 pt-3 pb-3 mt-2 aos-init aos-animate">
                                        <a class="font-['Fredoka'] lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full shadow-md transition max-w-full px-6 py-4 bg-gradient-to-r from-purple-400 to-pink-600 text-white"
                                            href="{{url('/kontak')}}">
                                            Beli Kursus
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="hidden sm:block col-span-12 mt-12 lg:mt-20 md:col-span-6 lg:col-span-6 place-self-center">
                                    <div class="lg:w-full lg:place-self-center">
                                        {{-- <img src="" alt="" class="-mt-30 aos-init aos-animate"> --}}
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                    </swiper-container>
                </section>

                <section class="w-full relative"
                    style="background-image: url({{ asset('assets/images/bubble1.png') }});background-size: cover;background-position: top; margin-top: -250px;z-index: 999"
                    data-aos="fade-up">
                    <div class="max-w-screen-xl mx-auto px-4 m sm:px-6 lg:px-0 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12"
                        data-aos="zoom-in-up">
                        <div id="portfolio-home"
                            class="flex flex-col flex-wrap md:py-6 sm:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                            <div class="group relative rounded-2xl shadow-lg my-3 mx-3 max-w-sm" data-aos="zoom-in-up">
                                <img src="assets/images/card1.png" alt="Hello World Image"
                                    class="w-full object-cover rounded-2xl">
                                <div
                                    class="overlay absolute inset-0 font-['Fredoka'] rounded-2xl bg-gradient-to-r from-purple-400 to-pink-600 text-white flex items-center justify-center text-center text-4xl font-bold">
                                    <div class="row">
                                        <p>
                                            Metode Belajar <br> Fleksibel
                                        </p>
                                        <hr class="w-48 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                                            style="margin-top:10px;margin-bottom:0px">
                                    </div>
                                </div>
                            </div>
                            <div class="group relative rounded-2xl shadow-lg my-3 mx-3 max-w-sm" data-aos="zoom-in-up">
                                <img src="assets/images/card2.png" alt="Hello World Image"
                                    class="w-full object-cover rounded-2xl">
                                <div
                                    class="overlay absolute inset-0 font-['Fredoka'] rounded-2xl shadow-2xl bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white flex items-center justify-center text-center text-4xl font-bold">
                                    <div class="row">
                                        <p>
                                            Taktik Killer
                                        </p>
                                        <hr class="w-48 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                                            style="margin-top:10px;margin-bottom:0px">
                                        <p class="text-xl">tak hanya tepat tapi juga cepat <br> dalam menjawab soal
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="group relative rounded-2xl shadow-lg my-3 mx-3 max-w-sm" data-aos="zoom-in-up">
                                <img src="assets/images/card1.png" alt="Hello World Image"
                                    class="w-full object-cover rounded-2xl">
                                <div
                                    class="overlay absolute inset-0 font-['Fredoka'] rounded-2xl bg-gradient-to-r from-purple-400 to-pink-600 text-white flex items-center justify-center text-center text-4xl font-bold">
                                    <div class="row">
                                        <p>
                                            Tutor Alumni PTN <br> Terakreditasi
                                        </p>
                                        <hr class="w-48 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                                            style="margin-top:10px;margin-bottom:0px">
                                    </div>
                                </div>
                            </div>
                            <div class="group relative rounded-2xl shadow-lg my-3 mx-3 max-w-sm" data-aos="zoom-in-up">
                                <img src="assets/images/card2.png" alt="Hello World Image"
                                    class="w-full object-cover rounded-2xl">
                                <div
                                    class="overlay absolute inset-0 font-['Fredoka'] rounded-2xl shadow-2xl bg-gradient-to-r from-fuchsia-600 to-violet-800 text-white flex items-center justify-center text-center text-4xl font-bold">
                                    <div class="row">
                                        <p>
                                            Konsultan <br> Terupdate
                                        </p>
                                        <hr class="w-48 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                                            style="margin-top:10px;margin-bottom:0px">
                                    </div>
                                </div>
                            </div>
                            <div class="group relative rounded-2xl shadow-lg my-3 mx-3 max-w-sm" data-aos="zoom-in-up">
                                <img src="assets/images/card1.png" alt="Hello World Image"
                                    class="w-full object-cover rounded-2xl">
                                <div
                                    class="overlay absolute inset-0 font-['Fredoka'] rounded-2xl bg-gradient-to-r from-purple-400 to-pink-600 text-white flex items-center justify-center text-center text-4xl font-bold">
                                    <div class="row">
                                        <p>
                                            Garansi Cashback <br> 100%
                                        </p>
                                        <hr class="w-48 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                                            style="margin-top:10px;margin-bottom:0px">
                                        <p class="text-xl">jika Gagal Ujian (s&k berlaku)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="w-full text-white"
                    style="background-image: url({{ asset('assets/images/study_1.png') }});background-size: cover;background-position:top"
                    data-aos="zoom-in" data-aos-duration="1000">
                    <div class="flex flex-wrap justify-center antialiased text-gray-600 p-4">
                        <div class="max-w-screen-xl mx-auto px-4 m sm:px-6 lg:px-0 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12"
                            data-aos="zoom-in-up">
                            <h1 style="padding-top:3rem"
                                class="font-extrabold text-transparent text-center pb-10 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                                Program EDULINK </h1>
                            <hr class="w-72 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                                style="margin-top:-20px;">
                            <div id="portfolio-home"
                                class="flex flex-col font-[Fredoka] flex-wrap md:py-6 sm:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                                <div class="max-w-sm mx-auto p-5" data-aos="zoom-in">
                                    <div
                                        class="relative flex flex-col h-full bg-indigo-700 shadow-lg rounded-lg shadow-lg p-5">
                                        <div class="absolute top-0 right-5">
                                            <div
                                                class="text-xs inline-flex font-semibold bg-green-100 text-green-600 rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2">
                                                Most Popular</div>
                                        </div>
                                        <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                                            <div class="mb-2">
                                                <svg width="42" height="44" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <defs>
                                                        <linearGradient x1="27.515%" y1="0%" x2="59.658%" y2="100%"
                                                            id="b">
                                                            <stop stop-color="#5EEAD4" offset="0%" />
                                                            <stop stop-color="#2DD4BF" offset="100%" />
                                                        </linearGradient>
                                                        <linearGradient x1="67.338%" y1="82.466%" x2="4.807%"
                                                            y2="15.884%" id="c">
                                                            <stop stop-color="#F0FDFA" stop-opacity=".12" offset="0%" />
                                                            <stop stop-color="#F0FDFA" offset="100%" />
                                                        </linearGradient>
                                                        <linearGradient x1="47.38%" y1="24.752%" x2="58.769%"
                                                            y2="81.336%" id="e">
                                                            <stop stop-color="#0F766E" stop-opacity=".24" offset="0%" />
                                                            <stop stop-color="#0D9488" stop-opacity="0" offset="100%" />
                                                        </linearGradient>
                                                        <path id="a"
                                                            d="M25.015 44 0 29.437 10.654 0l25.17 4.338L42 26.648z" />
                                                    </defs>
                                                    <g fill="none" fill-rule="evenodd">
                                                        <mask id="d" fill="#fff">
                                                            <use xlink:href="#a" />
                                                        </mask>
                                                        <use fill="url(#b)" xlink:href="#a" />
                                                        <path
                                                            d="m10.281-.584 23.651 20.647 14.84 11.177 7.884-14.748-.927-9.78-11.44-7.296-8.81-3.26L20.02-4.62 10.281-.584Z"
                                                            fill="url(#c)" style="mix-blend-mode:overlay"
                                                            mask="url(#d)" />
                                                        <path
                                                            d="M43.015 17.16-1.969 29.974l6.647 11.579c6.184 3.808 9.481 5.867 9.894 6.175.412.31 7.729.31 21.95 0l7.884-9.88-1.391-20.688Z"
                                                            fill="url(#e)" style="mix-blend-mode:multiply"
                                                            mask="url(#d)" />
                                                        <path fill-opacity=".32" fill="#F0FDFA"
                                                            style="mix-blend-mode:overlay" mask="url(#d)"
                                                            d="m36.18 3.3-2.17 16.714L23.625 48.18l20.15-5.107 5.89-11.297 1.085-18.881z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="font-extrabold mb-1"><span
                                                    class="text-4xl text-indigo-50">E-Course</span></div>
                                            <div class="text-indigo-200">Full Kursus Online Dimana Saja dan Kapan Saja.
                                            </div>
                                        </header>
                                        <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                                            <li class="flex items-center">
                                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                                    viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                                </svg>
                                                <span>Latihan soal tiap pertemuan</span>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                                    viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                                </svg>
                                                <span>Simulasi UTBK dan Laporan Kemajuan</span>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                                    viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                                </svg>
                                                <span>Tutor Alumni PTN Terakreditasi.</span>
                                            </li>
                                        </ul>
                                        <button
                                            class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-green-400 hover:bg-green-500 text-white focus:outline-none focus-visible:ring-2">
                                            Pesan E-Course
                                        </button>
                                    </div>
                                </div>
                                <div class="max-w-sm mx-auto mb-8 p-5" data-aos="zoom-in">
                                    <div
                                        class="relative flex flex-col h-full bg-indigo-700 shadow-lg rounded-lg shadow-lg p-5">
                                        <div class="absolute top-0 right-5">
                                            <div
                                                class="text-xs inline-flex font-semibold bg-green-100 text-green-600 rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2">
                                                Most Popular</div>
                                        </div>
                                        <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                                            <div class="mb-2">
                                                <svg width="42" height="44" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <defs>
                                                        <linearGradient x1="27.515%" y1="0%" x2="59.658%" y2="100%"
                                                            id="b">
                                                            <stop stop-color="#5EEAD4" offset="0%" />
                                                            <stop stop-color="#2DD4BF" offset="100%" />
                                                        </linearGradient>
                                                        <linearGradient x1="67.338%" y1="82.466%" x2="4.807%"
                                                            y2="15.884%" id="c">
                                                            <stop stop-color="#F0FDFA" stop-opacity=".12" offset="0%" />
                                                            <stop stop-color="#F0FDFA" offset="100%" />
                                                        </linearGradient>
                                                        <linearGradient x1="47.38%" y1="24.752%" x2="58.769%"
                                                            y2="81.336%" id="e">
                                                            <stop stop-color="#0F766E" stop-opacity=".24" offset="0%" />
                                                            <stop stop-color="#0D9488" stop-opacity="0" offset="100%" />
                                                        </linearGradient>
                                                        <path id="a"
                                                            d="M25.015 44 0 29.437 10.654 0l25.17 4.338L42 26.648z" />
                                                    </defs>
                                                    <g fill="none" fill-rule="evenodd">
                                                        <mask id="d" fill="#fff">
                                                            <use xlink:href="#a" />
                                                        </mask>
                                                        <use fill="url(#b)" xlink:href="#a" />
                                                        <path
                                                            d="m10.281-.584 23.651 20.647 14.84 11.177 7.884-14.748-.927-9.78-11.44-7.296-8.81-3.26L20.02-4.62 10.281-.584Z"
                                                            fill="url(#c)" style="mix-blend-mode:overlay"
                                                            mask="url(#d)" />
                                                        <path
                                                            d="M43.015 17.16-1.969 29.974l6.647 11.579c6.184 3.808 9.481 5.867 9.894 6.175.412.31 7.729.31 21.95 0l7.884-9.88-1.391-20.688Z"
                                                            fill="url(#e)" style="mix-blend-mode:multiply"
                                                            mask="url(#d)" />
                                                        <path fill-opacity=".32" fill="#F0FDFA"
                                                            style="mix-blend-mode:overlay" mask="url(#d)"
                                                            d="m36.18 3.3-2.17 16.714L23.625 48.18l20.15-5.107 5.89-11.297 1.085-18.881z" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="font-extrabold mb-1"><span
                                                    class="text-4xl text-indigo-50">Konsultasi</span></div>
                                            <div class="text-indigo-200">Bimbingan Persiapan Kuliah sampai Diterima PTN.
                                            </div>
                                        </header>
                                        <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                                            <li class="flex items-center">
                                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                                    viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                                </svg>
                                                <span>Program 12 Bulan Exclusive. Jaminan Lolos</span>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                                    viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                                </svg>
                                                <span>Persiapan Menyeluruh. Saran Kelengkapan berbagai Jalur PTN</span>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0"
                                                    viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                                </svg>
                                                <span>Program Review Rapot oleh Konsultan dan Rekomendasi
                                                    Jurusan.</span>
                                            </li>
                                        </ul>
                                        <button
                                            class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-150 ease-in-out w-full bg-green-400 hover:bg-green-500 text-white focus:outline-none focus-visible:ring-2">
                                            Pesan Konsul
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="w-full text-white"
                    style="background-image: url({{ asset('assets/images/star.png') }});background-size: cover;background-position:top"
                    data-aos="fade-up">
                    <div class="max-w-screen-xl mx-auto px-4 m sm:px-6 lg:px-0 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12"
                        data-aos="zoom-in-up">
                        <div class="container flex flex-col justify-center px-4 py-8 mx-auto md:p-8">
                            <h1 style="padding-top:3rem"
                                class="font-extrabold text-center text-transparent pb-10 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600"
                                data-aos="zoom-in-up">
                                Frequently Asked Questions
                            </h1>
                            <div class="space-y-4 font-['Fredoka']">
                                <details
                                    class="w-full text-lg shadow-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                                    data-aos="zoom-in-up">
                                    <summary class="px-4 text-lg py-6 focus:outline-none focus-visible:ri font-medium">
                                        Apa saja
                                        Benefit di
                                        Edulink?</summary>
                                    <p class="px-4 py-6 text-lg pt-0 ml-4 -mt-4 dark:text-gray-400">Edulink memiliki
                                        empat
                                        benefit utama. eBook berisi latihan soal prediksi yang eksklusif untuk belajar
                                        mandiri beserta pembahasannya berupa video. Course fleksibel via zoom bareng
                                        experts. Konsul untuk dapat arahan persiapan Kuliah. Tutor dan atau Konsultan
                                        dapat dihubungi 24 jam.</p>
                                </details>
                                <details
                                    class="w-full text-lg shadow-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                                    data-aos="zoom-in-up">
                                    <summary class="px-4 py-6 text-lg focus:outline-none focus-visible:ri font-medium">
                                        Apa ada
                                        diskon yang
                                        tersedia?</summary>
                                    <p class="px-4 py-6 pt-0 ml-4 text-lg -mt-4 dark:text-gray-400">Ada diskon khusus
                                        untuk anak
                                        yatim dan untuk yang ajak temen daftarnya.</p>
                                </details>
                                <details
                                    class="w-full shadow-lg text-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                                    data-aos="zoom-in-up">
                                    <summary class="px-4 py-6  text-lg focus:outline-none focus-visible:ri font-medium">
                                        Apa yang
                                        membedakan Edulink dari online course lainnya?</summary>
                                    <p class="px-4 py-6 pt-0 ml-4 text-lg -mt-4 dark:text-gray-400">Edulink satu-satunya
                                        online course yang menyediakan les online untuk siswa SMA bidang IPA dan IPS
                                        dengan program full konsultasi serta garansi cashback 100%</p>
                                </details>
                                <details
                                    class="w-full shadow-lg text-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                                    data-aos="zoom-in-up">
                                    <summary class="px-4 py-6  text-lg focus:outline-none focus-visible:ri font-medium">
                                        Bagaimana
                                        Edulink bisa meningkatkan prestasi belajar muridnya?</summary>
                                    <p class="px-4 py-6 pt-0 ml-4 text-lg -mt-4 dark:text-gray-400">Edulink selalu
                                        berupaya meningkatkan pencapaian akademis para siswa melalui penyelenggaraan
                                        pembelajaran yang fleksibel. Murid dapat mengakses fitur-fitur yang dirancang
                                        untuk memastikan pembelajaran berlangsung dengan nyaman. Edullink menerapkan
                                        metode-metode cerdas yang mempercepat murid dalam memahami materi pelajaran dan
                                        menyelesaikan tugas.</p>
                                </details>
                                <details
                                    class="w-full shadow-lg text-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                                    data-aos="zoom-in-up">
                                    <summary class="px-4 py-6  text-lg focus:outline-none focus-visible:ri font-medium">
                                        Bagaimana
                                        prosedur pendaftaran di Edulink?</summary>
                                    <p class="px-4 py-6 pt-0 ml-4 text-lg -mt-4 dark:text-gray-400">Pilih program yang
                                        anda inginkan kemudian klik “daftar program” pada tombol diatas, isi form dan
                                        lakukan pembayaran maksimal 1x24 jam</p>
                                </details>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="w-full"
                    style="background-image: url({{ asset('assets/images/cloud2.png') }});background-size: cover;background-position:top"
                    data-aos="fade-up">
                    <div class="max-w-screen-xl mx-auto px-4 m sm:px-6 lg:px-0 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12"
                        data-aos="zoom-in-up">
                        <h1 style="padding-top:3rem"
                            class="font-extrabold text-transparent text-center pb-10 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                            Profesional Mentor
                        </h1>
                        <hr class="w-72 h-2 mx-auto bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700"
                            style="margin-top:-20px;">
                        <swiper-container class="mySwiper h-64" pagination="true" pagination-clickable="true"
                            space-between="30" slides-per-view="3">
                            <swiper-slide class="bg-transparent">
                                <div class="group relative rounded-2xl shadow-2xl max-w-sm" style="margin-left:130px">
                                    <div
                                        class="flex flex-col items-center w-full max-w-xs p-4 bg-white rounded-3xl md:flex-row">
                                        <div class="-mt-28 md:-my-16 md:-ml-32 overflow-hidden rounded-full h-48 w-48 border-8 border-white"
                                            style="clip-path: circle(50% at 50% 50%)">
                                            <img class="object-cover h-full w-full" src="assets/images/profile1.jpeg"
                                                alt="Ahmed Kamel" />
                                        </div>
                                        <div class="flex flex-col space-y-4">
                                            <div class="flex flex-col mx-6 items-center md:items-start">
                                                <h2 class="text-xl font-bold">Cha Eun Woo</h2>
                                                <p class="text-base font-medium text-gray-400">Kimia S1 ITS</p>
                                            </div>
                                            <div
                                                class="flex items-center mx-6 justify-center space-x-3 md:justify-start">
                                                <a href="https://twitter.com/ak_kamona" target="_blank"
                                                    class="transition-transform transform hover:scale-125">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg aria-hidden="true" class="w-8 h-8 text-blue-500"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <a href="https://github.com/Kamona-WD" target="_blank"
                                                    class="transition-transform transform hover:scale-125">
                                                    <span class="sr-only">Github</span>
                                                    <svg aria-hidden="true" class="w-8 h-8 text-black"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>
                            <swiper-slide class="bg-transparent">
                                <div class="group relative rounded-2xl shadow-2xl max-w-sm" style="margin-left:130px">
                                    <div
                                        class="flex flex-col items-center w-full max-w-xs p-4 bg-white rounded-3xl md:flex-row">
                                        <div class="-mt-28 md:-my-16 md:-ml-32 overflow-hidden rounded-full h-48 w-48 border-8 border-white"
                                            style="clip-path: circle(50% at 50% 50%)">
                                            <img class="object-cover h-full w-full" src="assets/images/profile2.jpg"
                                                alt="Ahmed Kamel" />
                                        </div>
                                        <div class="flex flex-col space-y-4">
                                            <div class="flex flex-col mx-6 items-center md:items-start">
                                                <h2 class="text-xl font-bold">Mark Lee</h2>
                                                <p class="text-base font-medium text-gray-400">Fisika S1 UGM</p>
                                            </div>
                                            <div
                                                class="flex items-center mx-6 justify-center space-x-3 md:justify-start">
                                                <a href="https://twitter.com/ak_kamona" target="_blank"
                                                    class="transition-transform transform hover:scale-125">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg aria-hidden="true" class="w-8 h-8 text-blue-500"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <a href="https://github.com/Kamona-WD" target="_blank"
                                                    class="transition-transform transform hover:scale-125">
                                                    <span class="sr-only">Github</span>
                                                    <svg aria-hidden="true" class="w-8 h-8 text-black"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>
                            <swiper-slide class="bg-transparent">
                                <div class="group relative rounded-2xl shadow-2xl max-w-sm" style="margin-left:130px">
                                    <div
                                        class="flex flex-col items-center w-full max-w-xs p-4 bg-white rounded-3xl md:flex-row">
                                        <div class="-mt-28 md:-my-16 md:-ml-32 overflow-hidden rounded-full h-48 w-48 border-8 border-white"
                                            style="clip-path: circle(50% at 50% 50%)">
                                            <img class="object-cover h-full w-full" src="assets/images/profile3.jpg"
                                                alt="Ahmed Kamel" />
                                        </div>
                                        <div class="flex flex-col space-y-4">
                                            <div class="flex flex-col mx-6 items-center md:items-start">
                                                <h2 class="text-xl font-bold">Kentaro</h2>
                                                <p class="text-base font-medium text-gray-400">Biologi S1 ITS</p>
                                            </div>
                                            <div
                                                class="flex items-center mx-6 justify-center space-x-3 md:justify-start">
                                                <a href="https://twitter.com/ak_kamona" target="_blank"
                                                    class="transition-transform transform hover:scale-125">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg aria-hidden="true" class="w-8 h-8 text-blue-500"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <a href="https://github.com/Kamona-WD" target="_blank"
                                                    class="transition-transform transform hover:scale-125">
                                                    <span class="sr-only">Github</span>
                                                    <svg aria-hidden="true" class="w-8 h-8 text-black"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>
                            <swiper-slide class="bg-transparent">
                                <div class="group relative rounded-2xl shadow-2xl max-w-sm" style="margin-left:130px">
                                    <div
                                        class="flex flex-col items-center w-full max-w-xs p-4 bg-white rounded-3xl md:flex-row">
                                        <div class="-mt-28 md:-my-16 md:-ml-32 overflow-hidden rounded-full h-48 w-48 border-8 border-white"
                                            style="clip-path: circle(50% at 50% 50%)">
                                            <img class="object-cover h-full w-full" src="assets/images/profile4.jpeg"
                                                alt="Ahmed Kamel" />
                                        </div>
                                        <div class="flex flex-col space-y-4">
                                            <div class="flex flex-col mx-6 items-center md:items-start">
                                                <h2 class="text-xl font-bold">Haechan</h2>
                                                <p class="text-base font-medium text-gray-400">Matematika S1 ITS</p>
                                            </div>
                                            <div
                                                class="flex items-center mx-6 justify-center space-x-3 md:justify-start">
                                                <a href="https://twitter.com/ak_kamona" target="_blank"
                                                    class="transition-transform transform hover:scale-125">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg aria-hidden="true" class="w-8 h-8 text-blue-500"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <a href="https://github.com/Kamona-WD" target="_blank"
                                                    class="transition-transform transform hover:scale-125">
                                                    <span class="sr-only">Github</span>
                                                    <svg aria-hidden="true" class="w-8 h-8 text-black"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>
                        </swiper-container>
                    </div>
                </section>

                <footer class="px-4 -my-2 bg-[#00ffff] font-[Fredoka]">
                    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                        <div class="md:flex md:justify-between">
                            <div class="mb-6 md:mb-0">
                                <a href="http://127.0.0.1:8000/" class="flex items-center">
                                    <img src="assets/images/edulink.png" class="h-8 me-3" alt="FlowBite Logo" />
                                </a>
                            </div>
                            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                                <div>
                                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                        Resources</h2>
                                    <ul class="text-black font-medium">
                                        <li class="mb-4">
                                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                        </li>
                                        <li>
                                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                        Follow us</h2>
                                    <ul class="text-black font-medium">
                                        <li class="mb-4">
                                            <a href="https://github.com/themesberg/flowbite"
                                                class="hover:underline ">Github</a>
                                        </li>
                                        <li>
                                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal
                                    </h2>
                                    <ul class="text-black font-medium">
                                        <li class="mb-4">
                                            <a href="#" class="hover:underline">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="my-6 h-2 border-none rounded-full bg-transparent sm:mx-auto lg:my-8" />
                        <div class="sm:flex sm:items-center sm:justify-between">
                            <span class="text-sm font-medium text-black sm:text-center">Copyright <script>
                                    document.write(new Date().getFullYear());
                                </script><a href="http://127.0.0.1:8000/" class="hover:underline"> EduLink</a>. All
                                Rights
                                Reserved.
                            </span>
                            <div class="flex mt-4 sm:justify-center sm:mt-0">
                                <a href="#" class="text-black">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd"
                                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Facebook page</span>
                                </a>
                                <a href="#" class="text-black ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 21 16">
                                        <path
                                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                                    </svg>
                                    <span class="sr-only">Discord community</span>
                                </a>
                                <a href="#" class="text-black ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 17">
                                        <path fill-rule="evenodd"
                                            d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Twitter page</span>
                                </a>
                                <a href="#" class="text-black ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">GitHub account</span>
                                </a>
                                <a href="#" class="text-black ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Dribbble account</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <div class="fixed bottom-20 left-10 z-10">
            <button id="to-top-button" onclick="goToTop()" title="Go To Top"
                class="hidden fixed z-90 border-0 w-16 h-16 rounded-full drop-shadow-md bg-gradient-to-r from-purple-400 to-pink-600 text-white text-3xl font-bold">&uarr;</button>
        </div>

        <div class="fixed bottom-10 right-10 z-10">
            <a title="Chat Whatsapp" href="{{url('/login')}}" target="_blank"
                class="block rounded-full transition-all transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center lg:w-full lg:h-24 w-full h-24"
                    src="{{ asset('assets/images/order.png') }}" alt="Saya mau pesan">
            </a>
        </div>

    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const movingImage = document.getElementById('movingImage');
    const container = document.getElementById('app');

    document.addEventListener('mousemove', function(event) {
        const containerRect = container.getBoundingClientRect();
        const maxX = containerRect.width - movingImage.clientWidth;
        const maxY = containerRect.height - movingImage.clientHeight;

        // Calculate the percentage of mouse position within the container
        const percentX = (event.clientX - containerRect.left) / containerRect.width;
        const percentY = (event.clientY - containerRect.top) / containerRect.height;

        // Calculate new coordinates within the container boundaries
        const newX = Math.min(Math.max(percentX * maxX, 0), maxX);
        const newY = Math.min(Math.max(percentY * maxY, 0), maxY);

        // Update the image position based on mouse coordinates
        movingImage.style.transform = `translate(${newX}px, ${newY}px)`;
    });
});


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