@extends('layouts.frontend.main')

@section('title')
Candidate numero {{ $candidate->id }}
@endsection

@section('content')

<section class="mb-36">
    <section class="relative  h-[60vh] bg-left bg-cover bg-[url('asset('bg.png')')]" style="background-image: url('assets/img/bg.png');background-position:center">
        <div class="flex items-center justify-center absolute inset-0 bg-gradient-to-r from-neutral-600 to-[#0f042d] w-100 opacity-[0.9]">

        </div>
        <div class="absolute inset-0 flex items-center justify-center">
        <h2 class="text-5xl max-sm:text-4xl font-bold text-white max-sm:text-center">Candidate numero {{ $candidate->id }}</h2>
        </div>

        </section>
       <section class="h-10 relative bg-[#0f042d] ">
        <div class="absolute bottom-[-4rem] right-[45%] ">
            <div class="">
                <img class="w-[10rem]   h-[10rem] rounded-full" src="{{ asset('assets/img/miss.jpg') }}" alt="{{ $candidate->candidate_name }}">
            </div>
        </div>
        </section>

    <section class="mt-[5rem] flex flex-col justify-center items-center">
        <h2 class="text-center text-2xl font-bold">{{ $candidate->candidate_name }}</h2>
        <div>
            <h2 class="text-center text-lg text-gray-700">{{ $candidate->city }}</h2>
        </div>
        <div class="flex bg-gray-300 rounded-lg p-3 justify-between gap-5">
            <div>
                Age: <span class="font-bold">{{ $candidate->age }} ans</span>
            </div>
            <div>
                Taille: <span class="font-bold">{{ $candidate->size }}m</span>
            </div>
            <div>
                Points: <span class="font-bold">{{ $candidate->score }} pts</span>
            </div>

        </div>
        <div class="flex justify-center flex-col items-center mx-[27rem] mt-6">
            <p class="text-center">{{ $candidate->description }}</p>
        </div>
        <div class="flex justify-center">
            <a href="{{ route('candidate.vote',$candidate->candidate_slug) }}" class="bg-[#0f042d]   text-center  text-white px-3 mt-5 py-4 rounded-md">Voter ce candidat</a>
        </div>

    </section>
</section>

@endsection
