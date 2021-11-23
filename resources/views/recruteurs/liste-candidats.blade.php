@extends('recruteurs.template1')

@section('content')
	<!-- Dashboard Content
	================================================== -->
		
			<!-- Dashboard Headline -->
			@foreach($notifications as $notification)
			@foreach ($offres as  $offre)
            @if($notification->notifiable_id == Auth::user()->id)
			@if($notification->offre_id == $offre->id)
			@foreach ($users as  $user)
			@if($notification->user_id == $user->id)

			</br>
			<div class="dashboard-headline" style="margin-bottom: 10px;">

				<h3>Liste des Candidats</h3>
				<span class="margin-top-7">Demandes d'emploi pour <a href="#"> {{ $offre->intitule }}</a></span>

				
			</div>
			
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-supervisor-account"></i> Candidates</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="#"><img src="images/user-avatar-big-03.jpg" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#"> {{ $user->name }} {{ $user->prenom }}<img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> {{ $user->email }}</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> {{ $user->tel }}</span>

										
												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i> Télécharger le CV</a>
												</div>
											</div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->
			@endif
			@endforeach
			@endif
			@endif
			@endforeach
			@endforeach
	

<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

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

@endsection