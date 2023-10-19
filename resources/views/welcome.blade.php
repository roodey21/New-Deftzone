<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-white py-10 px-20">
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
    <header class="bg-header bg-no-repeat bg-cover h-[587px]">
        <div class="flex flex-row justify-end items-center px-20 py-10">
            <div class="flex flex-col gap-5">
                <div class="text-5xl font-bold">We Build Your <span class="text-blue-950">Dream</span> Website</div>
                <div class="text-2xl font-semibold">We are a team of talented designers making websites with Bootstrap</div>
                <div class="flex flex-row gap-5">
                    <div>
                        <button class="bg-blue-950 py-3 px-4 rounded text-white">HIRE US</button>
                    </div>
                    <div>
                        <button class="bg-white py-3 px-4 rounded text-blue-950 border-2 border-blue-950">LEARN MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
  <h1 class="text-3xl font-bold underline">
    {{-- Hello world! --}}
  </h1>
</body>
</html>
