@extends('layouts.app')

@section('content')
<div class="boxed-content">	
			
    <div class="page-content page-home">
        
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
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h2 class="title1 couple-title1 title1-border">Live stream on 20 & 21 Nov 2021</h2>
                <div class="video">
                    @foreach ($livekeys as $item)
                    <iframe width="100%" height="355" src="{{$item->livekey}}" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endforeach
                    
                </div>
            </div>
            <div class="col-sm-2"></div>
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
    <div class="page-content" id="app">
        <Component2 />
    </div>
    
    <div class="page-content">				
        <div class="row">
            <!-- content here -->
            <div class="col-xs-12 col-xs-offset-1">
                <!-- SECTION: Blog + Side Column -->
                <div class="section-blog">
                    <div class="row">
                        <!-- blog -->
                        <div class="col-md-9">	
                            <!-- Blog Posts -->
                            		
                            <!-- /Blog Posts -->										
                            <!--=== Blog Comments -->
                            <div class="blog-comments">
                                <h2 class="blog-single-title title1-border">Love & Wishes</h2>
                                
                                <!-- /Comments Form -->

                                <!-- Posted Comments -->

                                <!-- Comment -->
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th width="10%">All Comment</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       @foreach ($comments as $comment)
                                       <tr>
                                           
                                            <td>
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="img/avtar.png" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">{{ $comment->name }}
                                                            <small>{{ $comment->created_at}}</small>
                                                        </h4>
                                                        {{$comment->comment}}
                                                    </div>
                                                </div>
                                                
                                            
                                            </td>

                                            
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                

                                <!-- /Comment -->
                            </div>
                            <!-- === /Blog Comments -->
                        </div>
                        
                        <!-- /side-column -->
                    </div>
                </div>
                <!-- /SECTON: Blog + Side Column -->
            </div>
            <!-- /content here -->				
        </div>
    </div>  
    
    <footer id="footer">
        <p class="footer-icon"><img src="img/ft-icon.png" alt=""></p>
          <p class="quote-content">"When i saw you i fell in love, and you smiled because you knew."</p>
          <p class="quote-author">Ramakant Vishwakarma</p>
    </footer>
    <!-- /footer -->
</div>


<script src="{{ asset('js/app.js')}}"></script>   
@endsection