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
    <link rel='icon' type="image/x-icon" href='{{ asset('assets/images/logo2.ico')}}'>
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
    <div class="h-screen md:flex">
        <div class="relative overflow-hidden shadow-2xl md:flex w-1/2 bg-gradient-to-r from-fuchsia-600 to-violet-800 i justify-around items-center hidden"
            style="text-align:-webkit-center">
            <div>
                <a href="/">
                    <img src="{{ asset('assets/images/edulink2.png') }}" alt="Nefa Logo"
                        class="w-72 items-center xl:w-72">
                </a>
                <p class="text-white text-xl text-center font-[Fredoka] mt-1">Rahasia Keberhasilan Para Ahli Industri
                </p>
            </div>
            <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
            </div>
            <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
            </div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-4 items-center">
            <form role="form mx-5" method="POST" action="{{ route('login') }}" class="w-full max-w-lg font-[Fredoka]">
                @csrf
                <h1 style="padding-top:3rem"
                    class="font-extrabold text-transparent text-center pb-10 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
                    Login ke EduLink
                </h1>
                @if(session('success'))
                <div class="alert alert-success mb-5" style="color:white;font-weight:bold" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-warning mb-5" style="color:white;font-weight:bold" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <div class="flex flex-wrap mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                            for="grid-first-name">
                            Email </label>
                        <input type="email" name="email"
                            class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name">
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                            for="grid-password">
                            Password
                        </label>
                        <input type="password" name="password"
                            class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password">
                    </div>
                </div>
                <div class="text-center mx-3 items-center">
                    <button type="submit"
                        class="shadow bg-purple-500 w-full my-4 mx-auto hover:bg-purple-400 w-24 focus:shadow-outline focus:outline-none text-white font-bold py-4 rounded-lg">
                        Login
                    </button>
                </div>
                <div class="mx-3 text-white">
                    Belum punya akun? <a href="/register" class="text-violet-300"> Daftar disini</a>
                </div>
            </form>
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