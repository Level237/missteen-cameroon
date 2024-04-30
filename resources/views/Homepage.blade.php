@extends('layouts.frontend.main')

@section('title')
Homepage
@endsection

@section('content')
<section class="bg-center bg-no-repeat max-sm:mt-36   bg-[#1a1625] bg-blend-multiply">
    <div class="flex items-center max-sm:flex-col max-sm:ml-0 justify-center ml-[3rem] ">
        <div class="px-4 flex-1 mx-auto max-w-screen-xl py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Devenez la miss Teen Cameroon de demain</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl ">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row  sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium  text-black rounded-lg bg-[#f1c802] hover:bg-[#ffd609] focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Inscription
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Candidates
                </a>
            </div>
        </div>
        <div class="w-[34rem] mt-12 max-sm:hidden">
            <img src="{{ asset('assets/img/bg.png') }}" alt="">
        </div>
    </div>

</section>
@endsection
