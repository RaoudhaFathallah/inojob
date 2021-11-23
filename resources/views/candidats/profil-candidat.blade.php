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

        <!-- Breadcrumbs -->
        <nav id="breadcrumbs" class="dark">
            <ul>
                <li><a href="#">Home</a></li>

                <li>Générer mon profil</li>
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
                <form class="form-inline" method="post" action="{{route('profil.score')}}">
                    {{ csrf_field()}}
                <div class="content with-padding padding-bottom-10">

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Intitulé</h5>
                                <input type="text" name="intitule" id="intitule"  required class="with-border">

                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Nb d'années d'expérience</h5>
                                <input type="number" name="nb_experience" id="nb_experience"  required class="with-border">
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Secteur</h5>
                                <input type="text" name="secteur" id="secteur"  required class="with-border">

                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5> Poste occupé</h5>
                                <input type="text" name="poste" id="poste"  required class="with-border">

                            </div>
                        </div>
                        @php ($datas = explode("," ,  Auth::user()->competences))

                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Compétences </h5>
                                <input type="text" name="competence[]" id="competence"  required class="with-border">


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
                                        <input type="text" name="niveau_etude" id="niveau_etude"  required class="with-border">

                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Etablissement</h5>
                                        <input type="text" name="etablissement" id="etablissement"  required class="with-border">

                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Diplome</h5>
                                        <input type="text" name="diplome" id="diplome"  required class="with-border">

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
                $(document).ready(function () {
                    $('#etablissement').on('change', function () {
                        let id = $(this).val();
                        $('#diplome').empty();
                        $('#diplome').append(`<option value="0" disabled selected>Traitement...</option>`);
                        $.ajax({
                            type: 'GET',
                            url: 'findDiplomeName/' + id,
                            success: function (response) {
                                var response = JSON.parse(response);
                                console.log(response);
                                $('#diplome').empty();
                                $('#diplome').append(`<option value="0" disabled selected>Select Diplome</option>`);
                                response.forEach(element => {
                                    $('#diplome').append(`<option value="${element['id']}">${element['nom']}</option>`);
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


