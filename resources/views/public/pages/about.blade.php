@extends('public.layouts.templatePageN-2')

@section('content')
<div class="aboutcntnt">
    <div class="clear"></div>
    <div class="abtpara">
        <h1 class="indigo-text center">À propos</h1>
        <p class="center">Tomobile est une plateforme qui permet de acheter et vendre des voiture de nouveaux ou d'occasion d'une façon simple, facile, et rapide a travers plusieurs methods du rechercher qui permet de faire une comparaison sur tout les modeles, les agencies, et les entrepreneurs qu'ils publié sur le site.</p>
    </div>
    <div class="abtaprpscntnt">
        <div class="col l6 m6 s12"><img src="{{asset('images/team.jpg')}}" class="responsive-img z-depth-1" alt="team"></div>
        <div class="col l6 m6 s12">
            <h2 class="indigo-text">Tomobilat</h2>
            <p class="grey-text text-darken-1">Tomobilat offre aux consommateurs, aux professionnels automobiles, et aux autres partenaires dans les secteurs de l’automobile, de la finance et de l’assurance une plateforme complète pour le commerce de véhicules en ligne.</p>
        </div>

        <div class="col l12 m12 s12">
            <h2 class="indigo-text">Website's Video</h2>
            <p class="grey-text text-darken-1">That may finally be changing. The world’s top-selling automaker is said to be reconsidering its absence from the electric-vehicle market. According to a report in Japan’s Nikkei business newspaper, Toyota is looking to add longer-range EVs to its portfolio starting around 2020.</p>
        </div>
        <iframe class="col m12 s12 l12 z-depth-1"  height="315"  src="https://www.youtube.com/embed/hpeYWdkUtcE"></iframe>
    </div>
</div>
@endsection
@section('classContent2', 'announcement')
@section('classContent3', 'about')
