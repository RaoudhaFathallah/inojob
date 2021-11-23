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
				<h3></h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Compétences & Langues</li>
					</ul>
				</nav>
			</div>


<div class="row">
<!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i>Compétences</h3>
            </div>
            <form class="form-inline" method="post" action="{{route('competence.save')}}">
            {{ csrf_field()}}
@php ($datas = explode("," ,  Auth::user()->competences))
        <div class="row">
          <div class="col-md-12"></div>
            <div class="form-group  row" style=" padding-bottom: 0px;padding-top: 0px; margin-left: 0px;margin-right: 0px;padding-left: 50px; margin-top: 40px;">
                <label for="Tags" class="col-sm-4" style="margin-top: 0px;margin-bottom: 80px;"> Sélectionnez  vos compétences</label>
                <br>
                <select  name="competence[]" class="form-control typeahead col-sm-8 select2_tags" id="competence1" multiple="multiple">
                    @foreach($competences as $competence)
                        <option value="{{ $competence->id }}" @if(in_array($competence->name,$datas)) selected @endif> {{ $competence->name }}</option>
                    @endforeach
                </select>
             </div>
          </div>

                <div class="col-xl-4" >
                    <div class="submit-field" style="text-align: center">
              <button type="submit" style="color: white;white;font-size: 12px;margin-top: 0px;margin-left: 0px;margin-right: 200px;margin-bottom: 60px;left: 0px;right: 50px;"  class="button ripple-effect big margin-top-30">
                  {{ __('Enregistrer') }}
              </button>
          </div>
        </div>
      </form>
        </div>
    </div>



<div class="col-xl-12">
    <div class="dashboard-box margin-top-0">

        <!-- Headline -->
        <div class="headline">
            <h3 style="color: #2a41e8;"><i class="icon-feather-folder-plus"></i> Langues</h3>
        </div>
        <form name="add_item" id="add_item" class="form-inline" method="post" action="{{route('langue.save')}}">
            {{ csrf_field()}}
            <div class="content with-padding padding-bottom-10 input_fields_wrap">
                @if(count($niveau_langues)>0)
                    @foreach($niveau_langues as $key => $niveau_langue)

                        <div class="row" id="block">


                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>Langue</h5>
                                    <select id="langue" name="langue[{{$key}}]" class="langue" required>
                                        <option value="" selected>-Select-</option>

                                        @foreach ($langues as $langue)

                                            <option value="{{$langue->id}}" @if($niveau_langue->langue_id == $langue->id) selected @endif>{{$langue->nom}}</option>


                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>Niveau</h5>
                                    <select id="niveau" name="niveau[{{$key}}]" class="niveau" required>
                                        <option value="" selected>-Select-</option>

                                        @foreach ($niveaux as $niveau)

                                            <option value="{{$niveau->id}}" @if($niveau_langue->niveau_id == $niveau->id) selected @endif  >{{$niveau->nom}}</option>

                                        @endforeach
                                    </select>
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
                                <h5>Langue</h5>
                                <select id="langue" name="langue[0]" class="langue" required>
                                    <option value="" selected>-Select-</option>

                                    @foreach ($langues as $langue)

                                        <option value="{{$langue->id}}" @if($niveau_langue->langue_id == $langue->id) selected @endif>{{$langue->nom}}</option>


                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Niveau</h5>
                                <select id="niveau" name="niveau[0]" class="niveau" required>
                                    <option value="" selected>-Select-</option>

                                    @foreach ($niveaux as $niveau)

                                        <option value="{{$niveau->id}}" @if($niveau_langue->niveau_id == $niveau->id) selected @endif  >{{$niveau->nom}}</option>

                                    @endforeach
                                </select>
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
            @if(count($niveau_langues)>0)
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
                $(wrapper).append('<div class="row"> <div class="col-xl-4"> <div class="submit-field"> <h5>Langue</h5> <select id="langue" name="langue['+$session.imput+']" class="langue" required><option value="" selected>-Select-</option> @foreach ($langues as $langue)<option value="{{$langue->id}}" >{{$langue->nom}}</option> @endforeach</select> </div></div> <div class="col-xl-4"> <div class="submit-field"><h5>Niveau</h5><select id="niveau" name="niveau['+$session.imput+']" class="niveau" required> <option value="" selected>-Select-</option>  @foreach ($niveaux as $niveau) <option value="{{$niveau->id}}" >{{$niveau->nom}}</option> @endforeach  </select></div> </div>  <div style="cursor:pointer;background-color:#e79528;margin-left: 120px; margin-bottom: 20px;padding-bottom: 0px;padding-top: 10px;width: 96px;height: 42px;border-top-width: 0px;" class="remove_field btn btn-info">Supprimer</div></div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })

    });
</script>

