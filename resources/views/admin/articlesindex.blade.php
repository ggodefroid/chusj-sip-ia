@extends('base')

@section('titre')
    Liste des Articles
@endsection

@section('content')
<div class="container">  
  <h1 class="text-center m-5">Articles</h1>
  <div class="d-flex justify-content-center">
    <a href="{{route('articlecreate')}}" class="btn btn-primary mb-5">Créer un article <i class="fas fa-plus mx-1"></i></a>
  </div>
  <table class="table table-hover">
    <thead>
      <tr class="table-active">
        <th scope="col">ID</th>
        <th scope="col">Titre</th>
        <th scope="col">Créé le</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
        <tr class="table-secondary">
          <th scope="row">{{$article->id}}</th>
          <td>{{$article->title}}</td>
          <td>{{date('d-M-Y'), strtotime($article->created_at)}}</td>
          <td class="d-flex">
            <a href="#" class="btn btn-warning mx-2"><i class="fas fa-eye mx-1"></i>Éditer</a>
            <button type="button" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'" class="btn btn-danger mx-3">Supprimer</button>
            <form action="{{route('article.delete', $article->id)}} " method="POST">
              @csrf
              @method("DELETE")
              <div class="modal" id="modal-open-{{$article->id}}">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">La suppression d'un élément est définitive.</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{$article->id}}').style.display='none'" aria-label="Close">
                        <span aria-hidden="true"></span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Êtes-vous sûr de vouloir supprimer cet élément?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Oui</button>
                      <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-open-{{$article->id}}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
  <div class="d-flex justify-content-center mt-5">
    {{ $articles ?? ''->links('vendor.pagination.custom')}}
  </div>
</div>

@endsection