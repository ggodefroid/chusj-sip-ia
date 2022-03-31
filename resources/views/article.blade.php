@extends('base')
@section('titre')
    Blog
@endsection
@section('content')
<div class="jumbotron">
  <h3 class="display-4 text-center mt-3">{{ $article->title }}</h3>
  <div class="d-flex justify-content-center mt-3">
    <a class="btn btn-primary" href=" {{ route('articles')}} "><i class="fas fa-arrow-left"></i> Retour</a>
  </div>
  <h3 class="text-center my-3 pt-3">{{ $article->subtitle }}</h3>
</div>
<div class="container">
  <p class="text-center">
    {{$article->content}}
  </p>
</div>
@endsection