<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield("title") </title>
</head>
<body class="overflow-x-hidden ">
    @include('layouts.frontend.nav-bar')
@section('content')
<section class="mt-[9rem] overflow-y-hidden  flex  flex-col items-center">


    <div class="candidateId" style="visibility: hidden">{{ $candidate->id }}</div>
    <div class="slug" style="visibility: hidden">{{ $candidate->candidate_slug }}</div>
    @if($type==="om")

    <div  id="root"></div>
    @endif

    @if($type==="momo")
    <div id="momo"></div>
    @endif

</section>
</body>
@viteReactRefresh
@vite(['resources/js/app.jsx'])
@vite(['resources/js/momo.jsx'])
</html>
