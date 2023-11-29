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
    <script type="text/javascript" async="" src=""></script>
    <link rel='icon' type="image/x-icon" href='{{asset(' assets/images/logo2.ico')}}'>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/function.js') }}"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

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
                <div class="absolute top-0 left-0 w-full h-[130vh] sm:h-[225vh] lg:h-[100vh]">
                </div>
                <nav
                    class="hover:shadow-xl fixed z-10 w-full text-neutral-800 bg-gradient-to-r from-[#0e1737] to-[#0e183b] shadow-2xl hover:bg-[#181818] duration-500">
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
                                    src="{{ asset('assets/img/favicon.png') }}" alt="Nefa Logo"
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

                <div class="flex flex-col">
                    @yield('content')
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

                <footer class="px-4 -my-2 bg-gradient-to-r from-[#0e1737] to-[#0e183b] font-[Fredoka]">
                    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                        <div class="md:flex md:justify-between">
                            <div class="mb-6 md:mb-0">
                                <a href="http://127.0.0.1:8000/" class="flex items-center">
                                    <img src="assets/images/edulink2.png" class="h-8 me-3" alt="FlowBite Logo" />
                                </a>
                            </div>
                            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                                <div>
                                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">
                                        Resources</h2>
                                    <ul class="text-white font-medium">
                                        <li class="mb-4">
                                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                        </li>
                                        <li>
                                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">
                                        Follow us</h2>
                                    <ul class="text-white font-medium">
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
                                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal
                                    </h2>
                                    <ul class="text-white font-medium">
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
                            <span class="text-sm font-medium text-white sm:text-center">Copyright <script>
                                    document.write(new Date().getFullYear());
                                </script><a href="http://127.0.0.1:8000/" class="hover:underline"> EduLink</a>. All
                                Rights
                                Reserved.
                            </span>
                            <div class="flex mt-4 sm:justify-center sm:mt-0">
                                <a href="#" class="text-white">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd"
                                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Facebook page</span>
                                </a>
                                <a href="#" class="text-white ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 21 16">
                                        <path
                                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                                    </svg>
                                    <span class="sr-only">Discord community</span>
                                </a>
                                <a href="#" class="text-white ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 17">
                                        <path fill-rule="evenodd"
                                            d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Twitter page</span>
                                </a>
                                <a href="#" class="text-white ms-5">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">GitHub account</span>
                                </a>
                                <a href="#" class="text-white ms-5">
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
    </div>
    {{--
    </div> --}}

    @yield('jquery')

    <script src="/js/tw-elements.umd.min.js"></script>
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
  window.addEventListener('load', function () {
  const loader = document.getElementById('loader');
  const content = document.getElementById('content');

  // Hide the loader and show the content when the page is fully loaded
  loader.style.display = 'none';
  content.style.display = 'block';
});
    </script>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      const filterValue = button.dataset.filter;

      // Rearrange the grid layout based on the filter
      portfolioItems.forEach(item => {
        if (filterValue === 'all' || item.classList.contains(filterValue)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
      // Get the current URL pathname (e.g., "/about_us")
      var currentPath = window.location.pathname;
  
  // Select all menu items and loop through them
  var menuItems = document.querySelectorAll('.menu li a');
  menuItems.forEach(function(item) {
    // Check if the link's href matches the current URL
    if (item.getAttribute('href') === currentPath) {
      item.classList.add('active'); // Add the 'active' class to the matching link
    }
  });
    </script>
    <script>
        var toTopButton = document.getElementById("to-top-button");
    
            // When the user scrolls down 200px from the top of the document, show the button
            window.onscroll = function () {
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    toTopButton.classList.remove("hidden");
                } else {
                    toTopButton.classList.add("hidden");
                }
            }
    
            // When the user clicks on the button, scroll to the top of the document
            function goToTop() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
    </script>

</body>

</html>