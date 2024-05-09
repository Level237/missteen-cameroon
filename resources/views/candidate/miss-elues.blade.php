@extends('layouts.frontend.main')

@section('title')
Listes des candidates
@endsection

@section('content')
<section class="relative  h-[60vh] bg-left bg-cover bg-[url('asset('bg.png')')]" style="background-image: url('assets/img/bg.png');background-position:center">
    <div class="flex items-center justify-center absolute inset-0 bg-gradient-to-r from-neutral-600 to-[#0f042d] w-100 opacity-[0.9]">

    </div>
    <div class="absolute inset-0 flex items-center justify-center">
    <h2 class="text-5xl max-sm:text-4xl font-bold text-white max-sm:text-center">Candidate elues:{{ $category }}</h2>
    </div>
    </section>
   <section class="h-10 bg-[#0f042d]">

    </section>


    <section class="grid grid-cols-3 max-sm:mx-4 max-sm:grid-cols-1 mt-12 mx-24 gap-6">
        @if($category==="miss-teen-cameroon")
        <div class="flex flex-col bg-gray-300 rounded-2xl pb-12  ">
            <div class="flex justify-center">
                <img class="w-full rounded-2xl h-[25rem]" src="{{asset('assets/img/miss.jpg') }}" alt="">
            </div>
            <div class="flex mx-[1rem] mt-5 justify-between items-center gap-4">

                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Kelibiright Lemnwie Yuh</h2>
                    <div>
                        <p><span class="">Miss Teen Cameroon 2023</span></p>
                    </div>



                </div>

            </div>

        </div>
        <div class="flex flex-col bg-gray-300 rounded-2xl pb-12  ">
            <div class="flex justify-center">
                <img class="w-full rounded-2xl h-[25rem]" src="{{asset('assets/img/miss2.jpg') }}" alt="">
            </div>
            <div class="flex mx-[1rem] mt-5 justify-between items-center gap-4">

                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Magne Kamga Antoinette Hilary</h2>
                    <div>
                        <p><span class="">Miss Teen Cameroon 2022</span></p>
                    </div>



                </div>

            </div>

        </div>
        @endif
        @if($category==="miss-teen-curve")
        <div class="flex flex-col bg-gray-300 rounded-2xl pb-12  ">
            <div class="flex justify-center">
                <img class="w-full rounded-2xl h-[25rem]" src="{{asset('assets/img/miss3.jpg') }}" alt="">
            </div>
            <div class="flex mx-[1rem] mt-5 justify-between items-center gap-4">

                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Nono Beti Diane</h2>
                    <div>
                        <p><span class="">Miss Teen Curve 2023</span></p>
                    </div>



                </div>

            </div>

        </div>
        @endif
    </section>
@endsection
