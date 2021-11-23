<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>InoJob</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}">


<link rel="stylesheet" href="{{ asset('assets1/fonts/themify-icons/themify-icons.css') }}">

<!-- Main css -->

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">
<header id="header-container" class="fullwidth">
	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="{{ route ('accueil') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
				</div>
				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive" >

						<li><a href="{{ route ('accueil') }}" class="current">Accueil</a>
							
						</li>

						<li><a href="#">Recruteur</a>
							
						</li>

						<li><a href="#">Chercheur d'emploi</a>
							
						</li>

						<li><a href="#">A propos</a>
							
						</li>

						<li><a href="#">Contact </a>
							
						</li>
				
				<li>
                        <a href="{{ route('register') }}" style="color: white;padding: 11px 16px;border-radius: 3px;border: 2px solid #2a41e8;color: #2a41e8;background-color: white;" class="button button-sliding-icon ripple-effect">Inscription</a>
						</li><li>	<a href="{{ route('login') }}" style="color: white;" class="button button-sliding-icon ripple-effect">Connexion</a>

                </li>
				
                        </ul>

				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->

				<!--  User Notifications / End -->

				<!-- User Menu -->
				

				
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->
		</div>
	</div>
	<!-- Header / End -->

</header>




<!-- Header Container
================================================== -->
@yield('content')




<!-- Wrapper / End -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="{{ asset('assets/images/logo.png') }}" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section"style="
    padding: 20px 0;
">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-4 col-lg-2 col-md-3">
					<div class="footer-links">
						<ul style="display: unset;">
							<li><a href="#"><span>Accueil</span></a></li>
							<li><a href="#"><span>A propos</span></a></li>
							<li><a href="#"><span>Contact</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-4 col-lg-2 col-md-3">
					<div class="footer-links">
						<ul style="display: unset;">
							<li><a href="#"><span>Se Connecter</span></a></li>
							<li><a href="#"><span>Créer un compte</span></a></li>
							<li><a href="#"><span>Offres Premuim</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-4 col-lg-2 col-md-3">
					<div class="footer-links">
						<ul style="display: unset;">
							<li><a href="#"><span>Mention Legal</span></a></li>
							<li><a href="#"><span>Condition G.V</span></a></li>
							<li><a href="#"><span>Cookies et via privé</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2021 <strong>InoJob</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>

<!-- Scripts
================================================== -->

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/mmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>
<script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/snackbar.js') }}"></script>
<script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


<script src="{{ asset('assets1/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/minimalist-picker/dobpicker.js') }}"></script>
	<script src="{{ asset('assets1/js/main.js') }}"></script>


<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places&callback=initAutocomplete"></script>

</body>
</html>