@extends('layouts.app')
@section('content')
<style>
    .title {
    background: $grey-color;

    width: 110px;
    height: 110px;
    color: #fff;
    }
</style>

<div class="main" style="">

<div class="container" style="width: 630px;
position: relative;
margin: 0 auto;
background: #fff;
box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
-webkit-box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
-o-box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
-ms-box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
-o-border-radius: 10px;
-ms-border-radius: 10px;">
       <h2>INSCRIPTION COMPTE DE CANDIDAT</h2>
            <form action="{{route('candidat.update', $users->id)}}" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
            {{ csrf_field()}}

            {{ method_field('GET') }}
                    <h3>
                        <span class="icon"><i class="ti-user"></i></span>
                        <span class="title_text">Personnel</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Renseignements personnels: </span>
                            <span class="step-number">Step 1 / 3</span>
                        </legend>
                        <div class="form-group">
                            <label for="name" class="form-label required">Nom</label>
                            <input type="text" name="name" id="first_name" value="{{$users->name}}" required/>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="form-label required" >Prénom</label>
                            <input type="text" name="prenom" id="prenom" value="{{$users->prenom}}" required/>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label required">Email</label>
                            <input type="text" readonly  name="email" id="last_name" value="{{$users->email}}" />
                        </div>


                         <div class="form-group">
                                <label for="gender" class="form-label required">Etat Civil</label>
                                    <select name="etat_civil" id="etat_civil" required>
                                    <option value="{{$users->etat_civil}}">{{$users->etat_civil}}</option>
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Divorcé">Divorcé </option>
                                        <option value="Marié">Marié </option>
                                        <option value="Veuf">Veuf  </option>
                                    </select>
                                </div>



                         <div class="form-row">
                            <div class="form-date">
                                <label for="birth_date" class="form-label required">Date de naissance</label>
                                <input type="date" id="datenaissance" required name="datenaissance" value="{{$users->datenaissance}}">
                            </div>

                            <div class="form-select">
                                <label for="gender" class="form-label required">Genre</label>
                                <div class="select-list">
                                    <select name="genre" id="genre">
                                    <option value="{{$users->genre}}">{{$users->genre}}</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-email"></i></span>
                        <span class="title_text" style="text-align:center">Interet Professionels</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Coordonnées: </span>
                            <span class="step-number">Step 2 / 3</span>
                        </legend>
                        <div class="form-group" style="height: 90px;">
                                <label for="gender" class="form-label required">Niveau d'expérience Professionel?</label>
                                <div class="select-list">
                                    <select name="experience" id="experience">
                                        <option value="{{$users->experience}}">{{$users->experience}}</option>
                                        <option value="Etudiant">Etudiant</option>
                                        <option value="Débutant">Débutant</option>
                                        <option value="Junior">Junior</option>
                                        <option value="Expert">Expert</option>
                                    </select>
                                </div>
                                </div>
                        <div class="form-group" style="height: 90px;">
                                <label for="gender" class="form-label required">Type d'emploi</label>
                                <div class="select-list">
                                    <select name="type_emploi" id="type_emploi" required>
                                    <option value="{{$users->type_emploi}}">{{$users->type_emploi}}</option>
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
                        <div class="form-group">
                            <label for="name" class="form-label required">Quel est le nom de poste / fonction qui décrit ce que vous recherchez? </label>
                            <input type="text" name="poste" id="poste" value="{{$users->poste}}" required/>
                        </div>
                        <div class="form-group">
                                    <label class="form-label required" for="domaine_activite_id">Quels sont les domaines d'activites qui vous intéressent? </label>
                                    <select class="form-control required" name="domaine_activite_id" id="domaine_activite" required>
                                    <option value="">{{$domaine_activite->domaine_activite_id}}</option>

                                     @foreach ($domaine_activites as $domaine_activite)
                                     @if ($domaine_activite->id == $users->domaine_activite_id)

                                     <option value="{{$domaine_activite->id}}" selected>{{$domaine_activite->nom}}</option>

                                     @else
                                     <option value="{{$domaine_activite->id}}" >{{$domaine_activite->nom}}</option>
                                     @endif

                                     @endforeach

                                    </select>
                         </div>

                         <div class="form-group" style="height: 90px;">
                                <label for="gender" class="form-label required">Quel est le salaire minimum que vous accepteriez?</label>
                                <div class="select-list">
                                    <select name="salaire" id="salaire" required>
                                    <option value="{{$users->salaire}}">{{$users->salaire}}</option>
                                        <option value="entre 300dt et 500dt">entre 300dt et 500dt</option>
                                        <option value="entre 500dt et 700dt">entre 500dt et 700dt</option>
                                        <option value="entre 700dt et 900dt">entre 700dt et 900dt</option>
                                        <option value="plus 1000dt">plus 1000dt</option>
                                    </select>
                                </div>
                        </div>

                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-credit-card"></i></span>
                        <span class="title_text" style="text-align:center">Informations Générals</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Photo de profil: </span>
                            <span class="step-number">Step 3 / 3</span>
                        </legend>
                        <div class="form-group">
                            <label for="image" class="form-label required" style="font-size: 22px; text-align: center;">Télecharger une image de profil</label>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Choisier un logo</label>
                            @if($users->image)
                                <a  target="_blank" href="{{url($users->image)}}">Voir l'ancien photo </a>
                            @endif
                            <input type="file" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}"  name="image" >
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                                    <label class="form-label required" for="region_id">Gouvenorat</label>
                                    <select class="form-control required" name="region_id" id="region" required>
                                    <option value="">{{$region->region_id}}</option>

                                     @foreach ($regions as $region)
                                     @if ($region->id == $users->region_id)

                                     <option value="{{$region->id}}" selected>{{$region->nom}}</option>

                                     @else
                                     <option value="{{$region->id}}" >{{$region->nom}}</option>
                                     @endif

                                     @endforeach

                                    </select>
                         </div>
                         <div class="form-group">
                            <label for="phone" class="form-label required">Télephone</label>
                            <input type="number" name="tel" id="tel" value="{{$users->tel}}" required/>
                        </div>
                    </fieldset>

            </form>
        </div>

    </div>
@endsection
