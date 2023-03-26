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
    <body class="mx-[1.5rem]   md:w-[1000px]">
        <nav class="flex items-center content-between flex-wrap py-[1rem]"> <a href=""></a>
            <div class='mr-6'>
                <img src="{{ asset('assets/logo_baru.png') }}" class='w-[50px] h-[50px]'>
            </div>    
            <div class='mr-6'>
                <a href="#" class='sm:text-[1rem] md:text-xl xl:text-2xl text-hijau-telur-asin '>
                    Belajar Dimana
                </a>
            </div>
        </nav>
        <div class='mx-0 my-1 lg:mx-8'>
            <form action="">
                <div class='flex flex-col md:flex-row md:mt-[3rem] md:mx-[10%]'>
                
                    <div class='flex flex-col md:w-[45%] md:mr-[10%]'>
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
                            <select id='kabupaten'name='kabupaten' class='bg-slate-300 rounded w-full] px-2 outline-none w-full py-1'>
                                <option value="" disabled selected hidden> <p class='text-slate-500'>Pilih Kabupaten</p></option>
                                <option value="Sleman">Sleman</option>
                                <option value="Bantul">Bantul</option>
                                <option value="Gunung Kidul">Gunung Kidul</option>
                                <option value="Kulon Progo">Kulon Progo</option>
                            </select>
                            </div>
                            
                        </div>
                        <div class='flex flex-col mt-[2rem]'>
                            <div class='flex flex-row'>
                            <h5 class='mr-[4.7rem]'>
                                Kecamatan
                            </h5>
                            <select id='kecamatan'name='kecamatan' class='bg-slate-300 rounded w-full] px-2 outline-none w-full py-1'>
                                <option value="" disabled selected hidden> <p class='text-slate-500'>Pilih Kecamatan</p></option>
                                <option value="Sleman">Sleman</option>
                                <option value="Bantul">Bantul</option>
                                <option value="Gunung Kidul">Gunung Kidul</option>
                                <option value="Kulon Progo">Kulon Progo</option>
                            </select>
                            </div>
                            
                        </div>
                        <div class='flex flex-col mt-[2rem]'>
                            <div class='flex flex-row'>
                            <h5 class='mr-[7.6rem]'>
                                Desa
                            </h5>
                            <select id='desa'name='desa' class='bg-slate-300 rounded w-full] px-2 outline-none w-full py-1'>
                                <option value="Sleman">Sleman</option>
                                <option value="Bantul">Bantul</option>
                                <option value="Gunung Kidul">Gunung Kidul</option>
                                <option value="Kulon Progo">Kulon Progo</option>
                            </select>
                            </div>
                            
                        </div>
                        
                        <div class='flex flex-col mt-[2rem]'>
                            <div class='flex flex-row'>
                            <h5 class='mr-[6.8rem]'>
                                Dusun
                            </h5>
                            <select id='dusun'name='dusun' class='bg-slate-300 rounded w-full] px-2 outline-none w-full py-1 mb-[2rem]'>
                                <option value="Sleman">Sleman</option>
                                <option value="Bantul">Bantul</option>
                                <option value="Gunung Kidul">Gunung Kidul</option>
                                <option value="Kulon Progo">Kulon Progo</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class='flex flex-col md:w-[45%]'>
                        <p class='text-2xl mb-[2rem]'> 
                            <b>
                                Jenis
                            </b>
                        </p>
                        <div class='flex flex-col'>
                            <div class='flex flex-row'>
                            <h5 class='mr-[2.5rem]'>
                                Kabupaten/Kota
                            </h5>
                            <select id='kabupaten'name='kabupaten' class='bg-slate-300 rounded w-full] px-2 outline-none w-full py-1'>
                                <option value="Sleman">Sleman</option>
                                <option value="Bantul">Bantul</option>
                                <option value="Gunung Kidul">Gunung Kidul</option>
                                <option value="Kulon Progo">Kulon Progo</option>
                            </select>
                            </div>
                            
                        </div>
                        <div class='flex flex-col mt-[2rem]'>
                            <div class='flex flex-row'>
                            <h5 class='mr-[2.5rem]'>
                                Kabupaten/Kota
                            </h5>
                            <select id='kabupaten'name='kabupaten' class='bg-slate-300 rounded w-full] px-2 outline-none w-full py-1'>
                                <option value="Sleman">Sleman</option>
                                <option value="Bantul">Bantul</option>
                                <option value="Gunung Kidul">Gunung Kidul</option>
                                <option value="Kulon Progo">Kulon Progo</option>
                            </select>
                            </div>
                            
                        </div>
                        <div class='flex flex-col mt-[2rem]'>
                            <div class='flex flex-row'>
                            <h5 class='mr-[2.5rem]'>
                                Kabupaten/Kota
                            </h5>
                            <select id='kabupaten'name='kabupaten' class='bg-slate-300 rounded w-full] px-2 outline-none w-full py-1'>
                                <option value="Sleman">Sleman</option>
                                <option value="Bantul">Bantul</option>
                                <option value="Gunung Kidul">Gunung Kidul</option>
                                <option value="Kulon Progo">Kulon Progo</option>
                            </select>
                            </div>
                            
                        </div>
                        
                        <div class='flex flex-col mt-[2rem]'>
                            <div class='flex flex-row'>
                            <h5 class='mr-[2.5rem]'>
                                Kabupaten/Kota
                            </h5>
                            <select id='kabupaten'name='kabupaten' class='bg-slate-300 rounded w-full] px-2 outline-none w-full py-1 mb-[2rem]'>
                                <option value="Sleman">Sleman</option>
                                <option value="Bantul">Bantul</option>
                                <option value="Gunung Kidul">Gunung Kidul</option>
                                <option value="Kulon Progo">Kulon Progo</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='flow-root md:w-[80%] lg:max-w-[748.81px]  md:mx-[10%] '>
                    <a href="/" class='underline text-hijau-telur-asin'>Kembali ke pencarian</a>
                    <button type='submit' class='bg-hijau-telur-asin text-white px-5 py-1 rounded float-right'>Cari</button>
                </div>
            
            </form>
        </div>
    </body>
</html>
