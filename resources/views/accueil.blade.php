@extends('template')
@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="{{ asset('assets/images/job4.jpg') }}">
	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						</br>
						<strong style="
    color: #e79528;" class="color">InoJob</strong> <strong> Job Matching vous facilite vos recherches et candidatures pour votre prochain Job.</strong>
					</h3>
				</br>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-100 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Jobs Posted</span>
					</li>
					<li>
						<strong class="counter">3,543</strong>
						<span>Tasks Posted</span>
					</li>
					<li>
						<strong class="counter">1,232</strong>
						<span>Freelancers</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<!-- Category Boxes -->


	<div class="section padding-top-40 padding-bottom-10">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-0">
					<h1>Vous êtes?</h1>
				</div>
			</div>
			
			<div class="col-xl-6 col-md-6">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-lock"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Candidat</h3>
					<p>Cherchez à une offre d'emploi.</p>
					<p>Trouvez un emploi prés de vous.</p>
					<br>
					<br>
					<br>
					<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Créer votre compte <i class="icon-material-outline-arrow-right-alt"></i></a>
				</div>
			</div>

			<div class="col-xl-1 col-md-1">
				<!-- Icon Box -->
				
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-legal"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Recruteur</h3>
					<p>Publiez gratuitement vos premiéres annonces et commencez à recevoir des candidtatures   .</p>
					<p>Trouvez les candidats souhaités</p>
					<br>
					<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">Créer votre compte <i class="icon-material-outline-arrow-right-alt"></i></a>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Category Boxes / End -->
<div class="section gray padding-top-40 padding-bottom-10 full-width-carousel-fix">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-50">
					<h1>Pourquoi Choisir Notre Platforme</h1>
				</div>
			</div>

			<div class="col-xl-12">
				<div class="freelancers-container freelancers-grid-layout">

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
								
								<!-- Bookmark Icon -->
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="{{ asset('assets/images/cherche_emploi.png') }}" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Chercher d'emploi </a></h4>
									<span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>
								</div>

								<!-- Rating -->
								
							</div>
						</div>
						
						<!-- Details -->
						
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
								
								<!-- Bookmark Icon -->
								
								<!-- Avatar -->
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="{{ asset('assets/images/enterprise.png') }}" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Entreprise </a></h4>
									<span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>
								</div>

								<!-- Rating -->
								
							</div>
						</div>
						
						<!-- Details -->
						
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					


				</div>
			</div>
<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-10">
					<h1>Ils nous ont fait confiance </h1>
				</div>
			</div>		</div>
	</div>
</div>
<div class="section border-top padding-top-10 padding-bottom-10">
	<!-- Logo Carousel -->
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<!-- Carousel -->
				<div class="col-md-12">
					<div class="logo-carousel">
						
						<div class="carousel-item">
							<a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="{{ asset('assets/images/logo-carousel-01.png') }}" alt=""></a>
						</div>
						
						<div class="carousel-item">
							<a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="{{ asset('assets/images/logo-carousel-02.png') }}" alt=""></a>
						</div>
						
						<div class="carousel-item">
							<a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="{{ asset('assets/images/logo-carousel-03.png') }}" alt=""></a>
						</div>
						
						<div class="carousel-item">
							<a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="{{ asset('assets/images/logo-carousel-04.png') }}" alt=""></a>
						</div>
						
						<div class="carousel-item">
							<a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="{{ asset('assets/images/logo-carousel-05.png') }}" alt=""></a>
						</div>

						<div class="carousel-item">
							<a href="http://acmelogos.com/" target="_blank" title="http://acmelogos.com/"><img src="{{ asset('assets/images/logo-carousel-06.png') }}" alt=""></a>
						</div>

					</div>
				</div>
				<!-- Carousel / End -->
			</div>
		</div>
	</div>
</div>
<!-- Features Jobs -->
<div class="section gray margin-top-10 padding-top-10 padding-bottom-10">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-10">
					<h1>Offre d'emploi à la une</h1>
				</div>
				
				<!-- Jobs Container -->
				<div class="listings-container compact-list-layout margin-top-35">
					
					<!-- Job Listing -->
					<a href="single-job-page.html" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/logo_inocod.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Ingénieur Informatique</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> InoCod <div title="Verified Employer" data-tippy-placement="top"></div></li>
										<li><i class="icon-material-outline-location-on"></i> Sousse</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
						</div>
					</a>	


					<!-- Job Listing -->
					<a href="single-job-page.html" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-05.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Développeur web</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> Dev</li>
										<li><i class="icon-material-outline-location-on"></i> Sfax</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
						</div>
					</a>
					<!-- Job Listing -->
					<a href="single-job-page.html" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-02.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Ingénieur DevOps</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> Proxym IT</li>
										<li><i class="icon-material-outline-location-on"></i> Mahdia</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
						</div>
					</a>
					

					<!-- Job Listing -->
					<a href="single-job-page.html" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-03.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Administration systéme</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> techInfo <div  title="Verified Employer" data-tippy-placement="top"></div></li>
										<li><i class="icon-material-outline-location-on"></i> Monastir</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
						</div>
					</a>

					<!-- Job Listing -->
					<a href="single-job-page.html" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-05.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Ingénieur Réseau</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> Go My Dev</li>
										<li><i class="icon-material-outline-location-on"></i> Ariana</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
						</div>
					</a>

				</div>
				<!-- Jobs Container / End -->

			</div>
		</div>
	</div>
</div>
<!-- Featured Jobs / End -->



<!-- Membership Plans -->
<div class="section padding-top-10 padding-bottom-10">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-35">
					<h3>Membership Plans</h3>
				</div>
			</div>


			<div class="col-xl-12">

				<!-- Billing Cycle  -->
				<div class="billing-cycle-radios margin-bottom-70">
					<div class="radio billed-monthly-radio">
						<input id="radio-5" name="radio-payment-type" type="radio" checked>
						<label for="radio-5"><span class="radio-label"></span> Billed Monthly</label>
					</div>

					<div class="radio billed-yearly-radio">
						<input id="radio-6" name="radio-payment-type" type="radio">
						<label for="radio-6"><span class="radio-label"></span> Billed Yearly <span class="small-label">Save 10%</span></label>
					</div>
				</div>

				<!-- Pricing Plans Container -->
				<div class="pricing-plans-container">

					<!-- Plan -->
					<div class="pricing-plan">
						<h3>Basic Plan</h3>
						<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
						<div class="pricing-plan-label billed-monthly-label"><strong>$19</strong>/ monthly</div>
						<div class="pricing-plan-label billed-yearly-label"><strong>$205</strong>/ yearly</div>
						<div class="pricing-plan-features">
							<strong>Features of Basic Plan</strong>
							<ul>
								<li>1 Listing</li>
								<li>30 Days Visibility</li>
								<li>Highlighted in Search Results</li>
							</ul>
						</div>
						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
					</div>

					<!-- Plan -->
					<div class="pricing-plan recommended">
						<div class="recommended-badge">Recommended</div>
						<h3>Standard Plan</h3>
						<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
						<div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>
						<div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>
						<div class="pricing-plan-features">
							<strong>Features of Standard Plan</strong>
							<ul>
								<li>5 Listings</li>
								<li>60 Days Visibility</li>
								<li>Highlighted in Search Results</li>
							</ul>
						</div>
						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
					</div>

					<!-- Plan -->
					<div class="pricing-plan">
						<h3>Extended Plan</h3>
						<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>
						<div class="pricing-plan-label billed-monthly-label"><strong>$99</strong>/ monthly</div>
						<div class="pricing-plan-label billed-yearly-label"><strong>$1069</strong>/ yearly</div>
						<div class="pricing-plan-features">
							<strong>Features of Extended Plan</strong>
							<ul>
								<li>Unlimited Listings Listing</li>
								<li>90 Days Visibility</li>
								<li>Highlighted in Search Results</li>
							</ul>
						</div>
						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<!-- Membership Plans / End-->

<!-- Footer
================================================== -->

<!-- Footer / End -->

</div>
@endsection
