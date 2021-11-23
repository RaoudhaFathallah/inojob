<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CV</title>

    <link type="text/css" rel="stylesheet" href="{{ asset('assets2/css/blue.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets2/css/print.css') }}" media="print"/>
    <!--[if IE 7]>
    <link href="{{ asset('assets2/css/ie7.css') }}" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 6]>
    <link href="{{ asset('assets2/css/ie6.css') }}" rel="stylesheet" type="text/css" />
    <![endif]-->

    <script type="text/javascript" src="{{ asset('assets2/js/jquery-1.4.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/jquery.tipsy.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/cufon.yui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/scrollTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/myriad.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/jquery.colorbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/custom.js') }}"></script>
    <script type="text/javascript">
        Cufon.replace('h1,h2');
    </script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
    <div class="wrapper-top"></div>
    <div class="wrapper-mid">
        <!-- Begin Paper -->
        <div id="paper">
            <div class="paper-top"></div>
            <div id="paper-mid">
                <div class="entry">
                    <!-- Begin Image -->
                    <img class="portrait" src="{{ asset(Auth::user()->image) }}" alt="" />
                    <!-- End Image -->
                    <!-- Begin Personal Information -->
                    <div class="self">
                        <h1 class="name">{{ Auth::user()->name }} {{ Auth::user()->prenom }}</h1>
                        <br /> <span>{{ Auth::user()->poste }}</span>
                        <ul>
                            @foreach ($users as  $user)
                                @if($user->id==Auth::user()->id)

                            @foreach ($regions as  $region)
                                @if($user->region_id == $region->id)
                            <li class="ad">{{ $region->nom }}</li>
                                @endif
                            @endforeach

                                @endif
                            @endforeach
                            <li class="mail">{{ Auth::user()->email }}</li>
                            <li class="tel">{{ Auth::user()->tel }}</li>
                        </ul>
                    </div>
                    <!-- End Personal Information -->
                    <!-- Begin Social -->

                    <!-- End Social -->
                </div>
                <!-- Begin 1st Row -->

                <!-- End 1st Row -->
                <!-- Begin 2nd Row -->
                <div class="entry">
                    <h2>EDUCATION</h2>

                    @foreach ($academiques as  $academique)
                        @if($academique->user_id==Auth::user()->id)
                    <div class="content">

                        <h3>{{ $academique->date_debut }} - {{ $academique->date_fin }}</h3>
                            @foreach ($diplomes as $diplome)
                            @if($academique->diplome_id == $diplome->id)
                                <p>{{ $diplome->nom }} </p><br />
                            @endif
                            @endforeach

                        <p>  <em>{{ $academique->etablissement_id }} </em></p></br>
                                <p>Spécialité: {{ $academique->specialite_id }}</p></p>


                    </div>
                        @endif
                    @endforeach

                </div>
                <!-- End 2nd Row -->
                <!-- Begin 3rd Row -->
                <div class="entry">
                    <h2>EXPERIENCE</h2>
                    @foreach ($professionnels as  $professionnel)
                        @if($professionnel->user_id==Auth::user()->id)
                    <div class="content">
                        <h3>{{ $professionnel->date_debut }} - {{ $professionnel->date_fin }}</h3>
                        <p>Entreprise: {{ $professionnel->nom_entreprise }} <br />
                            <em>Poste: {{ $professionnel->poste_id }}</em></p>
                        <ul class="info">
                            <li>{{ $professionnel->description }}</li>
                        </ul>
                    </div>
                        @endif
                    @endforeach

                </div>
                <!-- End 3rd Row -->
                <!-- Begin 4th Row -->
                <div class="entry">
                    <h2>SKILLS</h2>
                    @php ($datas = explode("," ,  Auth::user()->competences))

                    <div class="content">
                        <h3>Connaissance du logiciel</h3>
                        @foreach($competences as $competence)
                            @if(in_array($competence->name,$datas))
                        <ul class="skills">
                            <li>{{ $competence->name }}</li>
                        </ul>
                            @endif
                        @endforeach
                    </div>
                    @foreach($niveau_langues as $niveaux_langue)
                        @if($niveaux_langue->user_id==Auth::user()->id)
                    <div class="content">
                        <h3>Langues</h3>


                            @foreach($langues as $langue)
                                @foreach($niveaux as $niveau)
                                    @if($niveaux_langue->langue_id == $langue->id)
                                        @if($niveaux_langue->niveau_id == $niveau->id)
                                                <ul class="skills">
                            <li>{{ $langue->nom }} : {{ $niveau->nom }} </li>
                                                </ul>
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach


                    </div>
                        @endif
                    @endforeach
                </div>
                <!-- End 4th Row -->
                <!-- Begin 5th Row -->

                <!-- Begin 5th Row -->
            </div>
            <div class="clear"></div>
            <div class="paper-bottom"></div>
        </div>
        <!-- End Paper -->
    </div>
    <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
