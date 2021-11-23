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
                    <h3>Annonces</h3>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Annonces</li>
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
                                <h3><i class="icon-material-outline-business-center"></i> Mes offres d'emploi</h3>
                            </div>

                            <div class="content">

                                <ul class="dashboard-box-list">

                                    @foreach ($offres as  $offre)
                                                @if($offre->user_id==Auth::user()->id)


                                                <li>
                                        <!-- Job Listing -->
                                        <div class="job-listing">

                                            <!-- Job Listing Details -->
                                            <div class="job-listing-details">

                                                <!-- Logo -->
                                                <!-- 											<a href="#" class="job-listing-company-logo">
                                                                                                <img src="images/company-logo-05.png" alt="">
                                                                                            </a> -->

                                                <!-- Details -->

                                                <div class="job-listing-description">
                                                    <h3 class="job-listing-title"><a href="#">{{ $offre->intitule }}</a> </h3>

                                                    <!-- Job Listing Footer -->
                                                    <div class="job-listing-footer">
                                                        <ul>
                                                            <li><i class="icon-material-outline-date-range"></i> Posté sur {{ $offre->created_at }}</li>
                                                            <li><i class="icon-material-outline-date-range"></i> Expiration le {{ $offre->created_at }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="buttons-to-right always-visible">
                                            <a href="dashboard-manage-candidates.html" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Candidates <span class="button-info">0</span></a>
                                            <a href="#" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                            <a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                        </div>
                                    </li>
                                        @endif
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Row / End -->
@endsection