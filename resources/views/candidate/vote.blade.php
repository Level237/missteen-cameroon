@extends('layouts.frontend.main')

@section('title')
Je Vote pour {{ $candidate->candidate_name }}
@endsection

@section('content')
<section class="mt-[15rem] flex  flex-col items-center">



    <div id="root"></div>


</section>
@viteReactRefresh
@vite(['resources/js/app.jsx'])
@endsection
