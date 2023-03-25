@extends('layouts.base')
@section('requirementBody')
mx-[1.5rem] lg:mx-[5rem]
@endsection
@section('optionNav')
true
@endsection
@section('content')
@include('layouts.navbar')
        <div class='mx-0 my-1 lg:mx-8'>
            <div class='flex flex-col'>
                    <div class='flex flex-row'>
                        <form class='mt-1 w-full' action="">
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
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-full] px-2 outline-none w-full'>
                                </div>

                            </div>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-full] px-2 outline-none w-full'>
                                </div>

                            </div>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-full] px-2 outline-none w-full'>
                                </div>

                            </div>

                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                    <input type="text" name='kabupaten' class='bg-slate-300 rounded mb-[2rem] px-2 outline-none w-full'>
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
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-full px-2 outline-none'>
                                </div>
                            </div>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-full px-2 outline-none'>
                                </div>
                            </div>
                            <div class='flex flex-col mt-[1rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                <input type="text" name='kabupaten' class='bg-slate-300 rounded w-full px-2 outline-none'>
                                </div>
                            </div>
                            <div class='flex flex-col mt-[1rem] mb-[2rem]'>
                                <div class='flex flex-row'>
                                <h5 class='mr-[2.5rem]'>
                                    Kabupaten/Kota
                                </h5>
                                    <input type="text" name='kabupaten' class='bg-slate-300 rounded w-full px-2 outline-none'>
                                </div>
                            </div>
                            <button class='bg-abu-abu px-2 py-1 drop-shadow-lg rounded'>Cari</button>
                        </form>
                    </div>

            </div>
        </div>
    </body>
</html>
