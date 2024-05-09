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

    <section class="grid mb-36 mx-[6rem] mt-12 grid-cols-3 max-sm:mx-4 gap-5 max-sm:grid-cols-1">
        @foreach ($candidates as $candidate)
        <div class="flex flex-col bg-gray-300 rounded-2xl py-12 px-6  items-center">
            <div class="flex max-sm:flex-col max-sm:justify-center justify-between items-center gap-4">
                <img class="w-[12rem] h-[12rem] rounded-full" src="{{ Storage::url($candidate->profile) }}" alt="">
                <div class="flex flex-col max-sm:justify-center max-sm:items-center">
                    <h2 class="text-lg font-bold">{{ $candidate->candidate_name }}</h2>
                    <div>
                        <p>Age: <span class="font-bold">{{ $candidate->age }} ans</span></p>
                    </div>
                    <div>
                        <p>Catégorie: <span class="font-bold">{{ $candidate->category->category_title }}</span></p>
                    </div>
                    <div>
                        <p>Ville: <span class="font-bold">{{ $candidate->city }}</span></p>
                    </div>

                    <a href="{{ route('candidate.profile', $candidate->candidate_slug) }}" class="bg-[#0f042d] text-center max-sm:py-3 max-sm:px-[8rem]  text-white px-2 mt-2 py-1 rounded-md">Voter</a>
                </div>

            </div>

        </div>
        @endforeach

    </section>
@endsection
