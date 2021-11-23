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

<div class="row">
<!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Informations Géneral</h3>
            </div>
            <form class="form-inline" method="post" action="{{route('offre.store')}}">
            {{ csrf_field()}}
            <div class="content with-padding padding-bottom-10">
            
                <div class="row">
                    <div class="col-xl-6">
                            <div class="submit-field">
                            <h5>Intitulé de l'offre</h5>
										<input type="text" name="intitule" id="intitule" required class="with-border">
                            </div>
                    </div> 

                    <div class="col-xl-3">
                        <div class="submit-field">
                        <h5>Région</h5>
								<select id="region" name="region" class="region" required>
                                    <option value="0" disabled selected>-Select-</option>

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

                    <div class="col-xl-3">
                            <div class="submit-field">
                           <h5>Ville</h5>
								<select id="ville" name="ville" >
                                <option value="0" disabled selected>-Select-</option>

                                </select>
                            </div>
                    </div>       

                    <div class="col-xl-3">
                        <div class="submit-field">
                                <h5>Domaine</h5>
									<select  name="domaine_activite_id" id="domaine_activite_id" required>
                                    <option value="0" disabled selected>-Select-</option>

                                        @foreach ($domaine_activites as $domaine_activite)
                                        @if ($domaine_activite->id == $offres->domaine_activite_id)

                                        <option value="{{$domaine_activite->nom}}" selected>{{$domaine_activite->nom}}</option>

                                        @else
                                        <option value="{{$domaine_activite->nom}}" >{{$domaine_activite->nom}}</option>
                                        @endif
                                        
                                        @endforeach
                                    </select>				
                        </div>
                    </div> 

                    <div class="col-xl-3">
                            <div class="submit-field">
                                <h5>Genre</h5>
                                    <select name="genre" id="genre">
                                        <option value="">--</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                        <option value="Homme/Femme">Homme/Femme</option>
                                    </select>
                            </div>
                    </div> 

                    <div class="col-xl-3">
                            <div class="submit-field">
                                <h5>Age</h5>
                                    <select  name="age" id="age" required>
                                        <option value="">--</option>
                                        <option value="Entre 20 ans et 25 ans">Entre 20 ans et 25 ans</option>
                                        <option value="Entre 26 ans et 30 ans">Entre 26 ans et 30 ans</option>
                                        <option value="Plus 31 ans">Plus de 31 ans</option>
                                    </select>
                            </div>
                    </div> 

                    <div class="col-xl-3">
                            <div class="submit-field">
                                <h5>Type d'emploi</h5>
                                    <select  name="type_contrat" id="type_contrat" required>
                                    <option value="0" disabled selected>-Select-</option>
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
                <h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Informations Professionnelles</h3>
            </div>

            <div class="content with-padding padding-bottom-10">
            
                <div class="row">
                    <div class="col-xl-4">
                            <div class="submit-field">
                                    <h5>Nb d'années d'expérience</h5>
                                <select  name="nb_experience" id="nb_experience" >
                                    <option value="" disabled selected>-Select-</option>
                                    <option value="1">1 année</option>
                                    <option value="3">3 ans</option>
                                    <option value="5">5 ans</option>
                                    <option value="10">10 ans</option>
                                </select>
                            </div>
                    </div>  
                    <div class="col-xl-4">
                        <div class="submit-field">
                                    <h5>Secteur</h5>
                                    <select  name="secteur" id="secteur" >
                                    <option value="0" disabled selected>-Select-</option>
                                        <option value="informatique">informatique</option>
                                        <option value="comptabilité">comptabilité</option>
                                        <option value="marketing">marketing</option>
                                        <option value="finance">finance</option>
                                    </select>
                        </div>
                    </div>       
                    <div class="col-xl-4">
                            <div class="submit-field">
                            <h5> Poste occupé</h5>
                            <select id="poste" name="poste" >
                                <option value="">--Select--</option>

                                @foreach ($postes as $poste)
                                @if ($poste->id == $parcours_academiques->poste_id)

                                <option value="{{$poste->name}}" selected>{{$poste->name}}</option>

                                @else
                                <option value="{{$poste->name}}">{{$poste->name}}</option>
                                @endif

                                @endforeach
                                </select>
                            </div>
                    </div>         
                    <div class="col-xl-4">
									<div class="submit-field">
										<h5>Sélectionner  les compétences</h5>
                                        <select  name="competence[]"  id="competence" multiple>
                                            @foreach($competences as $competence)
                                                <option value="{{ $competence->id }}"> {{ $competence->name }}</option>
                                            @endforeach
                                        </select>

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
                <h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Informations Acadimique</h3>
            </div>

            <div class="content with-padding padding-bottom-10 input_fields_wrap">
            
                <div class="row">
                    <div class="col-xl-4">
                            <div class="submit-field">
                            <h5>Niveau d'etude</h5>
                                    <select name="niveau_etude" id="niveau_etude" >
                                        <option value="">Sélectionnez Niveau</option> 
                                        <option value="Diplôme non validé">Diplôme non validé</option>
                                        <option value="Bac Professionnel, BEP, CAP">Bac Professionnel, BEP, CAP</option>
                                        <option value="Xpert, Recherche">Xpert, Recherche</option>
                                        <option value="Doctorat, PHD">Doctorat, PHD</option>
                                        <option value="Ingénieur">Ingénieur</option>
                                        <option value="Licence, Bac + 3">Licence, Bac + 3</option>
                                        <option value="Lycée, Niveau Bac">Lycée, Niveau Bac</option>
                                        <option value="Bac non validé">Bac non validé</option>
                                        <option value="Etudiant">Etudiant</option>
                                        <option value="DUT, BTS, Bac + 2">DUT, BTS, Bac + 2</option>
                                        <option value="Maîtrise, IEP, IUP, Bac + 4">Maîtrise, IEP, IUP, Bac + 4</option>
                                        <option value="DESS, DEA, Master, Bac + 5, Grandes Ecoles">DESS, DEA, Master, Bac + 5, Grandes Ecoles</option>
                                        <option value="Autres">Autres</option>
                                    </select>
                            </div>
                    </div>  

                    <div class="col-xl-4">
                        <div class="submit-field">
                                <h5>Etablissement</h5>
                                <select name="etablissement[]" id="etablissement" multiple >
                                    @foreach($etablissements as $etablissement)
                                        <option value="{{ $etablissement->id }}"> {{ $etablissement->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>       

                    <div class="col-xl-4">
									<div class="submit-field">
										<h5>Diplome</h5>
								<select id="diplome" name="diplome[]" multiple >
                                    @foreach($diplomes as $diplome)
                                        <option value="{{ $diplome->id }}"> {{ $diplome->nom }}</option>
                                    @endforeach
                                </select>
								</div>
						</div>         
                    <div class="col-xl-4" >
                        <div class="submit-field" style="text-align: center">
                                    <button type="submit" style="color: white;  white;font-size: 12px;"  class="button ripple-effect big margin-top-30 add_field_button">
                                                {{ __('Enregistrer') }}
                                    </button>						
                            </div>
                        </div> 
</from>  
      </div>
                </div>
            </div>
        </div>
    </div>   
    
    @endsection

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
                $(document).ready(function () {
                $('#region').on('change', function () {
                let id = $(this).val();
                $('#ville').empty();
                $('#ville').append(`<option value="0" disabled selected>Traitement...</option>`);
                $.ajax({
                type: 'GET',
                url: 'findVilleName/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#ville').empty();
                $('#ville').append(`<option value="0" disabled selected>Select ville</option>`);
                response.forEach(element => {
                    $('#ville').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
        });
    });
    </script>

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


