<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dotrex.co/theme-preview/aimer-wedding/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 05:11:45 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ramakant & Monika</title>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">
<link rel="icon" href="favicon2.ico" type="image/x-icon">
<!-- / Favicons
================================================== -->

<!-- >> CSS	
============================================================================== -->
<!-- google web fonts -->
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- /google web fonts -->
<!-- bootstrap -->
<link href="{{ asset('vendor1/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- nivo lightbox -->
<link href="{{ asset('vendor1/nivo-lightbox/nivo-lightbox.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('vendor1/nivo-lightbox/themes/default/default.css')}}" type="text/css" />
<!-- animate -->
<link href="{{ asset('vendor1/animate.css')}}" rel="stylesheet">
<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('vendor1/font-awesome/css/font-awesome.min.css')}}">
<!-- main styles -->
<link href="{{ asset('css/styles.css')}}" rel="stylesheet">
<style type="text/css">
	#leaves {position:relative;top:-50px;width:100%;text-align: right;}

#leaves i {
    display: inline-block;
    width: 300px;
    height: 150px;
    background: linear-gradient(to bottom right, #309900, #005600);
    transform: skew(20deg);
    border-radius: 5% 40% 70%;
    box-shadow: inset 0px 0px 1px #222;
    border: 1px solid #333;
    z-index: 1;
    -webkit-animation: falling 5s 0s infinite;
}

#leaves i:nth-of-type(2n) { -webkit-animation: falling2 5s 0s infinite; }
#leaves i:nth-of-type(3n) { -webkit-animation: falling3 5s 0s infinite; }

#leaves i:before {
  position: absolute;
  content: '';
  top: 117px;
  right: 9px;
  height: 27px;
  width: 32px;
  transform: rotate(180deg);
  border-radius: 0% 15% 15% 0%;
  border-top: 1px solid #222;
  border-bottom: 1px solid #222;
  border-left: 0px solid #222;
  border-right: 1px solid #222;
  background: linear-gradient(to right, rgba(0,100,0,1), #005600);
  z-index: 1;
}

#leaves i:after {
  content: '';
  height: 125px;
  width: 10px;
  background: linear-gradient(to right, rgba(0,0,0,.15), rgba(0,0,0,0));
  display: block;
  transform: rotate(125deg);
  position: absolute;
  left: 85px;
  border-radius:50%;
}


#leaves i:nth-of-type(n)    { height:23px; width:30px; }
#leaves i:nth-of-type(n):before { width:7px; height:5px; top:17px; right:1px; }
#leaves i:nth-of-type(n):after { width:2px; height:17px; left: 12px; top:0px; }

#leaves i:nth-of-type(2n+1)    { height:11px; width:16px; }
#leaves i:nth-of-type(2n+1):before { width:4px; height:3px; top:7px; right:0px; }
#leaves i:nth-of-type(2n+1):after { width:2px; height:6px; left: 5px; top:1px; }

#leaves i:nth-of-type(3n+2)  { height:17px; width:23px; }
#leaves i:nth-of-type(3n+2):before  { height:4px; width:4px; top:12px; right:1px; }
#leaves i:nth-of-type(3n+2):after  { height:10px; width:2px; top:1px; left:8px; }

#leaves i:nth-of-type(n)   { -webkit-animation-delay: 1.9s;}
#leaves i:nth-of-type(2n)  { -webkit-animation-delay: 3.9s;}
#leaves i:nth-of-type(3n)  { -webkit-animation-delay: 2.3s;}
#leaves i:nth-of-type(4n)  { -webkit-animation-delay: 4.4s;}
#leaves i:nth-of-type(5n)  { -webkit-animation-delay: 5s;  }
#leaves i:nth-of-type(6n)  { -webkit-animation-delay: 3.5s;}
#leaves i:nth-of-type(7n)  { -webkit-animation-delay: 2.8s;}
#leaves i:nth-of-type(8n)  { -webkit-animation-delay: 1.5s;}
#leaves i:nth-of-type(9n)  { -webkit-animation-delay: 3.3s;}
#leaves i:nth-of-type(10n) { -webkit-animation-delay: 2.5s;}
#leaves i:nth-of-type(11n) { -webkit-animation-delay: 1.2s;}
#leaves i:nth-of-type(12n) { -webkit-animation-delay: 4.1s;}
#leaves i:nth-of-type(13n) { -webkit-animation-delay: 1s;  }
#leaves i:nth-of-type(14n) { -webkit-animation-delay: 4.7s;}
#leaves i:nth-of-type(15n) { -webkit-animation-delay: 3s;  }

#leaves i:nth-of-type(n)    { background: linear-gradient(to bottom right, #309900, #005600); }
#leaves i:nth-of-type(2n+2)  { background: linear-gradient(to bottom right, #5e9900, #2b5600); }
#leaves i:nth-of-type(4n+1)  { background: linear-gradient(to bottom right, #990, #564500); }

#leaves i:nth-of-type(n)    { opacity: .7;}
#leaves i:nth-of-type(3n+1)  { opacity: .5;}
#leaves i:nth-of-type(3n+2)  { opacity: .3;}

#leaves i:nth-of-type(n)    {transform: rotate(180deg);}


#leaves i:nth-of-type(n) { -webkit-animation-timing-function:ease-in-out;}

@-webkit-keyframes falling {
    
    0% {
        -webkit-transform:
            translate3d(300,0,0)
            rotate(0deg);
    }
    
    100% {
        -webkit-transform:
            translate3d(-350px,700px,0)
            rotate(90deg);
        opacity: 0;
    }
}

@-webkit-keyframes falling3 {
     0% {
        -webkit-transform:
            translate3d(0,0,0)
            rotate(-20deg);
    }
    
    100% {
        -webkit-transform:
            translate3d(-230px,640px,0)
            rotate(-70deg);
        opacity: 0;
    }
}

@-webkit-keyframes falling2 {
     0% {
        -webkit-transform:
            translate3d(0,0,0)
            rotate(90deg);
    }
    
    100% {
        -webkit-transform:
            translate3d(-400px,680px,0)
            rotate(0deg);
        opacity: 0;
    }
}
</style>
<!-- >> /CSS
============================================================================== -->
</head>
<body>

<!-- Page Loader
========================================================= -->
<div class="loader" id="page-loader"> 
  <div class="loading-wrapper">
  	<div class="loader-heart loader-heart1"><img src="img/intro-heart.png" alt=""></div>
  	<div class="loader-heart loader-heart2"><img src="img/intro-heart.png" alt=""></div>
  	<div class="loader-heart loader-heart3"><img src="img/intro-heart.png" alt=""></div>
  </div>   
</div>
<!-- /End of Page loader
========================================================= -->

<!-- === PAGE BACKGROUND === -->
<!-- Background container -->
<div class="page-background-container viewport">
	<!-- background-mask -->
	<div class="bg-mask viewport"></div>
	<!-- /background-mask -->
	<!-- background-slideshow -->
	<div class="bg-slideshow">
		<!-- slideshow-item -->
		<div class="page-background viewport" style="background-image: url('img/slide-bg1.jpg')"></div>
		<!-- /slideshow-item -->	
	</div>
	<!--/Background-slideshow -->
</div>
<!-- Background-container -->
<!-- === /PAGE BACKGROUND === -->

<!-- Main Content
================================================== -->
<div id="body" class="viewport animated">
	<div class="container">
		<div class="boxed-content">	
			<!-- Header -->
			
			<!-- /header -->
			<!-- content -->
			<div class="page-content page-home">
				<div id="leaves">
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>
				  <i></i>  
				</div>
				<!-- home logo -->
				
				<!-- /home-logo -->
				<!-- Countdown container -->
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<!-- mai title -->
						<h2 class="title1 couple-title1 title1-border">Wedding Ceremony Invitation</h2>
						<!-- /main title -->
						<div class="page-intro">	
							<p>Mr. Kamlesh Vishwakarma and Mrs. Geeta Vishwakarma 
							request your gracious presence 
						on the wedding ceremony of their son</p>
						<p class="couple-title">Ramakant Weds Monika</p>
						<p>daughter of Mr. Raghunath Vishwakarma and  Mrs. Meeta Vishwakarma</p>
						</div>
						<div class="row row-maps">							
							<!-- Map -->
							<div class="col-sm-6">
								<div class="ceremony-item">
								<h2 class="title3">Procession</h2>
								<p>We like everything on the wedding day be perfect!</p>
								<h3 class="title4">Jaunpur, Uttar pradesh</h3>
								<p>Village Fattupur, Post Ajoshi, District Jaunpur ,Uttar Pradesh</p>
								<!-- iframe -->
																
								<!-- /iframe -->
								</div>								
							</div>
							<!-- /Map -->
							<!-- Map -->
							<div class="col-sm-6">
								<div class="ceremony-item">
									<h2 class="title3">Wedding Farewell</h2>
									<p>We have reserved a great place!</p>
									<h3 class="title4">Mirshadpur,Post:-Badlapur</h3>
									<p>Tahsil:-Badlapur,district:- Jaunpur, Pin:-222125</p>
									<!-- iframe -->
																	
									<!-- /iframe -->
								</div>								
							</div>
							<!-- /Map -->
						</div>
					</div>
				</div>
				<div class="row">
								<!-- Groom -->
								<div class="col-sm-6">									
									<div class="about-item">
										<div class="about-item-picture">
											<img src="img/ramakant.png" alt="">
										</div>				
										<h2 class="about-item-title">Ramakant Vishwakarma</h2>
										<h3 class="about-item-subtitle">The Groom</h3>
										<div class="about-item-content">
											<p>फूलों से सजी महफ़िल, खुशियों से भरा आँगन , कमी रहेगी आपके साथ की पूरा कर देना इसे करके अपना आगमन . आपका स्वागत है !</p>
										</div>									
									</div>
								</div>
								<!-- /Groom -->
								
								<!-- Bride -->	
								<div class="col-sm-6">
									<div class="about-item">
										<div class="about-item-picture">
											<img src="img/monika.png" alt="">
										</div>	
										<h2 class="about-item-title">Monika Vishwakarma</h2>
										<h3 class="about-item-subtitle">The Bride</h3>
										<div class="about-item-content">
											<p>हमारे शादी के शुभ अवसर को अपने प्यार और आशीर्वाद से भर दीजिये . हमारी खुशियों में आपका स्वागत है !</p>
										</div>	
									</div>									
								</div>							
								<!-- /Bride -->
							</div>

				<div class="row">

					<div class="countdown-container">
						<!-- icon -->
						<div class="countdown-icon">
							<img src="img/ico-heart2.png" alt="">
						</div>
						<!-- /icon -->
						<!-- countdown title top -->
						<h2 class="countdown-title countdown-title1"><span class="countdown-title-borders">November 21, 2021 in Jaunpur Uttar pradesh, India</span></h2>
						<!-- /countdown title top -->
						<!-- countdown ( Edit it on main.js )-->
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
								<div id="countdown" class="row"></div>
							</div>
						</div>
						<!-- /countdown -->
						<!-- countdown title bot -->
						<h3 class="countdown-title countdown-title2"><span class="countdown-title-borders">Until we get Married!</span></h3>
						<!-- countdown title /bot -->
					</div>
				</div>
				<div class="section-timeline">
							<!-- Title 1 -->
							<h2 class="title1 couple-title1 title1-border">Our Timeline</h2>
							<!-- /Title 1 -->
							<!-- timeline -->
							<ul class="timeline">
								<!-- item -->
							    <li>
							    	<!-- badge -->
							    	<div class="timeline-badge">
							    		<span class="timeline-date">19/11</span>
							    		<span class="timeline-year">2021</span>
							    	</div>
							    	<!-- /badge -->
							    	<!-- panel -->
							      	<div class="timeline-panel">
							      		<!-- item heading -->
							        	<div class="timeline-heading">
							          		<h4 class="timeline-title">शुभ तिलक</h4>
							          		
							        	</div>
							        	<!-- /item heading -->
							        	<!-- item body -->
							        	<div class="timeline-body">
							          		<p> तारीख 19 नवंबर को दोपहर 2 बजे तिलक समारोह आरंभ होगा</p>
							        	</div>
							        	<!-- /item body -->
							        </div>
							        <!-- /panel -->
							    </li>
							    <!-- /item -->
							    <!-- item -->
							    <li class="timeline-inverted">
							    	<!-- badge -->
							    	<div class="timeline-badge bg-color1">
							    		<span class="timeline-date">20/11</span>
							    		<span class="timeline-year">2021</span>
							    	</div>
							    	<!-- /badge -->
							    	<!-- panel -->
							      	<div class="timeline-panel">
							      		<!-- item heading -->
							        	<div class="timeline-heading">
							          		<h4 class="timeline-title">शुभ हल्दी</h4>
							        	</div>
							        	<!-- /item heading -->
							        	<!-- item body -->
							        	<div class="timeline-body">
							          		<p>तारीख 20 नवंबर को दोपहर 12 बजे हल्दी समारोह आरंभ होगा</p>
							        	</div>
							        	<!-- /item body -->
							        </div>
							        <!-- /panel -->
							    </li>
							    <!-- /item -->
							    <!-- item -->
							    <li>
							    	<!-- badge -->
							    	<div class="timeline-badge">
							    		<span class="timeline-date">21/11</span>
							    		<span class="timeline-year">2021</span>
							    	</div>
							    	<!-- /badge -->
							    	<!-- panel -->
							      	<div class="timeline-panel">
							      		<!-- item heading -->
							        	<div class="timeline-heading">
							          		<h4 class="timeline-title">शुभ विवाह</h4>						          		
							        		
							        	</div>
							        	<!-- /item heading -->
							        	<!-- item body -->
							        	<div class="timeline-body">
							          		<p>तारीख 21 नवंबर को दोफर 4 बजे बारात निकलेगी</p>
							        	</div>
							        	<!-- /item body -->
							        </div>
							        <!-- /panel -->
							    </li>
							    <!-- /item -->
							    <!-- item -->
							    <li class="timeline-inverted">
							    	<!-- badge -->
							    	<div class="timeline-badge bg-color1">
							    		<span class="timeline-date">22/11</span>
							    		<span class="timeline-year">2021</span>
							    	</div>
							    	<!-- /badge -->
							    	<!-- panel -->
							      	<div class="timeline-panel">
							      		<!-- item heading -->
							        	<div class="timeline-heading">
							          		<h4 class="timeline-title">शुभ विदायी</h4>
							        	</div>
							        	<!-- /item heading -->
							        	<!-- item body -->
							        	<div class="timeline-body">
							          		<p>तारीख 22 नवंबर को सुबह 8 बजे बिदाई कार्यक्रम</p>
							        	</div>
							        	<!-- /item body -->
							        </div>
							        <!-- /panel -->
							    </li>
							    <!-- /item -->
							</ul>
							<!-- /timeline -->
						</div>
				<!-- /Countdown Container -->
			</div>
            <div class="page-content">
							
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<!-- page title -->
						<h2 class="title1 couple-title1 title1-border">Rsvp</h2>	
						<!-- /page title -->
						<div class="row">
							<!-- RSVP -->
							<div class="col-sm-4 rsvp-text">
								<h3 class="title4">Please fll our RSVP Form</h3>
								<p>Kindly respond by March 28, 2016. We look forward to celebrating with you!</p>								
							</div>
							<div class="col-sm-8">

								<!-- Contact Form -->
								<form id="contactForm"> 
									<!-- Form Field -->        
						            <div class="form-group">
						            	<label for="name">Your name</label>
						            	<input type="text" id="name" name="name" class="form-control required" placeholder="Name"/>
						            </div>   
						            <!-- /Form Field -->   
						            <div class="row">
										<div class="col-md-6">
											<!-- item -->            
											<div class="form-group">
												<label for="email">Your Email</label>
											 	 <input type="email" id="email" name="email" class="form-control required" placeholder="Email"/>
											</div>    
											<!-- /item -->
										</div>
										<div class="col-md-6">
											<!-- item -->            
											<div class="form-group">
												<label for="guests">How many guests?</label>
											 	<input type="text" class="form-control" name="guests" id="guests" placeholder="Number of Guests" required>
											</div>    
											<!-- /item -->
										</div>
									</div>  
						           <!-- item -->            
									<div class="form-group">
										<label for="attending">I am attending:</label>
									 	<select name="attending" id="attending" class="form-control">
									 		<option value="All Events">All Events</option>
									 		<option value="The Ceremony">The Ceremony</option>
									 		<option value="The Party">The Party</option>
									 	</select>
									</div>    
									<!-- /item -->
						            <!-- Form Field -->                 
						            <div class="form-group"> 
						            	<label for="message">Message (optional):</label>
						              	<textarea class="form-control required" id="message" name="message" placeholder="Message"></textarea>
						            </div>    
						            <!-- /Form Field -->           
						            <!-- Form Field -->  
						            <div class="form-group form-send">
						            	<button type="submit" value="" class="btn btn-1c"><span class="fa fa-paper-plane"> &nbsp;</span>send</button>
						            	<!--<input type="submit" value="Send" class="btn btn-1c"/>-->
						            </div>   
						            <!-- /Form Field -->                  
					          	</form>	
					          	<!-- / Contact form -->
					          	<!-- Form - Success Message -->	
					          	<div id="contactSuccess" class="contact-feedback">Your message has been sent!</div>		
								<!-- /Form - Sucess Message -->
								<!-- Form - Success Message -->	
					          	<div id="contactSending" class="contact-feedback saving">Sending your message <span>.</span><span>.</span><span>.</span></div>		
								<!-- /Form - Sucess Message -->
								<!-- Form - Error Message -->
								<div id="contactError" class="contact-feedback">Error</div>
								<!-- /form - Error Message -->
								
								<div class="form">
								</div>
							</div>
							<!-- /RSVP -->
						</div>
					</div>
					
				</div>
			</div>
			<!-- /content -->
			<!-- footer -->
			<footer id="footer">
				<p class="footer-icon"><img src="img/ft-icon.png" alt=""></p>
			  	<p class="quote-content">"When i saw you i fell in love, and you smiled because you knew."</p>
			  	<p class="quote-author">Ramakant Vishwakarma</p>
			</footer>
			<!-- /footer -->
		</div>
	</div>
</div>
<!-- /Main Content
================================================== -->

<!-- >> JS
============================================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="{{ asset('vendor1/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('vendor1/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Validate -->
<script src="{{ asset('vendor1/validate.js')}}"></script>
<!-- Countdown -->
<script src="{{ asset('vendor1/jquery.countdown.min.js')}}"></script>
<!-- Mansonry -->
<script src="{{ asset('vendor1/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('vendor1/masonry.pkgd.min.js')}}"></script>
<!-- Modal box-->
<script src="{{ asset('vendor1/nivo-lightbox/nivo-lightbox.min.js')}}"></script>
<!-- Cycle -->
<script src="{{ asset('vendor1/cycle2.js')}}"></script>
<!-- SmoothScroll -->
<script src="{{ asset('vendor1/smoothScroll.js')}}"></script>
<!-- Placeholder for IE -->
<script src="{{ asset('vendor1/placeholders.jquery.min.js')}}"></script>
<!-- Crossbrowser -->
<script src="{{ asset('js/cross-browser.js')}}"></script>
<!-- Main Config -->
<script src="{{ asset('js/main.js')}}"></script>
<!-- Holder -->
<script src="{{ asset('vendor1/holder.js')}}"></script>

</body>

</html>
