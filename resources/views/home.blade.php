@extends('base')
@section('titre')
Accueil
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
   <section id="diaporama">
    
                <br>
            <ul id="caroussel" class="justify-context-center">
                <li>
                    
                    <img src="{{ asset('img/bannieres/Affiche_STDC_25mars.jpg') }}" width="1200" height="400">
                </li>
                <li>
                    <div class="title"><h2>Ecogénomique des maladies infectieuses et modélisation prédictive dans les eaux
                      usées du Québec : COVID-19 et entéropathogènes</h2></div><br>
                    <img src="{{ asset('img/bannieres/Dr-Roger-C.-Levesque.jpg') }}" width="1200" height="400">
                </li>
            </ul>
   </section>
            </div>
    </div>
@endsection