@extends('layouts.frontend.main')

@section('title')
Paiement effectué avec success
@endsection

@section('content')
<section class="mt-[15rem] flex  flex-col items-center">
    <div className='text-white flex flex-col gap-4 items-center justify-center bg-green-500 p-6 mb-3 rounded-md' >

        <div>Votre paiement à été validé avec success!</div>
        <div><a href="{{ route('candidate.list') }}"  class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Voir les candidates</a></div>
        </div>
</section>
@endsection
