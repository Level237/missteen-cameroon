@extends('layouts.frontend.main')

@section('title')
Je Vote pour {{ $candidate->candidate_name }}
@endsection

@section('content')
<section class="mt-[15rem] flex  flex-col items-center">


    <div class="candidateId" style="visibility: hidden">{{ $candidate->id }}</div>

    @if($type==="om")
    <div id="root"></div>
    @endif



</section>
@viteReactRefresh
@vite(['resources/js/app.jsx'])
@endsection
