@extends('layouts.frontend.main')

@section('title')
Je Vote pour {{ $candidate->candidate_name }}
@endsection

@section('content')
<section class="mt-[9rem] flex  flex-col items-center">


    <div class="candidateId" style="visibility: hidden">{{ $candidate->id }}</div>
    <div class="slug" style="visibility: hidden">{{ $candidate->candidate_slug }}</div>
    @if($type==="om")

    <div id="root"></div>
    @endif

    @if($type==="momo")
    <div id="momo"></div>
    @endif

</section>
@viteReactRefresh
@vite(['resources/js/app.jsx'])
@vite(['resources/js/momo.jsx'])
@endsection
