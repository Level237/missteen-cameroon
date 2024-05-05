@extends('layouts.frontend.main')

@section('title')
Candidate numero {{ $candidate->id }}
@endsection

@section('content')


<!-- Modal toggle -->


<!-- Main modal -->

@if(Session::get('card'))
<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class=" flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 bg-[#000000dc] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative  rounded-lg shadow bg-white">
            <!-- Modal header -->
            <div class="flex items-center justify-center p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-black text-center">
                  Choisissez un moyen de paiement
                </h3>

            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="flex flex-col">
                    <div class="flex justify-around   items-center">
                        <div>
                            <img src="{{ asset('assets/img/om.png') }}" class="h-24" alt="">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <h2 class="text-3xl font-bold">Voter par Orange Money</h2>
                            </div>
                            <div>
                                <form action="{{ route('candidate.vote',$candidate->candidate_slug) }}" method="GET">
                                    <input type="hidden" name="type" value="om">
                                    <button type="submit" class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Voter par Momo</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
<div class="p-4 md:p-5 space-y-4">
                <div class="flex flex-col">
                    <div class="flex justify-around border-gray-600 border-t p-3  items-center">
                        <div>
                            <img src="{{ asset('assets/img/momo.jpeg') }}" class="h-[4rem] w-[7.1rem]" alt="">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <h2 class="text-3xl font-bold">Voter par Mobile Money</h2>
                            </div>
                            <div>
                                <form action="{{ route('candidate.vote',$candidate->candidate_slug) }}" method="GET">
                                    <input type="hidden" name="type" value="momo">
                                    <button type="submit" class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Voter par Momo</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal footer -->

        </div>
    </div>
</div>
@endif




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
                <img class="w-[10rem]   h-[10rem] rounded-full" src="{{ Storage::url($candidate->profile) }}" alt="{{ $candidate->candidate_name }}">
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
            <a href="{{ route('redirect.profile') }}" class="bg-[#0f042d]   text-center  text-white px-3 mt-5 py-4 rounded-md">Voter ce candidat</a>
        </div>

    </section>
</section>

@endsection
