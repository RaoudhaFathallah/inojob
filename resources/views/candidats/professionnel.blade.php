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
				<h3>Informations Professionnelles</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Informations Professionnelles</li>
					</ul>
				</nav>
			</div>


<div class="row">
<!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Informations Professionnelles</h3>
            </div>
            <form name="add_item" id="add_item" class="form-inline" method="post" action="{{route('professionnel.save')}}">
            {{ csrf_field()}}
            <div class="content with-padding padding-bottom-10 input_fields_wrap">
                @if(count($professionnels)>0)
@foreach($professionnels as $key => $professionnel)
                <div class="row" id="block">
                <div class="col-xl-4">
                            <div class="submit-field">
                                    <h5>Organisme</h5>
                                    <input type="text" name="entreprise[{{$key}}]" id="entreprise" value="{{$professionnel->nom_entreprise}}" required class="with-border">

                        </div>
                    </div> 
                <div class="col-xl-4">
                            <div class="submit-field">
                                    <h5>Date début</h5>
                                    <input type="date" name="date_debut[{{$key}}]" id="date_debut" value="{{$professionnel->date_debut}}" required class="with-border">
                            </div>
                    </div> 
                    <div class="col-xl-4">
                            <div class="submit-field">
                                    <h5>Date Fin</h5>
                                    <input type="date" name="date_fin[{{$key}}]" id="date_fin" value="{{$professionnel->date_fin}}" required class="with-border">
                            </div>
                    </div> 
                    
                    <div class="col-xl-4">
                        <div class="submit-field">
                                    <h5>Domaine</h5>
                                    <select  name="domaine_activite_id[{{$key}}]" id="domaine_activite" >
                                <option value="">{{$professionnel->domaine_activite_id}}</option>

                                @foreach ($domaine_activites as $domaine_activite)

                                <option value="{{$domaine_activite->nom}}" @if($professionnel->domaine_activite_id == $domaine_activite->id) selected @endif  >{{$domaine_activite->nom}}</option>

                                @endforeach
                                </select>
                        </div>
                    </div>       
                    <div class="col-xl-4">
                            <div class="submit-field">
                            <h5> Poste occupé</h5>
                            <input id="poste" name="poste[{{$key}}]" value="{{$professionnel->poste_id}}" type="text" class="typeahead">
                            </div>
                   </div>
               
                        <div class="col-xl-12">
                            <div class="submit-field">
                                    <h5>Déscription</h5>
                                    <label style="color: #2a41e8;">— Présentez brièvement vos missions sous forme de liste en privilégiant les verbes d’actions : réaliser, gérer, préparer, entretenir, organiser, planifier...
</br>— À noter : s’il s’agit d’une petite structure, vous pouvez décrire en une ligne son activité pour que cela soit plus parlant pour le recruteur.</label>
                                    <textarea cols="30" rows="5" name="description[{{$key}}]" class="with-border"  >{{$professionnel->description}}</textarea>
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
                                <h5>Organisme</h5>
                                <input type="text" name="entreprise[0]" id="entreprise" required class="with-border">

                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Date début</h5>
                                <input type="date" name="date_debut[0]" id="date_debut" required class="with-border">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Date Fin</h5>
                                <input type="date" name="date_fin[0]" id="date_fin" required class="with-border">
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Domaine</h5>
                                <select  name="domaine_activite_id[0]" id="domaine_activite" required>
                                    <option value="">{{$professionnel->domaine_activite_id}}</option>

                                    @foreach ($domaine_activites as $domaine_activite)

                                        <option value="{{$domaine_activite->nom}}" @if($professionnel->domaine_activite_id == $domaine_activite->id)  selected @endif >{{$domaine_activite->nom}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5> Poste occupé</h5>
                                <input id="poste" name="poste[0]"  type="text" class="typeahead">
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="submit-field">
                                <h5>Déscription</h5>
                                <label style="color: #2a41e8;">— Présentez brièvement vos missions sous forme de liste en privilégiant les verbes d’actions : réaliser, gérer, préparer, entretenir, organiser, planifier...
                                    </br>— À noter : s’il s’agit d’une petite structure, vous pouvez décrire en une ligne son activité pour que cela soit plus parlant pour le recruteur.</label>
                                <textarea cols="30" rows="5" name="description[0]" class="with-border"  ></textarea>
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
            @if(count($professionnels)>0)
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
    $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
    x++; //text box increment
    $session.imput =$session.imput +1;
   $(wrapper).append('<div class="row"><div class="col-xl-4"><div class="submit-field"><h5>Organisme</h5><input type="text" name="entreprise['+$session.imput+']" id="entreprise" value="" required class="with-border"></div></div><div class="col-xl-4"><div class="submit-field"><h5>Date début</h5><input type="date" name="date_debut['+$session.imput+']" id="date_debut" value="" required class="with-border"></div></div><div class="col-xl-4"><div class="submit-field"><h5>Date Fin</h5><input type="date" name="date_fin['+$session.imput+']" id="date_fin" value="" required class="with-border"></div></div><div class="col-xl-4"><div class="submit-field"><h5>Domaine</h5><select  name="domaine_activite_id['+$session.imput+']" id="domaine_activite" required><option value="">{{$domaine_activite->domaine_activite_id}}</option>@foreach ($domaine_activites as $domaine_activite)@if ($domaine_activite->id == $professionnel->domaine_activite_id)<option value="{{$domaine_activite->id}}" selected>{{$domaine_activite->nom}}</option> @else <option value="{{$domaine_activite->id}}" >{{$domaine_activite->nom}}</option> @endif @endforeach </select></div></div><div class="col-xl-4"><div class="submit-field"><h5> Poste occupé</h5><input  type="text" name="poste['+$session.imput+']" id="poste1" class="typeahead"></div></div> <div class="col-xl-12"><div class="submit-field"><h5>Déscription</h5><label style="color: #2a41e8;">— Présentez brièvement vos missions sous forme de liste en privilégiant les verbes d’actions : réaliser, gérer, préparer, entretenir, organiser, planifier...</br>— À noter : s’il s’agit d’une petite structure, vous pouvez décrire en une ligne son activité pour que cela soit plus parlant pour le recruteur.</label><textarea cols="30" rows="5" name="description['+$session.imput+']" class="with-border"></textarea></div></div> <div style="cursor:pointer;background-color:#e79528;margin-left: 120px; margin-bottom: 20px;padding-bottom: 0px;padding-top: 10px;width: 96px;height: 42px;border-top-width: 0px;" class="remove_field btn btn-info">Supprimer</div></div>'); //add input box
    }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    
    }); 
</script>

