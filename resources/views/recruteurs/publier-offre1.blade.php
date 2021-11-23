@extends('recruteurs.template1')

@section('content')
<style>
body { background-color:#fafafa;}
.container { margin: 150px auto; }
h2 { margin:20px auto; font-size:14px;}
.badge { margin: 2px 5px; }
</style>
	<!-- Dashboard Content
	================================================== -->

			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Publier une offre</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Publier une offre</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">
                    <form method="POST" action="{{ route('offre.store') }}">

						<!-- Headline -->
						<div class="headline">
							<h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Information Géneral</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
                        {{ csrf_field()}}

                        {{ method_field('GET') }}	
                    	<div class="row">
                          
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Intitulé de l'offre</h5>
										<input type="text" name="titre" id="titre" value="{{$offres->titre}}" required class="with-border">
									</div>
								</div>

								<div class="form-select">
                                <label for="gender" class="form-label required">Genre</label>
                                <div class="select-list">
                                    <select name="genre" id="genre">
                                        <option value="{{$offres->genre}}">{{$offres->genre}}</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                        <option value="Homme/Femme">Homme/Femme</option>
                                    </select>
                                </div>
                            </div>
                                
                                <div class="col-xl-4">
                                <div class="submit-field">
										<h5>Age</h5>
                                    <select  name="age" id="age" required>
                                    <option value="{{$offres->age}}">{{$offres->age}}</option>
                                        <option value="Entre 20 ans et 25 ans">Entre 20 ans et 25 ans</option>
                                        <option value="Entre 26 ans et 30 ans">Entre 26 ans et 30 ans</option>
                                        <option value="Plus 31 ans">Plus de 31 ans</option>
                                    </select>
                                </div>
								</div>

                                <div class="col-xl-4">
                                <div class="submit-field">
										<h5>Salaire</h5>
                                    <select name="salaire" id="salaire" required>
                                    <option value="{{$offres->salaire}}">{{$offres->salaire}}</option>
                                        <option value="entre 300dt et 500dt">entre 300dt et 500dt</option>
                                        <option value="entre 500dt et 700dt">entre 500dt et 700dt</option>
                                        <option value="entre 700dt et 900dt">entre 700dt et 900dt</option>
                                        <option value="plus 1000dt">plus 1000dt</option>
                                    </select>
                                </div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Ville</h5>
										<select name="region_id" id="region" required>
                                    <option value="">{{$region->region_id}}</option>

                                     @foreach ($regions as $region)
                                     @if ($region->id == $offres->region_id)

                                     <option value="{{$region->id}}" selected>{{$region->nom}}</option>

                                     @else
                                     <option value="{{$region->id}}" >{{$region->nom}}</option>
                                     @endif
                                     
                                     @endforeach
                                    </select>
									</div>
								</div>

                           
                        </div>
                 
			<!-- Row / End -->
            <div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Informations Professionnelles</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
                     	
                    	<div class="row">
                          
                        <div class="col-xl-6">
                                <div class="submit-field">
										<h5>Nombre d'années de votre expérience</h5>
                                    <select name="nb_experience" id="nb_experience">
                                    <option value="{{$offres->nb_experience}}">{{$offres->nb_experience}}</option>
                                        <option value="Débutant">Débutant</option>
                                        <option value="0 à 1 an">0 à 1 an</option>
                                        <option value="1 à 3 ans">1 à 3 ans</option>
                                        <option value="3 à 5 ans">3 à 5 ans</option>
                                        <option value="5 à 10 ans">5 à 10 ans</option>
                                        <option value="plus 10 ans">plus 10 ans</option>
                                    </select>
                                </div>
                        </div> 
                        <div class="col-xl-6">
                                <div class="submit-field">
                                <h5> Nombre d'années de votre expérience similaire</h5>
                                    <select name="nb_experience" id="nb_experience">
                                    <option value="{{$offres->nb_experience_similaire}}">{{$offres->nb_experience_similaire}}</option>
                                        <option value="0 à 1 an">1 an</option>
                                        <option value="1 à 3 ans">1 à 3 ans</option>
                                        <option value="3 à 5 ans">3 à 5 ans</option>
                                        <option value="5 à 10 ans">5 à 10 ans</option>
                                        <option value="plus 10 ans">plus 10 ans</option>
                                    </select>
                                </div>
                        </div> 

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>Secteur</h5>
										<select  name="domaine_activite_id" id="domaine_activite" required>
                                    <option value="">{{$domaine_activite->domaine_activite_id}}</option>

                                     @foreach ($domaine_activites as $domaine_activite)
                                     @if ($domaine_activite->id == $offres->domaine_activite_id)

                                     <option value="{{$domaine_activite->id}}" selected>{{$domaine_activite->nom}}</option>

                                     @else
                                     <option value="{{$domaine_activite->id}}" >{{$domaine_activite->nom}}</option>
                                     @endif
                                     
                                     @endforeach
                                     
                                    </select>
									</div>
								</div>
                                

								
                                
                                <div class="col-xl-6">
                                <div class="submit-field">
										<h5>Type d'emploi</h5>
                                    <select  name="type_contrat" id="type_contrat" required>
                                    <option value="{{$offres->type_contrat}}">{{$offres->type_contrat}}</option>
                                        <option value="CDI">CDI</option>
                                        <option value="CDD">CDD</option>
                                        <option value="Temps plein">Temps plein</option>
                                        <option value="Temps Partiel">Temps Partiel</option>
                                        <option value="Freelance/Indépendant">Freelance/Indépendant</option>
                                        <option value="Saisonner">Saisonner</option>
                                        <option value="Contrat al karama">Contrat al karama</option>
                                        <option value="SIVP">SIVP</option>
                                    </select>
                                </div>
								</div>

						

								<div class="col-xl-12">
									<div class="submit-field">
                                    <h5>Compétances</h5>
                                    <input type="text" data-role="tagsinput" value="jQuery,Script,Net">									</div>
								</div>


                           
                        </div>

						</div>
					</div>
				</div>

				
			</div>
            <div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Information Academique</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
                     
                    	<div class="row">
                          
                        <div class="col-xl-4">
                                <div class="submit-field">
										<h5>Niveau d'etude</h5>
                                    <select class="form-control" name="niveau_etude" required>
                                        <option value="">Sélectionnez Niveau d&#039;étude</option> 
                                        <option value="676">Diplôme non validé</option>
                                        <option value="677">Bac Professionnel, BEP, CAP</option>
                                        <option value="678">Xpert, Recherche</option>
                                        <option value="679">Doctorat, PHD</option>
                                        <option value="680">Ingénieur</option>
                                        <option value="681">Licence, Bac + 3</option>
                                        <option value="682">Lycée, Niveau Bac</option>
                                        <option value="683">Bac non validé</option>
                                        <option value="978">Etudiant</option>
                                        <option value="684">DUT, BTS, Bac + 2</option>
                                        <option value="685">Maîtrise, IEP, IUP, Bac + 4</option>
                                        <option value="693">DESS, DEA, Master, Bac + 5, Grandes Ecoles</option>
                                        <option value="686">Autres</option>
                                    </select>
                                </div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Diplôme ou spécialité</h5>
										<select  name="domaine_activite_id" id="domaine_activite" required>
                                    <option value="">{{$domaine_activite->domaine_activite_id}}</option>

                                     @foreach ($domaine_activites as $domaine_activite)
                                     @if ($domaine_activite->id == $offres->domaine_activite_id)

                                     <option value="{{$domaine_activite->id}}" selected>{{$domaine_activite->nom}}</option>

                                     @else
                                     <option value="{{$domaine_activite->id}}" >{{$domaine_activite->nom}}</option>
                                     @endif
                                     
                                     @endforeach
                                     
                                    </select>
									</div>
								</div>
                                

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Université ou établissement</h5>
										<select name="region_id" id="region" required>
                                    <option value="">{{$region->region_id}}</option>

                                     @foreach ($regions as $region)
                                     @if ($region->id == $offres->region_id)

                                     <option value="{{$region->id}}" selected>{{$region->nom}}</option>

                                     @else
                                     <option value="{{$region->id}}" >{{$region->nom}}</option>
                                     @endif
                                     
                                     @endforeach
                                    </select>
									</div>
								</div>

                          
                        </div>
                </form>
						</div>
					</div>
				</div>	
			</div>
            <div class="col-xl-3">
                              <button type="submit" style="color: white;" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i>
                                    {{ __('Publier') }}
                                </button>
				            </div>
                            </from>
                        
                           
@endsection
<script>
$(document).ready(function() {

$('.chips-placeholder').materialChip({
  placeholder: 'Enter a tag',
  secondaryPlaceholder: '+Tag',
});
})

$("input").val()	
$("input").tagsinput('items')	

</script>

