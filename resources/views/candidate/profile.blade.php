@extends('layouts.frontend.main')

@section('title')
Candidate numero {{ $candidate->dossard }}
@endsection

@section('meta_title')
{{ $candidate->username }}:Candidate numéro ${{ $candidate->dossard }}
@endsection

@section('meta_description')
{{ $candidate->candidate_name }}
@endsection

@section("meta_image",Storage::url($candidate->profile))
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
                    <div class="flex justify-around max-sm:gap-3  items-center">
                        <div>
                            <img src="{{ asset('assets/img/om.png') }}" class="h-24" alt="">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <h2 class="text-3xl font-bold max-sm:text-2xl">Voter par Orange Money</h2>
                            </div>
                            <div>
                                <form action="{{ route('candidate.vote',$candidate->candidate_slug) }}" method="GET">
                                    <input type="hidden" name="type" value="om">
                                    <button type="submit" class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Voter par OM</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
<div class="p-4 md:p-5 space-y-4">
                <div class="flex flex-col">
                    <div class="flex justify-around border-gray-600 gap-3 border-t p-3  items-center">
                        <div>
                            <img src="{{ asset('assets/img/momo.jpeg') }}" class="h-[4rem]" alt="">
                        </div>
                        <div class="flex flex-col gap-4">
                            <div>
                                <h2 class="text-3xl max-sm:text-2xl font-bold">Voter par Mobile Money</h2>
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
        <h2 class="text-5xl max-sm:text-4xl font-bold text-white max-sm:text-center">Candidate numero {{ $candidate->dossard }}</h2>
        </div>

        </section>
       <section class="h-10 relative bg-[#0f042d] ">
        <div class="absolute  max-sm:hidden" style="right: 44%;bottom:-6rem">
            <div class="w-full flex justify-center">
                <img style="width: 195px;height:250px" class=" rounded-full" src="{{ Storage::url($candidate->profile) }}" alt="{{ $candidate->candidate_name }}">
            </div>
        </div>
        <div class="absolute  lg:hidden md:hidden" style="right: 25%;bottom:-6rem">
            <div class="w-full flex justify-center">
                <img style="width: 195px;height:250px" class=" rounded-full" src="{{ Storage::url($candidate->profile) }}" alt="{{ $candidate->candidate_name }}">
            </div>
        </div>
        </section>

    <section class="flex flex-col justify-center items-center" style="margin-top: 7.5rem">
        <h2 class="text-center text-4xl font-bold text-[#0f042d]">{{ $candidate->score }} votes</h2>

        <div class="flex mt-6 bg-gray-300 max-sm:grid max-sm:grid-cols-2 max-sm:gap-x-12 rounded-lg p-3 justify-center gap-3">
            <div>
                <span class="font-normal">{{ $candidate->category->category_title }} #{{ $candidate->dossard }}</span>
            </div>
            <div class="max-sm:hidden">
                <span>-</span>
            </div>
            <div>
               <span class="font-normal">{{ $candidate->candidate_name }}</span>
            </div>
            <div class="max-sm:hidden">
                <span>-</span>
            </div>
            <div>
                 <span class="font-normal">{{ $candidate->age }} ans</span>
            </div>
            <div class="max-sm:hidden">
                <span>-</span>
            </div>
            <div>
                <span class="font-normal">{{ $candidate->size }}m</span>
           </div>
           <div class="max-sm:hidden">
            <span>-</span>
        </div>
        <div>
            <span class="font-normal">{{ $candidate->poids }}kg</span>
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
