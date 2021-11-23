@extends('candidats.template1')

@section('content')
		
<div class="dashboard-headline">

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Liste des offres</li>
                        </ul>
                    </nav>
                </div>
			<!-- Tasks Container -->
			@foreach($notifications as $notification)

			<form action="{{url ('/candidat/accept_offres/'.$notification->id)}}" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
            {{ csrf_field()}}

            {{ method_field('GET') }}
			<div class="tasks-list-container compact-list ">
				
				<!-- Task -->
				@if($notification->user_id==Auth::user()->id)

				<a href="single-task-page.html" class="task-listing">

					<!-- Job Listing Details -->
					@foreach ($offres as  $offre)
                        @if($notification->offre_id == $offre->id)
					<div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<h3 class="task-listing-title">{{ $offre->intitule }}</h3>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-on"></i> {{ $offre->ville }}</li>
								<li><i class="icon-material-outline-access-time"></i> {{ $offre->created_at }}</li>
							</ul>
							<p class="task-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster.</p>
							<div class="task-tags">
								<span>iOS</span>
								<span>Android</span>
								<span>mobile apps</span>
								<span>design</span>
							</div>
						</div>

					</div>
				        @endif
                    @endforeach
					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							@if($notification->status == 0)
							<input type="submit" value="Accepter" class="btn btn-primary" ></br>
							@endif
						</div>
					</div>
				</a>
				@endif
				<!-- Task -->
					

			</div>
            </form>
			@endforeach

			<!-- Tasks Container / End -->


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-60 margin-bottom-60">
						<nav class="pagination">
							<ul>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
								<li><a href="#" class="current-page ripple-effect">1</a></li>
								<li><a href="#" class="ripple-effect">2</a></li>
								<li><a href="#" class="ripple-effect">3</a></li>
								<li><a href="#" class="ripple-effect">4</a></li>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>
	</div>
</div>

@endsection


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
<script>

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
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>

</body>
</html>