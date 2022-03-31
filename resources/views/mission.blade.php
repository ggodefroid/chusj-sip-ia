@extends('base')
@section('titre')
Mission
@endsection
@section('content') 
<div class="container justify-content-center my-3">
  <div class="container">
    <div class="row">
        <div class="col-12">
          <strong><h2 class="text-center">Mise en contexte</h2>
          <h5>Les progrès rapides des systèmes de collecte de données cliniques et de l’intelligence artificielle (IA) ouvrent des perspectives de développement et validation de systèmes informatiques d'aide à la décision clinique (SIADC) pour améliorer la prise en charge des patients. Le développement des réseaux de santé a résulté en une diminution de la mortalité, une durée d'hospitalisation plus courte et moins de complications du fait d’une surveillance continue par du personnel formé. Cependant, les connaissances médicales, le volume et la diversité des informations cliniques ont considérablement augmenté et les contraintes du système de santé s’accompagnent de ressources limitées en personnel. Ensemble, ces considérations entraînent deux principaux obstacles à l’optimisation des soins, qui peuvent s’aggraver en cas de stress plus important sur le système : 
          <ul>
            <li>des délais dans la détection et la prise en charge des aggravations des fonctions vitales. Peu de processus sont actuellement disponibles pour faciliter l’identification précoce de ces aggravations, à l'exception du jugement clinique des soignants; </li>
            <li>des délais dans la mise en œuvre des bonnes pratiques, du fait d’une méconnaissance des lignes directrices ou de leur application insuffisante. Ceci est particulièrement vrai pour les soins aigus délivrés aux enfants car cette population vulnérable nécessite des soins spécialisés, adaptés à sa catégorie d’âge (nouveau-né, nourrisson, enfant, adolescent) et a la plus grande espérance de vie, avec le potentiel d’un impact majeur de toute amélioration de prise en charge en terme de santé durable. Il est donc nécessaire de développer des outils spécifiques pour cette population.</li>
          </ul> 
L’IA appliquée en santé peut être définie comme étant un ensemble de systèmes, combinant algorithmes et instruments médicaux, ayant une certaine capacité d’autonomie décisionnelle. Parmi ces systèmes, les SIADC sont des applications impliquant un ensemble d’algorithmes dont le but est d’aider le soignant ou le gestionnaire, en analysant et synthétisant les informations menant, à prendre une décision. Ces systèmes possèdent une capacité d’analyse et de synthèse de l’information nettement supérieures à l’être humain. L’intégration des SIADC aux processus de soins est recommandée depuis longtemps, pour améliorer la sécurité des patients. Dans une méta analyse sur l’impact clinique des SIADC, Kwan JL et al ont observé que c’est en pédiatrie que s’observent les meilleures améliorations incrémentielles absolues des soins souhaités (13,6% (95%IC 7,4 à 19,8%) selon les caractéristiques de l'étude et du SIADC.
Toutefois, la conception puis l’implantation d’un SIADC sont complexes tant au niveau de la construction du moteur de décision qu’au niveau de l’intégration et les interactions avec les humains. Afin de pallier à ces difficultés, nous proposons de créer le regroupement en IA appliquée aux soins aigus de l’enfant.</h5></strong>
        </div> 
        <div class="col-6 pt-5">
          <img src=" {{ URL('img/Thumbnail.jpg') }} " alt="IA" width="100%">
          <h2 class="text-center pt-4">Mission</h2>
          <h5>La mission du regroupement en IA appliquée aux soins aigus de l’enfant est d’offrir une infrastructure québécoise qui permet de développer la recherche en IA, soutenir la relève, rendre plus compétitif les chercheurs et faciliter la collaboration, la synergie et les partenariats constructifs à l’échelle provinciale, nationale et internationale. Le rôle du regroupement est d’orienter les méthodologies IA, de développer, valider et implémenter (intégrer dans les processus de soins) des SIADC en soins aigus de l’enfant afin ultimement, d’améliorer les soins en santé délivrés aux enfants. Les objectifs stratégiques de notre regroupement et les résultats opérationnels anticipés sont présentés dans le document impacts et retombées.</h5>
        </div>
        <div class="col-6">
          <h2 class="text-center">Vision</h2>
          <h5>La vision du regroupement repose sur la volonté de consolider les collaborations entre les membres, de renforcer la structure de fonctionnement et de potentialiser les impacts auprès du système de santé et des patients en plus de soutenir les capacités de recherche. Cette vision a été discutée en groupe et estbasée sur un modèle d’innovation ouverte pour les membres du groupe et partiellement ouverte ou contrôlé à l’extérieur du groupe. Ce modèle d’innovation ouverte serait basé sur :
            <ul>
              <li>une reconnaissance au groupe et des chercheurs-membres du regroupement;</li>
              <li>la possibilité de mobiliser du financement ou même de générer de revenus de l’industrie qui seraient réinjectés au niveau du regroupement et dans les projets des chercheurs-membres du groupe (en appui au modèle de financement public);</li>
              <li>une stratégie de propriété intellectuelle avec l’industrie qui met en valeur l’expertise (service) en premier lieu (ex. recherche commanditée, services par des professionnels hautement qualifiés, stages dans l’industrie, accès à de l’infrastructure…)</li>
            </ul>
          </h5>
        </div>


    </div>
  </div>
  
</div>
@endsection