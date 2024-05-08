@extends('layouts.frontend.main')

@section('title')
Inscription
@endsection

@section('content')
<section class="relative h-[60vh]  bg-left bg-cover bg-[url('asset('bg.png')')]" style="background-image: url('assets/img/bg.png');background-position:center">
    <div class="flex items-center justify-center absolute inset-0 bg-gradient-to-r from-neutral-600 to-[#0f042d] w-100 opacity-[0.9]">

    </div>
    <div class="absolute inset-0 flex items-center justify-center">
    <h2 class="text-5xl max-sm:text-4xl font-bold text-white max-sm:text-center"> Inscription</h2>
    </div>
    </section>
   <section class="h-10 bg-[#0f042d]">

    </section>

    <section class="grid grid-cols-3 max-sm:mx-4 max-sm:grid-cols-1 mt-12 mx-24 gap-6">

        <div class="bg-gray-100 px-8 max-sm:px-2 py-5 rounded-xl border">
<div class="flex flex-col justify-center gap-5 items-center">
<div>
    <img src="{{ asset('assets/img/Nouveau logo MITCA sans fond.png') }}" class="h-36" alt="">
</div>
<div>
    <h2 class="text-2xl font-bold">Miss Teen Cameroon</h2>
    <p class="text-sm text-center">Critère de participation</p>
</div>
<div>
<p>Etre de sexe feminin, avoir entre 15 à 20 ans, avoir une taille minimale de 167 cm, avoir une silhouette éfilée, être belle de figure, être celibataire et sans enfant, savoir ecrire et parler français ou anglais.</p>
</div>
<div>
    <button class="bg-[#0f042d] text-white px-5 py-3 rounded-md">Je Postule</button>
</div>
</div>
        </div>
        <div class="bg-gray-100 px-8 py-5 rounded-xl border">
            <div class="flex flex-col justify-center gap-5 items-center">
            <div>
                <img src="{{ asset('assets/img/mister.png') }}" class="h-36" alt="">
            </div>
            <div>
                <h2 class="text-2xl font-bold">Mister Teen Cameroon</h2>
                <p class="text-sm text-center">Critère de participation</p>
            </div>
            <div>
            <p>Etre de sexe masculin, avoir entre 15 à 20 ans, avoir une taille minimale de 167 cm, avoir une belle silhouette, être beau de figure, être celibataire, savoir ecrire et parler français ou anglais</p>
            </div>
            <div>
                <button class="bg-[#0f042d] text-white px-5 py-3 rounded-md">Je Postule</button>
            </div>
            </div>
                    </div>
                    <div class="bg-gray-100 px-8 py-5 rounded-xl border">
                        <div class="flex flex-col justify-center gap-5 items-center">
                        <div>
                            <img src="{{ asset('assets/img/petite.png') }}" class="h-36" alt="">
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-center">Miss Teen Petite Cameroon</h2>
                            <p class="text-sm text-center">Critère de participation</p>
                        </div>
                        <div>
                        <p>Etre de sexe feminin, avoir entre 15 à 20 ans, avoir une taille comprise entre 155 à 166 cm, avoir une silhouette éfilée, être belle de figure, être celibataire et sans enfant, savoir ecrire et parler français ou anglais</p>
                        </div>
                        <div>
                            <button class="bg-[#0f042d] text-white px-5 py-3 rounded-md">Je Postule</button>
                        </div>
                        </div>
                                </div>


    </section>
    <section class="grid grid-cols-2 max-sm:mx-4 max-sm:grid-cols-1 mx-36 gap-12 mt-16 mb-16">
        <div class="bg-gray-100 px-8 py-5 rounded-xl border">
            <div class="flex flex-col justify-center gap-5 items-center">
            <div>
                <img src="{{ asset('assets/img/curve.png') }}" class="h-36" alt="">
            </div>
            <div>
                <h2 class="text-xl font-bold text-center">Miss Teen Curve Cameroon</h2>
                <p class="text-sm text-center">Critère de participation</p>
            </div>
            <div>
            <p>Etre de sexe feminin, avoir entre 15 à 20 ans, avoir une taille minimale de 167 cm, avoir une silhouette potelée, être belle de figure, être celibataire et sans enfant, savoir ecrire et parler français ou anglais.</p>
            </div>
            <div>
                <button class="bg-[#0f042d] text-white px-5 py-3 rounded-md">Je Postule</button>
            </div>
            </div>
                    </div>
        <div class="bg-gray-100 px-8 py-5 rounded-xl border">
            <div class="flex flex-col justify-center gap-5 items-center">
            <div>
                <img src="{{ asset('assets/img/pre.png') }}" class="h-36" alt="">
            </div>
            <div>
                <h2 class="text-xl font-bold text-center">Miss Pre-Teen Cameroon</h2>
                <p class="text-sm text-center">Critère de participation</p>
            </div>
            <div>
            <p>Etre de sexe feminin, avoir entre 10 à 14 ans, avoir une silhouette éfilée, être belle de figure, être celibataire et sans enfant, savoir ecrire et parler français ou anglais.</p>
            </div>
            <div>
                <button class="bg-[#0f042d] text-white px-5 py-3 rounded-md">Je Postule</button>
            </div>
            </div>
                    </div>

                                </div>
    </section>
@endsection
