@extends('template')

@section('content')
<style>
/* @extend display-flex; */
display-flex, .form-row, ul, .title, .actions ul li a, .form-date-item .select-icon, .form-date-item .select-icon i, .form-date-group {
  display: flex;
  display: -webkit-flex;
 }

/* @extend list-type-ulli; */
list-type-ulli, ul {
  list-style-type: none;
  margin: 0;
  padding: 0; }

/* roboto-slab-300 - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Light"), local("RobotoSlab-Light"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
/* roboto-slab-regular - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Regular"), local("RobotoSlab-Regular"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
/* roboto-slab-700 - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Bold"), local("RobotoSlab-Bold"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }

input, select, textarea {
  outline: none;
  appearance: unset !important;
  -moz-appearance: unset !important;
  -webkit-appearance: unset !important;
  -o-appearance: unset !important;
  -ms-appearance: unset !important; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  appearance: none !important;
  -moz-appearance: none !important;
  -webkit-appearance: none !important;
  -o-appearance: none !important;
  -ms-appearance: none !important;
  margin: 0; }

input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -o-box-shadow: none !important;
  -ms-box-shadow: none !important; }

input[type=checkbox] {
  appearance: checkbox !important;
  -moz-appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  -o-appearance: checkbox !important;
  -ms-appearance: checkbox !important; }

input[type=radio] {
  appearance: radio !important;
  -moz-appearance: radio !important;
  -webkit-appearance: radio !important;
  -o-appearance: radio !important;
  -ms-appearance: radio !important; }

.clear {
  clear: both; }

h2 {
  font-size: 20px;
  color: #222;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  margin: 0px;
  padding-top: 35px; }

 

.main {
  padding: 80px 0;
  /*Background-image: "{{ asset('assets/images/background.jpg') }}";*/
}



.signup-form {
  padding: 32px 90px 40px 90px; }

input, select {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border: 1px solid #ebebeb;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  font-family: 'Roboto Slab';
  font-size: 13px;
  padding: 15px 20px; }

input:focus {
  border: 1px solid #666; }

input.valid {
  border: 1px solid #666; }

.form-group, .form-select, .form-date {
  margin-bottom: 15px;
  position: relative; }

.form-row {
  justify-content: space-between;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -o-justify-content: space-between;
  -ms-justify-content: space-between; }
  .form-row .form-select {
    width: 160px; }
  .form-row .form-date {
    width: 266px; }

label {
  display: block;
  width: 100%;
  font-size: 13px;
  font-weight: 400;
  margin-bottom: 5px; }

label.required {
  position: relative; }
  label.required:after {
    content: '*';
    margin-left: 2px;
    color: #b90000; }

.steps {
  margin-bottom: 23px; }
  .steps ul {
    justify-content: space-between;
    -moz-justify-content: space-between;
    -webkit-justify-content: space-between;
    -o-justify-content: space-between;
    -ms-justify-content: space-between; }

a {
  text-decoration: none; }

.icon {
  font-size: 29px; }

.title {
  background: #adadad;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  justify-content: center;
  -moz-justify-content: center;
  -webkit-justify-content: center;
  -o-justify-content: center;
  -ms-justify-content: center;
  align-items: center;
  -moz-align-items: center;
  -webkit-align-items: center;
  -o-align-items: center;
  -ms-align-items: center;
  flex-direction: column;
  -moz-flex-direction: column;
  -webkit-flex-direction: column;
  -o-flex-direction: column;
  -ms-flex-direction: column;
  width: 90px;
  height: 90px;
  color: #fff; }

.title_text {
  margin-top: -5px; }

.current .title {
  background: #e79528; }

.content h3 {
  display: none; }

fieldset {
  border: none;
  margin: 0px;
  padding: 0px; }

.actions {
  margin-top: 25px; }
  .actions .disabled {
    display: none; }
  .actions ul {
    justify-content: flex-end;
    -moz-justify-content: flex-end;
    -webkit-justify-content: flex-end;
    -o-justify-content: flex-end;
    -ms-justify-content: flex-end; }
    .actions ul li {
      margin-left: 10px; }
      .actions ul li:first-child a {
        background: #adadad; }
      .actions ul li a {
        background: #e79528;
        width: 130px;
        height: 50px;
        color: #fff;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -o-border-radius: 5px;
        -ms-border-radius: 5px;
        justify-content: center;
        -moz-justify-content: center;
        -webkit-justify-content: center;
        -o-justify-content: center;
        -ms-justify-content: center;
        align-items: center;
        -moz-align-items: center;
        -webkit-align-items: center;
        -o-align-items: center;
        -ms-align-items: center; }
        .actions ul li a:hover {
          background-color: #f82d2a; }

label.error {
  display: block;
  position: absolute;
  top: 0px;
  right: 0; }
  label.error:after {
    font-family: 'themify';
    position: absolute;
    content: '\e717';
    right: 20px;
    top: 40px;
    font-size: 13px;
    color: #ff1212; }

input.error {
  border: 1px solid #ff1212; }

ul.list-item {
  z-index: 9;
  border: 1px solid #ebebeb;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  display: block; }

ul.list-item li {
  padding: 13px 20px;
  z-index: 2;
  color: #222;
  font-size: 13px; }

ul.list-item li:not(.init) {
  display: none;
  background: #fff;
  color: #222;
  padding: 5px 20px; }

ul.list-item li:not(.init):hover, ul.list-item li.selected:not(.init) {
  background: #e79528;
  color: #fff; }

li.init {
  cursor: pointer;
  position: relative; }
  li.init:after {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    font-size: 10px;
    color: #222;
    font-family: 'themify';
    content: '\e64b'; }

legend {
  width: 100%;
  margin: 0px;
  padding: 0px;
  font-size: 17px;
  margin-bottom: 20px; }
  legend span {
    display: inline-block; }

.step-heading {
  color: #e79528;
  float: left; }

.step-number {
  float: right; }

.form-date-item {
  position: relative;
  overflow: hidden; }
  .form-date-item:after {
    position: absolute;
    content: '';
    width: 1px;
    height: 30px;
    background: #ebebeb;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%); }
  .form-date-item:last-child:after {
    width: 0px; }
  .form-date-item .select-icon {
    z-index: 0;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    justify-content: center;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -o-justify-content: center;
    -ms-justify-content: center;
    align-items: center;
    -moz-align-items: center;
    -webkit-align-items: center;
    -o-align-items: center;
    -ms-align-items: center; }
    .form-date-item .select-icon i {
      justify-content: center;
      -moz-justify-content: center;
      -webkit-justify-content: center;
      -o-justify-content: center;
      -ms-justify-content: center;
      align-items: center;
      -moz-align-items: center;
      -webkit-align-items: center;
      -o-align-items: center;
      -ms-align-items: center;
      width: 30px;
      height: 20px;
      font-size: 10px;
      color: #222; }

.ui-datepicker-trigger {
  position: absolute;
  right: 10px;
  top: 20px;
  color: #222;
  font-size: 10px;
  background: transparent;
  border: none;
  outline: none;
  cursor: pointer; }

.form-date-group {
  justify-content: space-between;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -o-justify-content: space-between;
  -ms-justify-content: space-between;
  border: 1px solid #ebebeb;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px; }
  .form-date-group select {
    border: none;
    width: 90px;
    box-sizing: border-box;
    appearance: none !important;
    -moz-appearance: none !important;
    -webkit-appearance: none !important;
    -o-appearance: none !important;
    -ms-appearance: none !important;
    position: relative;
    background: 0 0;
    z-index: 10;
    cursor: pointer; }

.select-list {
  position: relative;
  display: inline-block;
  width: 100%;
  margin-bottom: 47px; }

.list-item {
  position: absolute;
  width: 100%;
  z-index: 99; }

@media screen and (max-width: 768px) {
  .container {
    width: calc(100% - 40px);
    max-width: 100%; }

  .steps ul, .form-row {
    flex-direction: column;
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -o-flex-direction: column;
    -ms-flex-direction: column; }

  .title {
    width: 150px;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto; }

  .form-row .form-date, .form-row .form-select {
    width: 100%; } }
@media screen and (max-width: 480px) {
  .signup-form {
    padding-left: 30px;
    padding-right: 30px; } }

/*# sourceMappingURL=style.css.map */

</style>

<div class="section padding-top-40 padding-bottom-10">
	<div class="container" >
		<div class="row">

		
      <div class="col-xl-4 col-md-4" style="
    padding-right: 0px;
    padding-left: 0px;
    padding-top: 20px;">
				<!-- Icon Box -->
        <h1 style="text-align: center; font-weight:bold"> Bonjour et Bienvenue </h1> </br><h1 style="color: #e79528; text-align: center; font-weight:bold"> sur InoJob</h1>
			<h2>Trouvez votre futur job </h2>
      	<div class="icon-box">
					<!-- Icon -->
				
          <img src="{{ asset('assets/images/image6.png') }}" alt="">

				</div>
			</div>

			
			<div class="col-xl-8 col-md-8" style="width: 630px;
  position: relative;
  margin: 0 auto;
  background: #2a41e8;
  box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0px 3px 9.5px 0.5px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px;
  padding-right: 0px;
  color: #0a0a0a;">
				<!-- Icon Box -->

            <div class="card" style="background-color:rgba(255,255,255,0.7)!important;padding-top: 20px;padding-right: 20px;padding-left: 20px;padding-bottom: 20px;">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse E-Mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmez le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Inscrivez-vous en tant que') }}</label>
                          <div class="col-md-6">
                            <select name="role_id"  class="form-control" style="line-height: 10px;" >
                                <option value="1">Recruteur</option>
                                <option value="2">Candidat</option>
                            </select>
                        </div>
                        </div>
                           

                        <div class="form-group row{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-6 offset-md-4">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        
                        @if ($errors->has('g-recaptcha-response'))
                            <div class="alert alert-danger mt-1 mb-1">{{ $errors->first('g-recaptcha-response') }}</div>
                        @endif
                        </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-8" >
                            <button type="submit" style="color: white;" class="button button-sliding-icon ripple-effect">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
		
    
      

		

			
		</div>
	</div>
</div>


@endsection