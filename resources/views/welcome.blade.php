<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Belajar Dimana</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=bree-serif:400" rel="stylesheet" />

        <!-- Styles -->

         @vite('resources/css/app.css')
    </head>
    <body class="mx-10">
        <nav class="flex items-center content-between flex-wrap py-6"> <a href=""></a>
            <div class='mr-6'>
                <a href="#">
                    Blog
                </a>
            </div>
            <div class='mr-6'>
                <a href="#">
                    Tentang Kami
                </a>
            </div>
        </nav>
        <div class='mx-10'>
            <div class='flex-col pt-20'>
                <div class ='flex justify-center items-center pt-28 mb-4'>
                    <img src="{{ asset('assets/logo.png') }}">
                    <p class='text-6xl text-center text-hijau-telur-asin grid place-items-center'> Belajar Dimana</p>       
                </div>
                <div class='max-w-2xl mx-auto'>
                    <div class='drop-shadow-lg mb-7'>
                        <div class="relative flex items-center w-full h-16 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                            <div class="grid place-items-center h-full w-12 text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            
                            <input
                            class="peer h-full w-full outline-none text-md text-gray-700 pr-2 "
                            type="text"
                            id="search"
                            placeholder="Mau Belajar Dimana?" /> 
                            
                        
                        </div>
                    </div>
                    <div class='grid place-items-center'>
                        <div>
                            <button class="bg-abu-abu hover:bg-abu-abu-hover  py-2 px-4 rounded-xl mr-5">
                                <div class='grid place-items-center'>
                                    <a href="#">
                                        <div class='flex mb-2'>
                                            <div class='mr-1'>
                                                Pencarian Lanjutan
                                            </div>
                                            <div class='grid place-items-center pt-1'>
                                                <img src=" {{ asset('assets/arrow.png') }}" class="place-items-center" alt="" > 
                                            </div>
                                            
                                        </div>
                                    </a>
                                   
                                    
                                   
                                </div>
                            </button>
                            <button class="bg-abu-abu hover:bg-abu-abu-hover py-2 px-4 rounded-xl">
                                <div class='grid place-items-center'>
                                    <a href="#">
                                        <div class='flex'>
                                                <div class='mr-1'>
                                                    <p>
                                                        Lihat Peta
                                                    </p>
                                                </div>
                                                <img src=" {{ asset('assets/map.png') }}" class="place-items-center"  alt="" >
                                        </div>
                                    </a>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </body>
</html>
