<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-body">
    {{-- nav section --}}
    <nav class="sticky top-0 z-30 px-4 py-4 bg-white shadow-md md:px-20">
        <div class="container relative flex flex-row items-center justify-between">
            <div class="">
                <img src="{{ asset('img/logo/MAIN LOGO.png') }}" class="h-8" alt="logo deftzone">
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="p-2 " type="button">
                    <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
                    <span class="transition duration-300 ease-in-out hamburger-line"></span>
                    <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
                </button>
            </div>
            <ul id="nav-menu"
                class="absolute flex-row  w-screen h-screen lg:w-auto lg:h-auto hidden bg-white/95 top-[70px]  md:top-0 md:relative md:items-center md:flex">
                <li class="mr-5 text-base font-semibold group"><a class="flex py-2 mx-8 md:mx-0 md:py-0"
                        href="">HOME</a></li>
                <li class="mr-5 text-base font-semibold group"><a class="flex py-2 mx-8 md:mx-0 md:py-0"
                        href="">PRICING</a></li>
                <li class="mr-5 text-base font-semibold group"><a class="flex py-2 mx-8 md:mx-0 md:py-0"
                        href="">PORTFOLIO</a></li>
                <li class="mr-5 text-base font-semibold group"><a class="flex py-2 mx-8 md:mx-0 md:py-0"
                        href="">BLOG</a></li>
                <li class="mr-5 text-base font-semibold group"><a class="flex py-2 mx-8 md:mx-0 md:py-0"
                        href="">CONTACT</a></li>
                <div class="flex">
                    <button class="flex px-4 py-3 mx-8 md:mx-0 text-white rounded bg-blue-950">HIRE US</button>
                </div>
            </ul>
        </div>
    </nav>


    {{-- Hero section --}}
    <div class="min-h-screen bg-no-repeat bg-cover bg-mobile-header md:bg-header">
        <div class="container flex flex-row items-center justify-center px-20 py-32 md:justify-end">
            <div class="flex flex-col items-start gap-5">
                <div class="text-3xl font-bold text-left text-white md:text-6xl md:whitespace-normal md:text-blue-950">
                    Buat Website <br> Sesuai Kebutuhan <br> Bisnis
                    Anda
                </div>
                <div class="text-base font-medium text-left text-white align-text-bottom md:text-lg md:text-blue-950">
                    Team Deftzone siap membantu
                    mengembangkan
                    Platform Digital
                    <br>
                    yang Mendukung Pertumbuhan Bisnis Anda
                </div>
                <div class="flex flex-row gap-5">
                    <div>
                        <button
                            class="py-4 text-lg font-medium text-white bg-blue-300 rounded md:bg-white px-7 md:text-blue-950">GET
                            STARTED</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-2.5 px-6 py-10 mt-5 items-center">
        <div class="text-4xl font-bold text-center md:text-left text-blue-950">Why Choose Us ?</div>
        <div class="text-base font-normal text-center md:text-lg md:font-medium text-blue-950">Deftzone adalah mitra
            terpercaya bagi
            banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik klien.
        </div>
    </div>

    <section id="chooseUs" class="container">
        <div class="flex flex-col justify-center gap-10 px-10 mb-10 md:px-20 md:flex-row">
            <div
                class="flex-1 px-5 py-5 text-center border border-dashed rounded-md shadow-md border-black/50 hover:border-blue-500 bg-slate-50">
                <div class="flex items-center justify-center mb-5">
                    <div class="p-3 text-blue-600 border-2 border-blue-400 rounded-full">
                        <img src="{{ asset('img/icons/fluent_people-team-20-regular.svg') }}" alt="">
                    </div>
                </div>
                <div class="mb-5 text-xl font-semibold text-blue-950">Team Berpengalaman</div>
                <div class="mx-auto text-sm font-normal text-center md:text-base text-blue-950">Deftzone adalah mitra
                    terpercaya
                    bagi
                    banyak perusahaan dalam mengembangkan solusi web yang inovatif dan sesuai dengan kebutuhan unik
                    klien.
                </div>
            </div>
            <div
                class="flex-1 px-5 py-5 text-center border border-dashed rounded-md shadow-md border-black/50 hover:border-blue-500 bg-slate-50">
                <div class="flex items-center justify-center mb-5">
                    <div class="p-3 text-blue-600 border-2 border-blue-400 rounded-full">
                        <img src="{{ asset('img/icons/fluent_calligraphy-pen-20-regular.svg') }}" alt="">
                    </div>
                </div>
                <div class="mb-5 text-xl font-semibold text-blue-950">Desain Menarik </div>
                <p class="mx-auto text-sm font-normal text-center md:text-base text-blue-950">Desain menarik dan
                    responsif untuk
                    pengalaman optimal.
                </p>
            </div>
            <div
                class="flex-1 px-5 py-5 text-center border border-dashed rounded-md shadow-md border-black/50 hover:border-blue-500 bg-slate-50">
                <div class="flex items-center justify-center mb-5">
                    <div class="p-3 text-blue-600 border-2 border-blue-400 rounded-full">
                        <img src="{{ asset('img/icons/fluent_chat-bubbles-question-16-regular.svg') }}" alt="">
                    </div>
                </div>
                <div class="mb-5 text-xl font-semibold text-blue-950">Pendekatan Berbasis Klien</div>
                <p class="mx-auto text-sm font-normal text-center md:text-base text-blue-950">Kami meyakini bahwa setiap
                    klien
                    adalah unik, maka kami mengadopsi pendekatan berbasis klien. Dengan mendengarkan kebutuhan Anda,
                    kami ciptakan solusi sesuai tujuan dan anggaran Anda.
                </p>
            </div>
        </div>
        <div class="flex flex-col justify-center gap-10 px-10 mb-10 md:px-20 md:flex-row">
            <div
                class="flex-1 px-5 py-5 text-center border border-dashed rounded-md shadow-md border-black/50 hover:border-blue-500 bg-slate-50">
                <div class="flex items-center justify-center mb-5">
                    <div class="p-3 text-blue-600 border-2 border-blue-400 rounded-full">
                        <img src="{{ asset('img/icons/fluent_view-desktop-mobile-24-regular.svg') }}" alt="">
                    </div>
                </div>
                <div class="mb-5 text-xl font-semibold text-blue-950">Responsif & Mobile-Friendly</div>
                <p class="mx-auto text-sm font-normal text-center md:text-base text-blue-950">Semakin banyak akses
                    internet
                    melalui perangkat mobile. Kami prioritaskan responsif dan mobile-friendly dalam setiap proyek untuk
                    pengalaman pengguna optimal.
                </p>
            </div>
            <div
                class="flex-1 px-5 py-5 text-center border border-dashed rounded-md shadow-md border-black/50 hover:border-blue-500 bg-slate-50">
                <div class="flex items-center justify-center mb-5">
                    <div class="p-3 text-blue-600 border-2 border-blue-400 rounded-full">
                        <img src="{{ asset('img/icons/fluent_window-dev-edit-16-regular.svg') }}" alt="">
                    </div>
                </div>
                <div class="mb-5 text-xl font-semibold text-blue-950">Custom</div>
                <p class="mx-auto text-sm font-normal text-center md:text-base text-blue-950">Meskipun kami memanfaatkan
                    framework
                    dan teknologi canggih, kami juga terampil dalam mengembangkan solusi kustom yang sesuai dengan
                    kebutuhan spesifik Anda.
                </p>
            </div>
        </div>
    </section>


    <section id="pricing" class="container">
        <div class="flex px-20 py-12 md:mt-14 ">
            <div class="text-4xl font-bold text-center text-blue-950 ">PRICING</div>
        </div>

        <div class="flex flex-wrap justify-center gap-10 px-10 py-6 md:px-20">
            <div class="flex-1 p-1 text-center shadow-md bg-slate-50">
                <h2 class="py-1 font-bold text-white bg-blue-400">Company Profile</h2>
                <div class="px-5 py-8">
                    <div class="mb-5">
                        <div class="text-base font-normal">Start From: </div>
                        <div class="text-[32px] font-semibold text-blue-950">Rp 1.000.000</div>
                    </div>
                    <div class="mb-5">
                        <button
                            class="w-full py-4 mb-5 text-lg font-bold text-blue-500 transition-all duration-150 ease-linear bg-transparent border border-blue-500 border-solid rounded outline-none hover:bg-blue-500 hover:text-white active:bg-blue-600 px-7 focus:outline-none"
                            type="button">
                            Get Started
                        </button>
                    </div>
                    <div class="mb-5">
                        <div class="mb-1 text-base font-semibold text-left uppercase">Features</div>
                        <div class="mb-5 text-sm font-normal text-left">That package includes: </div>
                        <ul class="space-y-5">
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Home Page</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">About Us Page</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Service Page</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Contact Page</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex-1 p-1 text-center shadow-md bg-slate-50">
                <h2 class="py-1 font-bold text-white bg-blue-600">E-Commerce</h2>
                <div class="px-5 py-8">
                    <div class="mb-5">
                        <div class="text-base font-normal">Start From: </div>
                        <div class="text-[32px] font-semibold text-blue-950">Rp 2.000.000</div>
                    </div>
                    <div class="mb-5">
                        <button
                            class="w-full py-4 mb-5 text-lg font-bold text-blue-500 transition-all duration-150 ease-linear bg-transparent border border-blue-500 border-solid rounded outline-none hover:bg-blue-500 hover:text-white active:bg-blue-600 px-7 focus:outline-none"
                            type="button">
                            Get Started
                        </button>
                    </div>
                    <div class="mb-5">
                        <div class="mb-1 text-base font-semibold text-left uppercase">Features</div>
                        <div class="mb-5 text-sm font-normal text-left">That package includes: </div>
                        <ul class="space-y-5">
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal text-left">Home Page with Products Showcase
                                </div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Product Listing Page</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Product Detail Page</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Shopping Cart</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Checkout Page</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex-1 p-1 text-center shadow-md bg-slate-50">
                <h2 class="py-1 font-bold text-white bg-gray-500">Custom</h2>
                <div class="px-5 py-8">
                    <div class="mb-5">
                        <div class="text-base font-normal">Start From: </div>
                        <div class="text-[32px] font-semibold text-blue-950">Negotiable</div>
                    </div>
                    <div class="mb-5">
                        <button
                            class="w-full py-4 mb-5 text-lg font-bold text-blue-500 transition-all duration-150 ease-linear bg-transparent border border-blue-500 border-solid rounded outline-none hover:bg-blue-500 hover:text-white active:bg-blue-600 px-7 focus:outline-none"
                            type="button">
                            Talk to Us
                        </button>
                    </div>
                    <div class="mb-5">
                        <div class="mb-1 text-base font-semibold text-left uppercase">Features</div>
                        <div class="mb-5 text-sm font-normal text-left">That package includes: </div>
                        <ul class="space-y-5">
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Custom Design Website</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal">Responsive Layout</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal text-left">Custom Functionality as per your
                                    requirements</div>
                            </li>
                            <li class="flex flex-row items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div class="text-base font-normal text-left">Integration with Backend Systems</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="client" class="container">
        <div class="flex flex-col gap-2.5 px-20 py-12 items-center">
            <div class="text-4xl font-bold text-center text-blue-950">Mitra dan Client Kami</div>
            <div class="text-sm font-medium text-center md:text-lg text-blue-950">Deftzone adalah mitra terpercaya bagi
                banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik
                klien.
            </div>
        </div>

        <div class="flex flex-row justify-center gap-16 px-20 py-5 mb-6 overflow-x-auto">
            <img src="{{ asset('img/logo/Ndoroarum.png') }}" class="max-h-8" alt="">
            <img src="{{ asset('img/logo/lch.png') }}" class="max-h-8" alt="">
            <img src="{{ asset('img/logo/lgh.png') }}" class="max-h-8" alt="">
            <img src="{{ asset('img/logo/gh.png') }}" class="max-h-8" alt="">
            <img src="{{ asset('img/logo/villa.png') }}" class="max-h-8" alt="">
        </div>
    </section>

    <section id="" class="bg-[#10405A] mb-5 ">
        <div class="container flex flex-row gap-24 px-8 py-16 md:px-36 justify-items-center">
            <div class="w-full ">
                <h3 class="mb-1 text-3xl font-semibold text-white whitespace-normal md:text-5xl">Konsultasikan
                    kebutuhan website
                    UMKM dan Instansi Anda
                </h3>
                <hr class="w-64 h-1 bg-yellow-500 border-0 rounded mb-7 dark:bg-gray-700">
                <p class="mb-6 text-base text-white">Lets embody your beautiful ideas together, simplify the way you
                    visualize
                    your
                    next big things.</p>
                <button class="flex items-center w-auto py-4 text-white bg-green-500 rounded-md px-7" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    Konsultasi Gratis
                </button>
            </div>
            <div class="w-full">
                <img src="{{ asset('img/illustration/girl.png') }}" alt="">
            </div>
        </div>
    </section>

    <section id="blog" class="container">
        <div class="flex justify-center px-20 py-12 mt-14">
            <div class="text-4xl font-bold text-center">Deftzone <span class="text-blue-400">Blog</span></div>
        </div>

        <div class="grid items-center justify-center grid-cols-1 gap-10 px-10 mb-5 md:grid-cols-3">
            <div class="w-full overflow-hidden rounded-md shadow-lg">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}"
                    alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <a href=""><span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md">
                                Technology</span></a>
                        <span class="text-xs">August 24, 2023</span>
                    </div>
                </div>

                <h2 class="px-3 py-1 font-bold ">The Impact of Technology on
                    the Workplace: How Technology
                    is
                    Changing
                </h2>

                <div class="flex-col gap-3 p-5">
                    <div class="flex flex-row items-center gap 2">
                        <img class="" src="{{ asset('img/illustration/avatar.png') }}" alt="">
                        <span class="px-3 py-1 text-xs text-blue-400 rounded-md">Jason Francisco</span>
                    </div>
                </div>
            </div>
            <div class="w-full overflow-hidden rounded-md shadow-lg">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}"
                    alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <a href=""><span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md">
                                Technology</span></a>
                        <span class="text-xs">August 24, 2023</span>
                    </div>
                </div>

                <h2 class="px-3 py-1 font-bold ">The Impact of Technology on
                    the Workplace: How Technology
                    is
                    Changing
                </h2>

                <div class="flex-col gap-3 p-5">
                    <div class="flex flex-row items-center gap 2">
                        <img class="" src="{{ asset('img/illustration/avatar.png') }}" alt="">
                        <span class="px-3 py-1 text-xs text-blue-400 rounded-md">Jason Francisco</span>
                    </div>
                </div>
            </div>
            <div class="w-full overflow-hidden rounded-md shadow-lg">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}"
                    alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <a href=""><span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md">
                                Technology</span></a>
                        <span class="text-xs">August 24, 2023</span>
                    </div>
                </div>

                <h2 class="px-3 py-1 font-bold ">The Impact of Technology on
                    the Workplace: How Technology
                    is
                    Changing
                </h2>

                <div class="flex-col gap-3 p-5">
                    <div class="flex flex-row items-center gap 2">
                        <img class="" src="{{ asset('img/illustration/avatar.png') }}" alt="">
                        <span class="px-3 py-1 text-xs text-blue-400 rounded-md">Jason Francisco</span>
                    </div>
                </div>
            </div>
            <div class="w-full overflow-hidden rounded-md shadow-lg">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}"
                    alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <a href=""><span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md">
                                Technology</span></a>
                        <span class="text-xs">August 24, 2023</span>
                    </div>
                </div>

                <h2 class="px-3 py-1 font-bold ">The Impact of Technology on
                    the Workplace: How Technology
                    is
                    Changing
                </h2>

                <div class="flex-col gap-3 p-5">
                    <div class="flex flex-row items-center gap 2">
                        <img class="" src="{{ asset('img/illustration/avatar.png') }}" alt="">
                        <span class="px-3 py-1 text-xs text-blue-400 rounded-md">Jason Francisco</span>
                    </div>
                </div>
            </div>
            <div class="w-full overflow-hidden rounded-md shadow-lg">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}"
                    alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <a href=""><span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md">
                                Technology</span></a>
                        <span class="text-xs">August 24, 2023</span>
                    </div>
                </div>

                <h2 class="px-3 py-1 font-bold ">The Impact of Technology on
                    the Workplace: How Technology
                    is
                    Changing
                </h2>

                <div class="flex-col gap-3 p-5">
                    <div class="flex flex-row items-center gap 2">
                        <img class="" src="{{ asset('img/illustration/avatar.png') }}" alt="">
                        <span class="px-3 py-1 text-xs text-blue-400 rounded-md">Jason Francisco</span>
                    </div>
                </div>
            </div>
            <div class="w-full overflow-hidden rounded-md shadow-lg">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}"
                    alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <a href=""><span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md">
                                Technology</span></a>
                        <span class="text-xs">August 24, 2023</span>
                    </div>
                </div>

                <h2 class="px-3 py-1 font-bold ">The Impact of Technology on
                    the Workplace: How Technology
                    is
                    Changing
                </h2>

                <div class="flex-col gap-3 p-5">
                    <div class="flex flex-row items-center gap 2">
                        <img class="" src="{{ asset('img/illustration/avatar.png') }}" alt="">
                        <span class="px-3 py-1 text-xs text-blue-400 rounded-md">Jason Francisco</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center p-5 mt-14">
            <button
                class="px-4 py-4 mb-5 mr-1 text-xs font-bold text-blue-500 transition-all duration-150 ease-linear bg-transparent border border-gray-300 border-solid rounded outline-none hover:bg-blue-500 hover:text-white active:bg-blue-600 focus:outline-none"
                type="button">
                Load More
            </button>
        </div>
    </section>

    {{-- CTA  --}}
    <div class="container -mb-40 ">
        <div class="p-6 md:p-16 relative rounded-3xl text-center bg-[#00BBA5] text-white">
            <h3 class="mb-6 text-4xl font-bold">Grow your Bussiness with Deftzone</h3>
            <p class="mb-6 text-base font-semibold">No payment required until you get your solution</p>
            <div class="flex justify-center gap-3">
                <a href="#_" class="relative px-6 py-3 text-black group">
                    <span
                        class="absolute inset-0 w-full h-full transition duration-300 ease-out transform translate-x-1.5 translate-y-1.5 bg-white rounded group-hover:translate-x-0 group-hover:translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full border-2 border-black rounded"></span>
                    <span class="relative font-medium">Let's Talk</span>
                </a>
            </div>
            <div class="absolute hidden md:block right-20 top-14">
                <img src="{{ asset('img/icons/wave-r.svg') }}" alt="">
            </div>
            <div class="absolute hidden md:block left-20 bottom-14 ">
                <img class="stroke-white" src="{{ asset('img/icons/wave-l.svg') }}" alt="">
            </div>
        </div>
    </div>

    <!-- Footer container -->
    <footer class="bg-[#023A51] text-center text-white">
        <div class="container flex flex-col justify-end py-10 text-left">
            <div class="grid grid-cols-1 gap-8 px-10 md:grid-cols-3 mt-96">
                <!-- TW elements section -->
                <div class="">
                    <hr class="w-64 h-1 bg-yellow-500 border-0 rounded mb-7 dark:bg-gray-700">
                    <h6 class="flex justify-start mb-4 font-semibold uppercase">
                        About
                    </h6>
                    <p class="mb-10 text-base ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatum nihil ipsa minima
                        ullam enim dolores atque architecto nemo est possimus praesentium, sapiente ducimus aut dicta
                        itaque ipsum deserunt labore!
                    </p>
                    <div class="flex flex-col">
                        <span>Email : contact@deftzone.id</span>
                        <span>Phone : +62 8177 4171 958</span>
                    </div>
                    <div class="flex flex-row gap-5 mt-5">
                        <img src="{{ asset('img/logo/ig.png') }}" class="max-h-6" alt="">
                        <img src="{{ asset('img/logo/facebook.png') }}" class="max-h-6" alt="">
                        <img src="{{ asset('img/logo/twitter.png') }}" class="max-h-6" alt="">
                        <img src="{{ asset('img/logo/youtube.png') }}" class="max-h-6" alt="">
                        <img src="{{ asset('img/logo/footer.png') }}" class="max-h-6" alt="">
                    </div>
                </div>
                <!-- Useful links section -->
                <div class="mr-20 text-left">
                    <h6 class="mb-4 font-semibold uppercase">
                        Quick links
                    </h6>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-200">Home</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-200">About</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-200">Blog</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-200">Credit Page</a>
                    </p>
                </div>
                <!-- Category section -->
                <div class="">
                    <h6 class="flex justify-start mb-4 font-semibold uppercase">
                        Category
                    </h6>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-200">Angular</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-200">React</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-neutral-200">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-neutral-200">Laravel</a>
                    </p>
                </div>
            </div>
        </div>


        <!--Copyright section-->
        <div class="bg-[#10405A] p-6 text-center dark:bg-neutral-700">
            CV Deft Zone Indonesia <span> © 2023 </span>. All rights reserved.
        </div>
    </footer>


    <script>
        const mobileMenu = document.getElementById('mobile-menu-button');
        const navMenu = document.getElementById('nav-menu');

        mobileMenu.addEventListener('click', function() {
            mobileMenu.classList.toggle('mobile-menu-active');
            navMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
