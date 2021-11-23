@extends('candidats.template1')

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
				<h3>Informations Académiques</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Informations Académiques</li>
					</ul>
				</nav>
			</div>


<div class="row">
<!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Informations Académiques</h3>
            </div>
            <form name="add_item" id="add_item" class="form-inline" method="post" action="{{route('academique.save')}}">
            {{ csrf_field()}}
            <div class="content with-padding padding-bottom-10 input_fields_wrap">
                @if(count($academiques)>0)

                @foreach($academiques as $key => $academique)
                <div class="row" id="block">
                <div class="col-xl-4">
                            <div class="submit-field">
                                    <h5>Date début</h5>
                                    <input type="date" name="date_debut[{{$key}}]" id="date_debut" value="{{$academique->date_debut}}" required class="with-border">
                            </div>
                    </div> 
                    <div class="col-xl-4">
                            <div class="submit-field">
                                    <h5>Date Fin</h5>
                                    <input type="date" name="date_fin[{{$key}}]" id="date_fin" value="{{$academique->date_fin}}" required class="with-border">
                            </div>
                    </div> 
                    <div class="col-xl-4">
                            <div class="submit-field">
                            <h5> Etablissement</h5>
                            <input id="etablissement" name="etablissement[{{$key}}]" value="{{$academique->etablissement_id}}" type="text" class="typeahead">
                            </div>
                   </div>
                    <div class="col-xl-4">
                        <div class="submit-field">
                        <h5>Niveau d'etude</h5>
                                    <select name="niveau_etude[{{$key}}]" id="niveau_etude" required>
                                        <option value="{{$academique->niveau_etude}}">{{$academique->niveau_etude}}</option>
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
										<h5>Diplome</h5>
								<select id="diplome" name="diplome[{{$key}}]" >
                                <option value="">{{$academique->diplome_id}}</option>

                                @foreach ($diplomes as $diplome)

                                <option value="{{$diplome->nom}}" @if($academique->diplome_id == $diplome->id)  selected @endif >{{$diplome->nom}}</option>

                                @endforeach
                                </select>
								</div>
						</div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                            <h5> Spécialité</h5>
                            <input id="specialite" name="specialite[{{$key}}]" value="{{ $academique->specialite_id }}" type="text" required class="typeahead">
                            </div>
                   </div>
                  
                   <div class="col-xl-4" >
                        <div class="submit-field" style="text-align: center">
                                    <button type="submit" style="color: white;  white;font-size: 12px;"  class="button ripple-effect big margin-top-30 add_field_button"><i class="icon-feather-plus"></i>
                                                {{ __('Ajouter') }}
                                    </button>						
                            </div>
                        </div>
                    <div class="col-xl-4" >
                        <div class="submit-field" style="text-align: center">
                            <button onclick = "myFunction()"  style="background-color: #e79528; color: white;  white;font-size: 12px;"  class="button ripple-effect big margin-top-30 ">
                                {{ __('Supprimer') }}
                            </button>
                        </div>
                    </div>
                        </div>
                @endforeach
                @else
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Date début</h5>
                                <input type="date" name="date_debut[0]" id="date_debut" value="{{$academique->date_debut}}" required class="with-border">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Date Fin</h5>
                                <input type="date" name="date_fin[0]" id="date_fin" value="{{$academique->date_fin}}" required class="with-border">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5> Etablissement</h5>
                                <input id="etablissement" name="etablissement[0]" value="{{$academique->etablissement_id}}" type="text" class="typeahead">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Niveau d'etude</h5>
                                <select name="niveau_etude[0]" id="niveau_etude" required>
                                    <option value="{{$academique->niveau_etude}}">{{$academique->niveau_etude}}</option>
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
                                <h5>Diplome</h5>
                                <select id="diplome" name="diplome[0]" required>
                                    <option value="{{$diplome->nom}}">--Select--</option>

                                    @foreach ($diplomes as $diplome)

                                        <option value="{{$diplome->nom}}" @if($academique->diplome_id == $diplome->id)  selected @endif >{{$diplome->nom}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5> Spécialité</h5>
                                <input id="specialite" name="specialite[0]" value="{{ $academique->specialite_id }}" type="text" required class="typeahead">
                            </div>
                        </div>

                        <div class="col-xl-4" >
                            <div class="submit-field" style="text-align: center">
                                <button type="submit" style="color: white;  white;font-size: 12px;"  class="button ripple-effect big margin-top-30 add_field_button"><i class="icon-feather-plus"></i>
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
                    <div class="col-xl-12" >
                        <div class="submit-field" style="text-align: right">
                                    <button type="submit" style="color: white;  white;font-size: 12px;"  class="button ripple-effect big margin-top-30 save">
                                                {{ __('Enregistrer') }}
                                    </button>						
                            </div>
                        </div>
            </form>
        </div>
    </div>
  
    
    @endsection
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            var del = document.getElementById("block");
            del.remove();
        }
    </script>

    <script>
    $(document).ready(function() {
        window.$session = {
            @if(count($academiques)>0)
            imput : {{$key}},
            @else
            imput : 0,
            @endif
         };
    var max_fields = 15; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_field_button"); //Add button ID
    var save = $(".save"); //Add button ID
    var x = 1; //initlal text box count
    //var path2 = "{{ route('autocomplete_etablissement') }}";
    $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
    x++; //text box increment
    $session.imput =$session.imput +1;
   $(wrapper).append('<div class="row"><div class="col-xl-4"><div class="submit-field"><h5>Date début</h5><input type="date" name="date_debut['+$session.imput+']" id="date_debut" value="{{$offres->nb_experience}}" required class="with-border"></div></div> <div class="col-xl-4"> <div class="submit-field"><h5>Date Fin</h5><input type="date" name="date_fin['+$session.imput+']" id="date_fin" value="{{$offres->nb_experience}}" required class="with-border"></div> </div>  <div class="col-xl-4"><div class="submit-field"><h5> Etablissement</h5><input id="etablissement'+$session.imput+'" name="etablissement['+$session.imput+']" type="text" class="typeahead"></div></div> <div class="col-xl-4"><div class="submit-field"><h5>Niveau d"etude</h5><select name="niveau_etude['+$session.imput+']" id="niveau_etude" required> <option value="">Sélectionnez Niveau</option> <option value="676">Diplôme non validé</option> <option value="677">Bac Professionnel, BEP, CAP</option><option value="678">Xpert, Recherche</option> <option value="679">Doctorat, PHD</option><option value="680">Ingénieur</option><option value="681">Licence, Bac + 3</option><option value="682">Lycée, Niveau Bac</option><option value="683">Bac non validé</option><option value="978">Etudiant</option><option value="684">DUT, BTS, Bac + 2</option><option value="685">Maîtrise, IEP, IUP, Bac + 4</option><option value="693">DESS, DEA, Master, Bac + 5, Grandes Ecoles</option><option value="686">Autres</option> </select> </div></div> <div class="col-xl-4"><div class="submit-field"><h5>Diplome</h5><select id="diplome'+$session.imput+'" name="diplome['+$session.imput+']" required><option value="">--Select--</option>@foreach ($diplomes as $diplome)@if ($diplome->id == $parcours_academiques->diplome_id)<option value="{{$diplome->id}}" selected>{{$diplome->nom}}</option>@else<option value="{{$diplome->id}}" >{{$diplome->nom}}</option>@endif @endforeach</select></div></div><div class="col-xl-4"><div class="submit-field"><h5> Spécialité</h5><input id="specialite" name="specialite['+$session.imput+']" type="text" class="typeahead"></div></div><div style="cursor:pointer;background-color:#e79528;margin-left: 120px; margin-bottom: 20px;padding-bottom: 0px;padding-top: 10px;width: 96px;height: 42px;border-top-width: 0px;" class="remove_field btn btn-info">Supprimer</div></div>'); //add input box
   $("#diplome"+$session.imput).select2({
            placeholder: "Select a Name",
            allowClear: true
        });

  /*$('#etablissement'+$session.imput).typeahead({
        source:  function (query, process) {
        return $.get(path2, { query: query }, function (data) {
                return process(data);
            });
         }
        });*/

    }
    console.log("#diplome"+$session.imput);

    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    /*$(save).click(function(){
           $.ajax({
                url:"{{route('professionnel.save')}}",
                method:"PUT",
                data:$('#add_item').serialize(),
                type:'json',

           });
      });  */
    });
</script>

