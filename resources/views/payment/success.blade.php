@extends('layouts.frontend.main')

@section('title')
Paiement effectué avec success
@endsection

@section('content')
<section class="mt-[15rem] flex  flex-col items-center">
    <div className='text-white flex flex-col gap-4 items-center justify-center bg-green-500 p-6 mb-3 rounded-md' style="background:green;padding:3rem;margin-bottom:1.5rem;border-radius:1rem " >

        <div><h2 class="text-2xl text-white font-bold mb-5">Votre paiement à été validé avec success!</h2></div>
        <div class="flex justify-center gap-3"><a href="{{ route('candidate.profile',$slug) }}"  class="text-white bg-[#0f042d]   focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="padding:1rem">Profil de la candidate</a>
            <a href="/"  class="text-black bg-[#fff]   focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="padding:1rem">Accueil</a>
        </div>
        </div>
</section>
@endsection
