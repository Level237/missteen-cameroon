@extends('layouts.frontend.main')

@section('title')
Candidate Régionales
@endsection

@section('content')

<section class="relative  h-[60vh] bg-left bg-cover bg-[url('asset('bg.png')')]" style="background-image: url('assets/img/bg.png');background-position:center">
    <div class="flex items-center justify-center absolute inset-0 bg-gradient-to-r from-neutral-600 to-[#0f042d] w-100 opacity-[0.9]">

    </div>
    <div class="absolute inset-0 flex items-center justify-center">
    <h2 class="text-5xl max-sm:text-3xl  font-bold text-white max-sm:text-center">Candidate Régionales</h2>
    </div>
    </section>
   <section class="h-10 bg-[#0f042d]">

    </section>

    <section class="grid mb-36 mx-[6rem] mt-12 grid-cols-3 max-sm:mx-4 gap-5 max-sm:grid-cols-1">
        @foreach ($candidates as $candidate)
        <div class="flex flex-col bg-gray-300 w-full rounded-2xl py-12 px-3   items-center">
            <div class="flex max-sm:flex-col max-sm:justify-center justify-between items-center gap-4">
                <img class="w-[8rem] h-[8rem] rounded-full" src="{{ Storage::url($candidate->profile) }}" alt="">
                <div class="flex flex-col max-sm:justify-center max-sm:items-center">
                    <h2 class="text-lg font-bold">{{ $candidate->category->category_title }}</h2>
                    <div>
                        <p><span class="text-lg font-normal">{{ $candidate->city }} #{{ $candidate->dossard }}</span></p>
                    </div>
                    <div>
                        <p><span class="font-normal text-lg">{{ ucfirst($candidate->username) }}</span></p>
                    </div>


                    <a href="{{ route('candidate.profile', $candidate->candidate_slug) }}" class="bg-[#0f042d] text-center max-sm:py-3 max-sm:px-[8rem]  text-white px-2 mt-2 py-1 rounded-md">Voter</a>
                </div>

            </div>

        </div>
        @endforeach

    </section>
    @if(count($candidates) == 0)
    <div class="flex  mx-36 mb-10 mt-[-5rem] max-sm:mx-4 ">
        <div class="flex flex-col justify-center bg-gray-300 w-full rounded-2xl py-12 px-3   items-center">
            <h2 class="text-lg font-bold">Aucun candidat enregistré</h2>
        </div>
    </div>

    @endif
@endsection
