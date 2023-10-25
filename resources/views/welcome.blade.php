<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-body">
    {{-- nav section --}}
    <nav class="top-0 px-20 py-10 bg-white shadow-md ">
        <div class="container flex flex-row justify-between">
            <div class="">
                <img src="{{ asset('img/logo/MAIN LOGO.png') }}" class="h-12" alt="logo deftzone">
            </div>
            <div class="flex flex-row gap-5">
                <div class="mr-[50px] flex flex-row gap-10 items-center">
                    <div class="text-base font-semibold">HOME</div>
                    <div class="text-base font-semibold">PRICING</div>
                    <div class="text-base font-semibold">PORTOFOLIO</div>
                    <div class="text-base font-semibold">BLOG</div>
                    <div class="text-base font-semibold">CONTACT</div>
                </div>
                <div>
                    <button class="px-4 py-3 text-white rounded bg-blue-950">HIRE US</button>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero section --}}
    <div class="min-h-screen bg-no-repeat bg-cover bg-header">
        <div class="container flex flex-row items-center justify-end px-20 py-32">
            <div class="flex flex-col items-start gap-5">
                <div class="text-6xl font-bold text-left text-blue-950">Buat Website <br> Sesuai Kebutuhan <br> Bisnis
                    Anda
                </div>
                <div class="text-lg font-medium text-left align-text-bottom text-blue-950">Team Deftzone siap membantu
                    mengembangkan
                    Platform Digital
                    <br>
                    yang Mendukung Pertumbuhan Bisnis Anda
                </div>
                <div class="flex flex-row gap-5">
                    <div>
                        <button class="py-4 text-lg font-medium bg-white rounded px-7 text-blue-950">GET
                            STARTED</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-2.5 px-20 py-12 mt-5 items-center">
        <div class="text-4xl font-bold text-left text-blue-950">Why Choose Us ?</div>
        <div class="text-lg font-medium text-center text-blue-950">Deftzone adalah mitra terpercaya bagi
            banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik klien.
        </div>
    </div>

    <div class="container grid justify-center grid-cols-3 gap-10 px-20 py-6">
        <div class="px-5 py-5 min-h-[417px] text-center border border-black/50 bg-slate-50">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
            <div class="mb-5 text-xl">01</div>
            <div class="mb-5 text-xl font-semibold text-blue-950">Team Berpengalaman</div>
            <div class="text-base font-normal text-left text-blue-950">Deftzone adalah mitra terpercaya bagi
                banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik
                klien.
            </div>
        </div>
        <div class="px-5 py-5 min-h-[417px] text-center border border-black/50 bg-slate-50">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-12 h-12 mx-auto">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                    <path
                        d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                </svg>

            </div>
            <div class="mb-5 text-xl font-thin">02</div>
            <div class="mb-5 text-xl font-semibold text-blue-950">Design Menawan</div>
            <div class="text-base font-normal text-left text-blue-950">Desain menarik dan responsif untuk pengalaman
                optimal.
            </div>
        </div>
        <div class="px-5 py-5 min-h-[417px] text-center border border-black/50 bg-slate-50">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-12 h-12 mx-auto">
                    <path
                        d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                </svg>

            </div>
            <div class="mb-5 text-xl font-thin">01</div>
            <div class="mb-5 text-xl font-semibold text-blue-950">Pendekatan Bebasis Klien</div>
            <div class="text-base font-normal text-left text-blue-950">Kami meyakini bahwa setiap klien <br> adalah
                unik,
                maka kami mengadopsi <br> pendekatan berbasis klien. Dengan mendengarkan kebutuhan Anda, kami ciptakan
                solusi sesuai tujuan dan anggaran Anda.
            </div>
        </div>


        <div class="px-5 py-5 min-h-[417px] text-center border border-black/50 bg-slate-50">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
            <div class="mb-5 text-xl font-thin">01</div>
            <div class="mb-5 text-xl font-semibold text-blue-950">Team Berpengalaman</div>
            <div class="text-base font-normal text-left text-blue-950">Deftzone adalah mitra terpercaya bagi
                banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik
                klien.
            </div>
        </div>
        <div class="px-5 py-5 min-h-[417px] text-center border border-black/50 bg-slate-50">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
            <div class="mb-5 text-xl font-thin">01</div>
            <div class="mb-5 text-xl font-semibold text-blue-950">Team Berpengalaman</div>
            <div class="text-base font-normal text-left text-blue-950">Deftzone adalah mitra terpercaya bagi
                banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik
                klien.
            </div>
        </div>

        <div class="relative min-h-[417px] text-center px-5 py-5">
            <div class="absolute transform -translate-y-1/2 -mx-28 top-1/2">
                <img src="{{ asset('img/illustration/g8.png') }}" class="w-full" alt="">
            </div>
        </div>
    </div>
    <section id="pricing" class="container">
        <div class="flex px-20 py-12 mt-14">
            <div class="text-4xl font-bold text-left text-blue-950">PRICING</div>
        </div>

        <div class="flex flex-wrap justify-center gap-10 px-20 py-6">
            <div class="flex-1 p-1 text-center shadow-md bg-slate-50">
                <h2 class="py-1 font-bold text-white bg-blue-400">Company Profile</h2>
                <div class="px-5 py-8">
                    <div class="mb-5">
                        <div class="text-base font-normal">Start From: </div>
                        <div class="text-[32px] font-semibold text-blue-950">Rp. 2.000.000</div>
                    </div>
                    <div class="mb-5">
                        <button
                            class="w-full py-4 mb-5 text-lg font-bold text-blue-500 transition-all duration-150 ease-linear bg-transparent border border-gray-500 border-solid rounded outline-none hover:bg-blue-500 hover:text-white active:bg-blue-600 px-7 focus:outline-none"
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
            <div class="flex-1 px-1 pt-1 text-center shadow-md bg-slate-50">
                <h2 class="py-1 mb-8 text-base font-bold text-white bg-blue-700">E-Commerce</h2>
                <div class="text-base font-normal">Start From: </div>
                <div class="text-[32px] font-semibold text-blue-950 mb-5">Rp. 2.000.000</div>
                <div class="mb-5">
                    <button
                        class="py-4 mb-5 mr-1 text-lg font-bold text-blue-500 transition-all duration-150 ease-linear bg-transparent border border-gray-500 border-solid rounded outline-none w-72 hover:bg-blue-500 hover:text-white active:bg-blue-600 px-7 focus:outline-none"
                        type="button">
                        Get Started
                    </button>
                </div>
                <div class="px-5 mb-1 text-base font-semibold text-left uppercase">Features</div>
                <div class="px-5 mb-5 text-sm font-normal text-left">That package includes: </div>
                <div class="flex flex-row items-center px-5 mb-5">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="text-base font-normal text-left">Home Page</div>
                </div>
                <div class="flex flex-row items-center px-5 mb-5">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="text-base font-normal text-left">About Us Page</div>
                </div>
                <div class="flex flex-row items-center px-5 mb-5">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="text-base font-normal text-left">Service Page</div>
                </div>
                <div class="flex flex-row items-center px-5 mb-5">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="text-base font-normal text-left">Contact Page</div>
                </div>
            </div>
            <div class="flex-1 px-1 pt-1 text-center shadow-md bg-slate-50">
                <h2 class="py-1 mb-8 text-base font-bold text-white bg-gray-500">Custom</h2>
                <div class="text-base font-normal">Start From: </div>
                <div class="text-[32px] font-semibold text-blue-950 mb-5">Negotiable</div>
                <div class="mb-5">
                    <button
                        class="text-blue-500 w-[300px] bg-transparent border border-solid border-gray-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold text-lg py-4 px-7 rounded outline-none focus:outline-none mr-1 mb-5 ease-linear transition-all duration-150"
                        type="button">
                        Get Started
                    </button>
                </div>
                <div class="px-5 mb-1 text-base font-semibold text-left uppercase">Features</div>
                <div class="px-5 mb-5 text-sm font-normal text-left">That package includes: </div>
                <div class="flex flex-row items-center px-5 mb-5">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="text-base font-normal text-left">Home Page</div>
                </div>
                <div class="flex flex-row items-center px-5 mb-5">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="text-base font-normal text-left">About Us Page</div>
                </div>
                <div class="flex flex-row items-center px-5 mb-5">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="text-base font-normal text-left">Service Page</div>
                </div>
                <div class="flex flex-row items-center px-5 mb-5">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <div class="text-base font-normal text-left">Contact Page</div>
                </div>
            </div>
        </div>
    </section>

    <section id="client">
        <div class="flex flex-col gap-2.5 px-20 py-12 items-center">
            <div class="text-4xl font-bold text-left text-blue-950">Mitra dan Client Kami</div>
            <div class="text-lg font-medium text-center text-blue-950">Deftzone adalah mitra terpercaya bagi
                banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik
                klien.
            </div>
        </div>

        <div class="flex flex-row justify-center gap-16 px-20 py-5 mb-6">
            <img src="{{ asset('img/logo/Ndoroarum.png') }}" class="max-h-8" alt="">
            <img src="{{ asset('img/logo/lch.png') }}" class="max-h-8" alt="">
            <img src="{{ asset('img/logo/lgh.png') }}" class="max-h-8" alt="">
            <img src="{{ asset('img/logo/gh.png') }}" class="max-h-8" alt="">
            <img src="{{ asset('img/logo/villa.png') }}" class="max-h-8" alt="">
        </div>
    </section>

    <section id="" class="bg-[#10405A] mb-5 ">
        <div class="container flex flex-row gap-24 py-16 px-36 justify-items-center">
            <div class="w-full ">
                <h3 class="mb-3 text-5xl font-semibold text-white whitespace-normal">Konsultasikan
                    kebutuhan website
                    UMKM dan Instansi Anda
                </h3>
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

    <section id="blog">
        <div class="flex justify-center px-20 py-12 mt-14">
            <div class="text-4xl font-bold">Deftzone <span class="text-blue-400">blog</span></div>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-10 mb-5">
            <div class="text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}" alt="">

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
            <div class="text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}" alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md"> Technology</span>
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
            <div class="text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}" alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md"> Technology</span>
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
            <div class="text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}" alt="">

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
            <div class="text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}" alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md"> Technology</span>
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
            <div class="text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
                <img class="object-cover w-full h-full" src="{{ asset('img/illustration/Rectangle 38.png') }}" alt="">

                <div class="flex-col gap-3 p-5">
                    <div class="flex items-center justify-between gap 2">
                        <span class="px-3 py-1 text-xs text-blue-400 bg-gray-200 rounded-md"> Technology</span>
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
            {{-- <button type="button">Load More</button> --}}
            <button
                class="px-4 py-4 mb-5 mr-1 text-xs font-bold text-blue-500 transition-all duration-150 ease-linear bg-transparent border border-gray-300 border-solid rounded outline-none hover:bg-blue-500 hover:text-white active:bg-blue-600 focus:outline-none"
                type="button">
                Load More
            </button>
        </div>
    </section>

    {{-- <div class="bg-[#023A51]">
        <div class="flex flex-row px-20 items-end py-16  justify-between h-[750px] text-white">
            <div class="w-1/4">
                <div class="flex flex-col">
                    <h2 class="flex mb-3 text-lg">
                        About
                    </h2>
                    <div class="flex-col flex-none mb-6 text-base font-normal whitespace-normal">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laboriosam quam et
                        sapiente
                        expedita mollitia, neque voluptas nesciunt cumque laudantium, earum possimus, explicabo modi.
                        Unde
                        molestiae minima id atque nihil.
                    </div>
                    <div class="flex flex-col">
                        <span>Email : contact@deftzone.id</span>
                        <span>Phone : +62 8177 4171 958</span>
                    </div>

                    <div class="flex flex-row gap-5 mt-5">
                        <img src="{{ asset('img/logo/Ndoroarum.png') }}" class="max-h-6" alt="">
                        <img src="{{ asset('img/logo/lch.png') }}" class="max-h-6" alt="">
                        <img src="{{ asset('img/logo/lgh.png') }}" class="max-h-6" alt="">
                        <img src="{{ asset('img/logo/gh.png') }}" class="max-h-6" alt="">
                        <img src="{{ asset('img/logo/villa.png') }}" class="max-h-6" alt="">
                    </div>
                </div>
            </div>

            <div class="w-1/12">
                <div class="flex flex-col">
                    <h2 class="flex">
                        Quick Link
                    </h2>
                    <div class="flex">
                        Home
                    </div>
                    <div class="flex">
                        ABout
                    </div>
                    <div class="flex ">
                        Blog
                    </div>
                </div>
            </div>


            <div class="flex flex-col">
                <h2 class="flex"> Category</h2>
            </div>
        </div>
    </div> --}}

    <!-- Footer container -->
    <footer class="bg-[#023A51] text-center  text-white">
        <div class="flex flex-col py-10 mx-20 text-left">
            <div class="grid grid-cols-3 gap-8">
                <!-- TW elements section -->
                <div class="">
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



</body>

</html>
