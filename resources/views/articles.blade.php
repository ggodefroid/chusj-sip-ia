@extends('base')
@section('titre')
    Blog
@endsection
@section('content')
<div class="jumbotron">
  <h1 class="display-3 text-center mt-3">Articles</h1>
  <div class="articles row justify-content-center">
    @foreach ($articles as $article)
    <div class="col-md-6">
      <div class="card text-white bg-info mb-3">
        <div class="card-header">
          <h3 class="card-title text-center">{{$article->title}}</h3>
        </div>
        <div class="card-img text-center">
          <img src="{{ Storage::url($article->image->path) }}" alt="">
        </div>

      </div>
    </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center mt-5">
    {{ $articles->links('vendor.pagination.custom')}}
  </div>
</div>
    
@endsection