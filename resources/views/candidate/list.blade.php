@extends('layouts.frontend.main')

@section('title')
Listes des candidates
@endsection

@section('content')

<section class="relative  h-[60vh] bg-left bg-cover bg-[url('asset('bg.png')')]" style="background-image: url('assets/img/bg.png');background-position:center">
    <div class="flex items-center justify-center absolute inset-0 bg-gradient-to-r from-neutral-600 to-[#0f042d] w-100 opacity-[0.9]">

    </div>
    <div class="absolute inset-0 flex items-center justify-center">
    <h2 class="text-5xl max-sm:text-4xl font-bold text-white max-sm:text-center">Candidates</h2>
    </div>
    </section>
   <section class="h-10 bg-[#0f042d]">

    </section>
    <
    <section class="grid mb-36 mx-[6rem] mt-12 grid-cols-3 gap-5 max-sm:grid-cols-1">
        <div class="flex flex-col bg-gray-300 rounded-2xl py-12  items-center">
            <div class="flex justify-between items-center gap-4">
                <img class="w-[7rem] h-[7rem] rounded-full" src="{{ asset('assets/img/miss.jpg') }}" alt="">
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Ongolo Carine</h2>
                    <div>
                        <p>Age: <span class="font-bold">23 ans</span></p>
                    </div>
                    <div>
                        <p>Ville: <span class="font-bold">Douala</span></p>
                    </div>
                    <button class="bg-[#0f042d]  text-white px-2 mt-2 py-1 rounded-md">Voter</button>
                </div>

            </div>

        </div>
        <div class="flex flex-col bg-gray-300 rounded-2xl py-12  items-center">
            <div class="flex justify-between items-center gap-4">
                <img class="w-[7rem] h-[7rem] rounded-full" src="{{ asset('assets/img/miss.jpg') }}" alt="">
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Ongolo Carine</h2>
                    <div>
                        <p>Age: <span class="font-bold">23 ans</span></p>
                    </div>
                    <div>
                        <p>Ville: <span class="font-bold">Douala</span></p>
                    </div>
                    <button class="bg-[#0f042d]  text-white px-2 mt-2 py-1 rounded-md">Voter</button>
                </div>
            </div>

        </div>
        <div class="flex flex-col bg-gray-300 rounded-2xl py-12  items-center">
            <div class="flex justify-between items-center gap-4">
                <img class="w-[7rem] h-[7rem] rounded-full" src="{{ asset('assets/img/miss.jpg') }}" alt="">
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Ongolo Carine</h2>
                    <div>
                        <p>Age: <span class="font-bold">23 ans</span></p>
                    </div>
                    <div>
                        <p>Ville: <span class="font-bold">Douala</span></p>
                    </div>
                    <button class="bg-[#0f042d]  text-white px-2 mt-2 py-1 rounded-md">Voter</button>
                </div>
            </div>

        </div>
        <div class="flex flex-col bg-gray-300 rounded-2xl py-12  items-center">
            <div class="flex justify-between items-center gap-4">
                <img class="w-[7rem] h-[7rem] rounded-full" src="{{ asset('assets/img/miss.jpg') }}" alt="">
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Ongolo Carine</h2>
                    <div>
                        <p>Age: <span class="font-bold">23 ans</span></p>
                    </div>
                    <div>
                        <p>Ville: <span class="font-bold">Douala</span></p>
                    </div>
                    <button class="bg-[#0f042d]  text-white px-2 mt-2 py-1 rounded-md">Voter</button>
                </div>
            </div>

        </div>
        <div class="flex flex-col bg-gray-300 rounded-2xl py-12  items-center">
            <div class="flex justify-between items-center gap-4">
                <img class="w-[7rem] h-[7rem] rounded-full" src="{{ asset('assets/img/miss.jpg') }}" alt="">
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Ongolo Carine</h2>
                    <div>
                        <p>Age: <span class="font-bold">23 ans</span></p>
                    </div>
                    <div>
                        <p>Ville: <span class="font-bold">Douala</span></p>
                    </div>
                    <button class="bg-[#0f042d]  text-white px-2 mt-2 py-1 rounded-md">Voter</button>
                </div>
            </div>

        </div>
        <div class="flex flex-col bg-gray-300 rounded-2xl py-12  items-center">
            <div class="flex justify-between items-center gap-4">
                <img class="w-[7rem] h-[7rem] rounded-full" src="{{ asset('assets/img/miss.jpg') }}" alt="">
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Ongolo Carine</h2>
                    <div>
                        <p>Age: <span class="font-bold">23 ans</span></p>
                    </div>
                    <div>
                        <p>Ville: <span class="font-bold">Douala</span></p>
                    </div>
                    <button class="bg-[#0f042d]  text-white px-2 mt-2 py-1 rounded-md">Voter</button>
                </div>
            </div>

        </div>
    </section>
@endsection
