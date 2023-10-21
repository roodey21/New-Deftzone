<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    {{-- nav section  --}}
    <nav class="bg-white py-10 px-20 sticky top-0 w-full shadow-md">
        <div class="flex flex-row justify-between">
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
                    <button class="bg-blue-950 py-3 px-4 rounded text-white">HIRE US</button>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero section  --}}
    <div class="bg-header bg-no-repeat bg-cover min-h-screen">
        <div class="flex flex-row justify-end items-center px-20 py-10 pt-32">
            <div class="flex flex-col gap-5 items-start">
                <div class="text-6xl text-left font-bold text-blue-950">Buat Website <br> Sesuai Kebutuhan <br> Bisnis
                    Anda
                </div>
                <div class="text-lg text-left font-medium text-blue-950 align-text-bottom">Team Deftzone siap membantu
                    mengembangkan
                    Platform Digital
                    <br>
                    yang Mendukung Pertumbuhan Bisnis Anda
                </div>
                <div class="flex flex-row gap-5">
                    {{-- <div>
                        <button class="bg-blue-950 py-3 px-4 rounded text-white">HIRE US</button>
                    </div> --}}
                    <div>
                        <button class="bg-white py-4 px-7 rounded  text-blue-950 text-lg font-medium">GET
                            STARTED</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-2.5 px-20 py-12 items-center">
        <div class="text-4xl text-left font-bold text-blue-950">Why Choose Us ?</div>
        <div class="text-lg font-medium text-blue-950 text-center">Deftzone adalah mitra terpercaya bagi
            banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik klien.
        </div>
    </div>

    <div class="grid grid-cols-3 gap-10 px-20 py-6 justify-center">
        <div class="flex-1 flex-col py-5 px-5 w-[347px] h-[417px] border-1 border-gray-500 bg-slate-50 text-center">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
            <div class="text-xl font-thin mb-5">01</div>
            <div class="text-xl font-semibold text-blue-950 mb-5">Team Berpengalaman</div>
            <div class="text-base font-normal text-blue-950 text-left">Deftzone adalah mitra terpercaya bagi
                banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik
                klien.
            </div>
        </div>
        <div class="flex-1 flex-col py-5 px-5 w-[347px] h-[417px] border-1 border-gray-500 bg-slate-50 text-center">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-12 h-12 mx-auto">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                    <path
                        d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                </svg>

            </div>
            <div class="text-xl font-thin mb-5">02</div>
            <div class="text-xl font-semibold text-blue-950 mb-5">Design Menawan</div>
            <div class="text-base font-normal text-blue-950 text-left">Desain menarik dan responsif untuk pengalaman
                optimal.
            </div>
        </div>
        <div class="flex-1 flex-col py-5 px-5 w-[347px] h-[417px] border-1 border-gray-500 bg-slate-50 text-center">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-12 h-12 mx-auto">
                    <path
                        d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                </svg>

            </div>
            <div class="text-xl font-thin mb-5">01</div>
            <div class="text-xl font-semibold text-blue-950 mb-5">Pendekatan Bebasis Klien</div>
            <div class="text-base font-normal text-blue-950 text-left">Kami meyakini bahwa setiap klien <br> adalah
                unik,
                maka kami mengadopsi <br> pendekatan berbasis klien. Dengan mendengarkan kebutuhan Anda, kami ciptakan
                solusi sesuai tujuan dan anggaran Anda.
            </div>
        </div>


        <div class="flex-1 flex-col py-5 px-5 w-[347px] h-[417px] border-1 border-gray-500 bg-slate-50 text-center">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
            <div class="text-xl font-thin mb-5">01</div>
            <div class="text-xl font-semibold text-blue-950 mb-5">Team Berpengalaman</div>
            <div class="text-base font-normal text-blue-950 text-left">Deftzone adalah mitra terpercaya bagi
                banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik
                klien.
            </div>
        </div>
        <div class="flex-1 flex-col py-5 px-5 w-[347px] h-[417px] border-1 border-gray-500 bg-slate-50 text-center ">
            <div class="flex items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
            <div class="text-xl font-thin mb-5">01</div>
            <div class="text-xl font-semibold text-blue-950 mb-5">Team Berpengalaman</div>
            <div class="text-base font-normal text-blue-950 text-left">Deftzone adalah mitra terpercaya bagi
                banyak perusahaan dalam mengembangkan solusi <br> web yang inovatif dan sesuai dengan kebutuhan unik
                klien.
            </div>
        </div>

        <div class="flex-1 flex-col py-5 px-5 w-[347px] h-[417px] relative">
            <img src="{{ asset('img/illustration/g8.png') }}"class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-[443px] h-[223px]"
                alt="">
        </div>
    </div>

    <div class="flex px-20 py-12 mt-14">
        <div class="text-4xl text-left font-bold text-blue-950">PRICING</div>
    </div>

    <div class="grid grid-cols-3 gap-10 px-20 py-6 justify-center">
        <div class="flex-1 flex-col px-1 pt-1 text-center w-[347px] h-[600px] bg-slate-50 shadow-md">
            <div class="text-base font-thin py-1 mb-8 bg-blue-400 text-white">Company Profile</div>
            <div class="text-base font-normal">Start From: </div>
            <div class="text-[32px] font-semibold text-blue-950 mb-5">Rp. 2.000.000</div>
            <div class="mb-5">
                <button
                    class="text-blue-500 w-72 bg-transparent border border-solid border-gray-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold text-xs py-4 px-7 rounded outline-none focus:outline-none mr-1 mb-5 ease-linear transition-all duration-150"
                    type="button">
                    Get Started
                </button>
            </div>
            <div class="text-base font-semibold text-left px-5 mb-1 uppercase">Features</div>
            <div class="text-left text-sm font-normal px-5 mb-5">That package includes: </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Home Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">About Us Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Service Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Contact Page</div>
            </div>
        </div>
        <div class="flex-1 flex-col px-1 pt-1 text-center w-[347px] h-[600px] bg-slate-50 shadow-md">
            <div class="text-base font-thin py-1 mb-8 bg-blue-700 text-white">E-Commerce</div>
            <div class="text-base font-normal">Start From: </div>
            <div class="text-[32px] font-semibold text-blue-950 mb-5">Rp. 2.000.000</div>
            <div class="mb-5">
                <button
                    class="text-blue-500 w-72 bg-transparent border border-solid border-gray-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold text-xs py-4 px-7 rounded outline-none focus:outline-none mr-1 mb-5 ease-linear transition-all duration-150"
                    type="button">
                    Get Started
                </button>
            </div>
            <div class="text-base font-semibold text-left px-5 mb-1 uppercase">Features</div>
            <div class="text-left text-sm font-normal px-5 mb-5">That package includes: </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Home Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">About Us Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Service Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Contact Page</div>
            </div>
        </div>
        <div class="flex-1 flex-col px-1 pt-1 text-center w-[347px] h-[600px] bg-slate-50 shadow-md">
            <div class="text-base font-thin py-1 mb-8 bg-gray-500 text-white">Custom</div>
            <div class="text-base font-normal">Start From: </div>
            <div class="text-[32px] font-semibold text-blue-950 mb-5">Negotiable</div>
            <div class="mb-5">
                <button
                    class="text-blue-500 w-[300px] bg-transparent border border-solid border-gray-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold text-xs py-4 px-7 rounded outline-none focus:outline-none mr-1 mb-5 ease-linear transition-all duration-150"
                    type="button">
                    Get Started
                </button>
            </div>
            <div class="text-base font-semibold text-left px-5 mb-1 uppercase">Features</div>
            <div class="text-left text-sm font-normal px-5 mb-5">That package includes: </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Home Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">About Us Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Service Page</div>
            </div>
            <div class="flex flex-row items-center px-5 mb-5">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="font-normal text-base text-left">Contact Page</div>
            </div>
        </div>
    </div>
</body>

</html>
