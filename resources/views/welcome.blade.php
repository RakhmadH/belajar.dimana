@extends('layouts.base')
@section('requirementBody')
mx-[2rem] lg:mx-[5rem]
@endsection
@section('content')
        <div class='mx-10'>
            <div class='flex-col pt-5 lg:pt-20 pb-[8vh]'>
                <div class ='flex justify-center items-center pt-28 mb-12'>
                    <img src="{{ asset('assets/logo_baru.png') }}">
                    <p class='text-5xl sm:text-6xl text-center text-hijau-telur-asin grid place-items-center ml-3'> Belajar Dimana</p>
                </div>
                <div class='flex-col'>
                    <div class='flex justify-center items-center '>
                        <div class='drop-shadow-lg mb-7 '>
                            <div class=" min-w-[300px] relative flex items-center md:min-w-[45vw] xl:min-w-[600px] h-16 rounded-lg focus-within:shadow-lg bg-warna-bg-search overflow-hidden">
                                <div class="grid place-items-center h-full w-12 text-gray-300 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>

                                <input
                                class="peer h-full w-full outline-none text-md text-gray-700 pr-2 bg-warna-bg-search "
                                type="text"
                                id="search"
                                placeholder="Mau Belajar Dimana?" />
                            </div>
                            <a href="/pencarian_lanjutan" class='text-warna-link hover:text-warna-hover flex flex-row-reverse pt-[15px]'>
                                        Pencarian Lanjutan
                                    </a>
                        </div>
                    </div>
                    <div class ='flex flex-row-reverse pr-[10vw] md:pr-[15vw] lg:pr-[19vw] min-w-[300px]'>
                    <div>

                                </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row items-center justify-center mb-[70px]">
                <div class='box-border bg-warna-bg-search ml-0 mb-10  h-[20vh] w-[20vh] md:h-[25vh] md:w-[25vw] lg:mb-0 lg:h-[25vh] lg:w-[20vw]'></div>
                <div class='box-border bg-warna-bg-search mb-10 lg:mx-[5vw] h-[20vh] w-[20vh] ] md:h-[25vh] md:w-[25vw] lg:mb-0 lg:h-[25vh] lg:w-[20vw]'></div>
                <div class='box-border bg-warna-bg-search mb-10  h-[20vh] w-[20vh] md:h-[25vh] md:w-[25vw] lg:mb-0 lg:h-[25vh] lg:w-[20vw]'></div>
            </div>
        </div>
    </body>
</html>
@endsection
