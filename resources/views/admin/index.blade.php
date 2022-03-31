@extends('base')

@section('titre')
    Espace Admin
@endsection

@section('content')
<div class="container text-align-center mb-4">
  <div class="row col-12 my-5 text-center">
        <a href="{{route('adminarticles')}}"><h3>Articles</h3></a>
  </div>
  <div class="row col-12 my-5 text-center">
    <a href="#"><h3>Candidats</h3></a>
  </div>
  <div class="row col-12 my-5 text-center">
    <a href="#"><h3>Membres</h3></a>
  </div>
  <div class="row col-12 my-5 text-center">
    <a href="#"><h3>Carrières</h3></a>
  </div>

</div>

@endsection