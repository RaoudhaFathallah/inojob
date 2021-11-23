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
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Documents utiles</li>
                    </ul>
                </nav>
            </div>

            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-folder-plus"></i> Documents utiles</h3>
                        </div>
                        <form  enctype="multipart/form-data" class="form-inline" method="post" action="{{route('document.save')}}">
                            {{ csrf_field()}}
                        <div class="content with-padding padding-bottom-10">


                            <div class="row">

                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h3>Télécharger votre CV — Optionnelle</h3>
                                        @if($documents->cv)
                                        <a  target="_blank" href="{{url($documents->cv)}}">Voir l'ancien CV </a>
                                        @endif
                                        <div class="uploadButton margin-top-30">
                                            <input type="file" class="form-control @error('cv') is-invalid @enderror"   name="cv" >
                                            @error('lettre')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <h3>Télécharger votre lettre de motivation — Optionnelle</h3>
                                        @if($documents->lettre)
                                            <a  target="_blank" href="{{url($documents->lettre)}}"> Voir l'ancien lettre </a>
                                        @endif
                                        <div class="uploadButton margin-top-30">
                                            <input type="file" class="form-control @error('lettre') is-invalid @enderror"    name="lettre" >
                                            @error('lettre')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                <div class="col-xl-12">
                    <div class="submit-field" style="text-align: right">
                        <button type="submit" style="color: white;  white;font-size: 12px;"  class="button ripple-effect big margin-top-30 save">
                            {{ __('Enregistrer') }}
                        </button>
                    </div>
                </div>
                </form>
            </div>
            <!-- Row / End -->

    </div>
    <!-- Dashboard Content / End -->

        @endsection

