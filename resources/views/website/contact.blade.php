@extends('layouts.website')
@section('content')
<div class="page-title" style="background-image:url('{{ asset('frontend/images/hero-header/breadcrumb.jpg') }}');">
				
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						
							<h1 class="hero-title">Contact Us</h1>
							
							<ol class="breadcrumb-list">
								<li><a href="index-2.html">Homepage</a></li>
								<li><span>Contact Us</span></li>
							</ol>
							
						</div>
						
					</div>

				</div>
				
			</div>
			<!-- end Page title -->
			
			<div class="content-wrapper">
	
				<div class="container">
					
					<div class="row">

						<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 pb-20">
							
							<div class="section-title">
							
								<h3>Our Offices are worldwide</h3>
								
								<p>Expression acceptance imprudence particular had eat unsatiable.</p>
								
							</div>
							
						</div>
					
					</div>
					
				</div>
				
				<div id="map_5" class="mapbox"></div>
		
				<div class="bg-light section pt-40 pb-20">
				
					<div class="container">

						<div class="map-contact">
							
							<div class="top-place-inner">
							
								<div id="map_5_list" class="list row gap-0">
									
									<div class="col-sm-4">
										<div class="maplocation map-top-destination-item" 
											data-name="Dubai, UAE"  
											data-lat=" 25.276987"
											data-cat="place1"
											data-lng="55.2708">
											
											<div class="top-place-item mb-30 maplink">
												<div class="icon"><img src="{{ asset('frontend/images/map-marker/01.png') }}" alt="map" /></div>
												<div class="content">
													<h5 class="heading mt-0">Headquarter @ Dubai, UAE</h5>
													<ul class="address-list">
														<li><i class="fa fa-map-marker"></i> 545, Marina Rd., Mohammed Bin Rashid Boulevard, Dubai 123234,</li>
														<li><i class="fa fa-phone"></i> + 971 4 436 4784</li>
														<li><i class="fa fa-envelope"></i> dubai-support@tourpacker.com</li>
													</ul>
												</div>
											</div>
											<div class="infobox">
												<div class="infobox-inner">
													<div class="image">
														<img src="{{ asset('frontend/images/contact/dubai.jpg') }}" alt="Images" />
													</div>
													<div class="content">
														<h6 class="heading">Our Office At Dubai</h6>
														<ul class="address-list">
														<li><i class="fa fa-map-marker"></i> 545, Marina Rd., Mohammed Bin Rashid Boulevard, Dubai 123234,</li>
															<li><i class="fa fa-phone"></i> + 971 4 436 4784</li>
															<li><i class="fa fa-envelope"></i> dubai-support@tourpacker.com</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-sm-4">
										<div class="maplocation map-top-destination-item" 
											data-name="Koh Sire"  
											data-lat="1.290270"
											data-cat="place2"
											data-lng="103.851959">
											
											<div class="top-place-item mb-30 maplink">
												<div class="icon"><img src="{{ asset('frontend/images/map-marker/02.png') }}" alt="map" /></div>
												<div class="content">
													<h5 class="heading mt-0">Branch @ Singapore</h5>
													<ul class="address-list">
														<li><i class="fa fa-map-marker"></i> 6985, Pasir Panjang Road #01-01 Citilink Warehouse Complex, Singapore, 118529</li>
														<li><i class="fa fa-phone"></i> +65-6375-8560 </li>
														<li><i class="fa fa-envelope"></i> dubai-singapore@tourpacker.com</li>
													</ul>
												</div>
											</div>
											<div class="infobox">
												<div class="infobox-inner">
													<div class="image">
														<img src="{{ asset('frontend/images/contact/singapore.jpg') }}" alt="Images" />
													</div>
													<div class="content">
														<h6 class="heading">Our office at Singapore</h6>
														<ul class="address-list">
															<li><i class="fa fa-map-marker"></i> 6985, Pasir Panjang Road #01-01 Citilink Warehouse Complex, Singapore, 118529</li>
															<li><i class="fa fa-phone"></i> +65-6375-8560 </li>
															<li><i class="fa fa-envelope"></i> dubai-singapore@tourpacker.com</li>
														</ul>
													</div>
												</div>
											</div>
										</div>	
									</div>
									
									<div class="col-sm-4">
										<div class="maplocation map-top-destination-item" 
											data-name="Berline, Germany"  
											data-lat="52.518623"
											data-cat="place3"
											data-lng="13.376198">
											
											<div class="top-place-item mb-30 maplink">
												<div class="icon"><img src="{{ asset('frontend/images/map-marker/03.png') }}" alt="map" /></div>
												<div class="content">
													<h5 class="heading mt-0">Branch @ Berlin, Germany</h5>
													<ul class="address-list">
														<li><i class="fa fa-map-marker"></i> Tour Packer Company, Charlottenstraße 49, 10117 Berlin, Germany</li>
														<li><i class="fa fa-phone"></i> +49(30)26050</li>
														<li><i class="fa fa-envelope"></i> Berlin-support@tourpacker.com</li>
													</ul>
												</div>
											</div>
											<div class="infobox">
												<div class="infobox-inner">
													<div class="image">
														<img src="{{ asset('frontend/images/contact/berlin.jpg') }}" alt="Images" />
													</div>
													<div class="content">
														<h6 class="heading">Our office at Berlin, Germany</h6>
														<ul class="address-list">
															<li><i class="fa fa-map-marker"></i> Tour Packer Company, Charlottenstraße 49, 10117 Berlin, Germany</li>
															<li><i class="fa fa-phone"></i> +49(30)26050</li>
															<li><i class="fa fa-envelope"></i> Berlin-support@tourpacker.com</li>
														</ul>
													</div>
												</div>
											</div>
										</div>	
									</div>

								</div>
					
							</div>
							
						</div>
					
					</div>
					
				</div>
				
				<div class="section pt-60 pb-0">
				
					<div class="container">
					
						<div class="row">

							<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
								
								<div class="section-title">
								
									<h3>Keep in touch</h3>
									
								</div>
								
							</div>
						
						</div>
						
						<form class="contact-form-wrapper" data-toggle="validator">
						
							<div class="row">
							
								<div class="col-sm-4">

									<h5 class="heading mt-5">Let's Social</h5>
									<p>May indulgence difficulty ham can put especially. Bringing remember for supplied her why was confined. Middleton principle did she procuring extensive believing add. Weather adapted prepare oh is calling.</p>
									
									<div class="boxed-social mb-30-xs clearfix">
										
										<a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
									
									</div>
								
								</div>
								
								<div class="col-sm-8">
								
									<div class="row">
									
										<div class="col-sm-6">
										
											<div class="form-group">
												<label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
												<input id="inputName" type="text" class="form-control" data-error="Your name is required" required>
												<div class="help-block with-errors"></div>
											</div>
											
											<div class="form-group">
												<label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
												<input id="inputEmail" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
												<div class="help-block with-errors"></div>
											</div>
											
											<div class="form-group">
												<label>Subject</label>
												<input type="text" class="form-control" />
											</div>
										
										</div>
										
										<div class="col-sm-6">
										
											<div class="form-group">
												<label for="inputMessage">Message <span class="font10 text-danger">(required)</span></label>
												<textarea id="inputMessage" class="form-control" rows="9" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
												<div class="help-block with-errors"></div>
											</div>
										
										</div>
										
										<div class="col-sm-12 text-right text-left-sm">
											<button type="submit" class="btn btn-primary mt-5">Send Message</button>
										</div>
										
									</div>

								</div>
							
							</div>
						
						</form>
						
					</div>
					
				</div>
				
			</div>
			
@endsection