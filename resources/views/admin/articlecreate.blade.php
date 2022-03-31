@extends('base')

@section('titre')
    Création d'un article
@endsection

@section('content')
    <div class="container">
      <h1 class="text-center mt-5">Poster un nouvel article</h1>
      <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
          <div class="form-group">
            <label class="mb-2">Titre</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " placeholder="Titre de votre article">
            @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{$message}}</strong>
                </span>
            @enderror
          </div>
          <label for="avatar">Choisir un fichier:</label> 

          <input type="file" class="block my-2"
                id="avatar" name="avatar"
                accept="image/png, image/jpeg">
        <div class="d-flex justify-content-center my-5">
          <button type="submit" class="btn btn-primary">Poster votre article</button>
        </div>
      </form> 
    </div>
@endsection