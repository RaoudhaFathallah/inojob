<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>InoJob</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('bootstrap-tagsinput.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

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

				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<!--  User Notifications -->
				<div class="header-widget hide-on-mobile">

					<!-- Notifications -->
					<div class="header-notifications">

						<!-- Trigger -->
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Notifications</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-manage-candidates.html">
												<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
												<span class="notification-text">
													<strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>

					</div>

					<!-- Messages -->
					<div class="header-notifications">
						<div class="header-notifications-trigger">
							<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<div class="header-notifications-headline">
								<h4>Messages</h4>
								<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
									<i class="icon-feather-check-square"></i>
								</button>
							</div>

							<div class="header-notifications-content">
								<div class="header-notifications-scroll" data-simplebar>
									<ul>
										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
												<div class="notification-text">
													<strong>David Peterson</strong>
													<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
													<span class="color">4 hours ago</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
												<div class="notification-text">
													<strong>Sindy Forest</strong>
													<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>

										<!-- Notification -->
										<li class="notifications-not-read">
											<a href="dashboard-messages.html">
												<span class="notification-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></span>
												<div class="notification-text">
													<strong>Marcin Kowalski</strong>
													<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
													<span class="color">Yesterday</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>

				</div>
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger" style="padding-bottom: 20px;">
							<a href="#"><div class="user-avatar status-online"><img src="{{ asset(Auth::user()->image) }}" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="{{ asset(Auth::user()->image) }}"  alt=""></div>
									<div class="user-name">
									@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="icon-material-outline-power-settings-new"></i> {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
									</div>
								</div>

								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">En ligne</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>
						</div>
						<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                    </ul>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->


			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>

				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Informations">
							<li><a href="{{ url ('candidat/step1/'.Auth::user()->id) }}"><i class="icon-material-outline-dashboard"></i> Informations Génerales</a></li>
							<li><a href="{{ url ('candidat/professionnel/') }}"><i class="icon-material-outline-question-answer"></i> Informations Professionnelles</a></li>
							<li><a href="{{ url ('candidat/academique/') }}"><i class="icon-material-outline-question-answer"></i> Informations Académiques</a></li>
							<li><a href="{{ url ('candidat/competence/') }}"><i class="icon-material-outline-question-answer"></i> Compétences & Langues </a></li>
							<li><a href="{{ url ('candidat/document/') }}"><i class="icon-material-outline-rate-review"></i> Documents</a></li>
							<li><a href="{{ url ('candidat/visualiserCV/') }}"><i class="icon-material-outline-rate-review"></i> Visualiser CV</a></li>

						</ul>
                        <a href="{{ url ('candidat/profil') }}"><ul data-submenu-title="Générer mon profil">
                            </ul></a>
						<a href="{{ url ('candidat/offres') }}"><ul data-submenu-title="Liste des offres">
                            </ul></a>


                    </div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >

@yield('content')


</div>
</div>
	<!-- Footer -->
    <div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2021 <strong>InoJob</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Add Note</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">

				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Do Not Forget 😎</h3>
				</div>

				<!-- Form -->
				<form method="post" id="add-note">

					<select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
						<option>Low Priority</option>
						<option>Medium Priority</option>
						<option>High Priority</option>
					</select>

					<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

				</form>

				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>

<script type="text/javascript">

      $("#diplome").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
</script>
<script type="text/javascript">

var path = "{{ route('autocomplete_competence') }}";

$('#competence1').typeahead({

source:  function (query, process) {

return $.get(path, { query: query }, function (data) {

		return process(data);

	});
}
});

</script>
<script type="text/javascript">

var path1 = "{{ route('autocomplete_poste') }}";

$('#poste').typeahead({

    source:  function (query, process) {

    return $.get(path1, { query: query }, function (data) {

            return process(data);

        });

    }

});

</script>



<script type="text/javascript">

var path2 = "{{ route('autocomplete_etablissement') }}";

$('#etablissement').typeahead({

    source:  function (query, process) {

    return $.get(path2, { query: query }, function (data) {

            return process(data);

        });

    }

});

</script>
<script type="text/javascript">

var path4 = "{{ route('autocomplete_specialite') }}";

$('#specialite').typeahead({

    source:  function (query, process) {

    return $.get(path4, { query: query }, function (data) {

            return process(data);

        });

    }

});

</script>
<!-- Apply for a job popup / End -->


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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

	$(".select2_tags").select2({
		tags: true,
		tokenSeparators: [',', ' ']
	})
</script>
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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="{{ asset('assets/js/chart.min.js') }}"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>
</body>
</html>
