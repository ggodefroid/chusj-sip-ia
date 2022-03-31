@extends('base')
@section('titre')
    Base de données
@endsection
@section('content')
<div class="jumbotron">
  <h1 class="display-3 text-center my-4">Bases de données</h1>

  <div class="container text-align-center mb-4">
  
    <h4>Le développement de systèmes d'aide à la décision nécessite d'avoir accès à des bases de données, d'avoir une infrastructure de recherche et développement</h4>
    <div class="row col-6 my-3">
      <ul>
        <li><h5>CHU Ste-Justine. L'accès à ces bases de données nécessitent une soumission au comité d'éthique du CHU Ste-Justine et un contrat de collaboration inter-institutionnel)</h5></li>
        <ul>
          <li><h6>Dossier clinique informatisé ICCA</h6></li>
          <li><h6>Base de données haute résolution</h6></li>
          <li><h6>Base de données vidéo MEDEVAC</h6></li>
          <li><h6>Base de données vidéo PICUPE (en cours d'élaboration)</h6></li>
          <li><h6>Tableau visuel des lits</h6></li>
          <li><h6>Univers informationnel (en cours de développement)</h6></li>
        </ul>
        <li><h5>Bases de données en open access</h5></li>
        <ul>
          <li><h6>MIMIC III</h6></li>
          <li><h6>...</h6></li>
        </ul>
      </ul>
    </div>
  </div>
</div>  
@endsection