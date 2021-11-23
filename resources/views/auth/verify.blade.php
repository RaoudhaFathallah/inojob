@extends('layouts.app')
@section('content')
<div class="section padding-top-40 padding-bottom-80">
	<div class="container" >
		<div class="row" style="margin-top: 50px">
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
            <div class="card"  style="background-color:rgba(255,255,255,0.7)!important;padding-top: 20px;padding-right: 20px;padding-left: 20px;padding-bottom: 20px;">
                <div class="card-header" style="padding-bottom: 20px;"><strong>{{ __("Vérifiez votre adresse e-mail") }}</strong></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __("Un nouveau lien de vérification a été envoyé à votre adresse e-mail.") }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }}
                    {{ __("Si vous n'avez pas reçu l'e-mail") }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: blue">{{ __('cliquez ici pour en demander un autre') }}</button>.
	                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
