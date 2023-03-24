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
    <body class="mx-[1.5rem] lg:mx-[5rem]">
        <nav class="flex items-center content-between flex-wrap py-[1rem]"> <a href=""></a>
            <div class='mr-6'>
                <img src="{{ asset('assets/logo.png') }}" class='w-[50px] h-[50px]'>
            </div>    
            <div class='mr-6'>
                <a href="#" class='sm:text-[1rem] md:text-xl xl:text-2xl text-hijau-telur-asin '>
                    Belajar Dimana
                </a>
            </div>
        </nav>
        <div class='mx-0 my-1 lg:mx-8'>
            <div class='flex flex-col'>
                <div class='flex flex-col w-1/2'>
                    <div class='flex flex-row'>
                        
                        <form class='mt-1' action="">
                            <p class='text-2xl mb-[2rem]'> 
                                <b>
                                    Wilayah
                                </b>
                            </p>
                            <div class='flex flex-col'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-[170px] px-2 outline-none'>
                                </div>
                                
                            </div>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-[170px] px-2 outline-none'>
                                </div>
                                
                            </div>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-[170px] px-2 outline-none'>
                                </div>
                                
                            </div>
                            
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                    <input type="text" name='kabupaten' class='bg-slate-300 rounded mb-[2rem] w-[170px] px-2 outline-none'>
                                </div>
                            </div>
                            <p class='text-2xl mb-[2rem]'> 
                                <b>
                                    Jenis / Jenjang
                                </b>
                            </p>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-[170px] px-2 outline-none'>
                                </div>
                            </div>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-[170px] px-2 outline-none'>
                                </div>
                            </div>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-[170px] px-2 outline-none'>
                                </div>
                            </div>
                            <div class='flex flex-col mt-[1rem] mb-[2rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                    <input type="text" name='kabupaten' class='bg-slate-300 rounded w-[170px] px-2 outline-none'>
                                </div>
                            </div>
                            <button class='bg-abu-abu px-2 py-1 drop-shadow-lg rounded'>Cari</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
