@extends('template')

@section('content')
<div class="section padding-top-40 padding-bottom-80">
	<div class="container" >
		<div class="row">
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
                <div class="card-header" style="padding-bottom: 20px;"><strong>{{ __('Réinitialiser le mot de passe') }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" style="color: #e79528;" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="submit" style="color: white;" class="button button-sliding-icon ripple-effect">
                                    {{ __('Envoyer le lien') }}
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
