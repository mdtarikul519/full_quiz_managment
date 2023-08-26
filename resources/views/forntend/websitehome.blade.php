<!-- Home -->
@extends('forntend.layout.website')


@section('content')
       

<!-- /Home -->
<section id="slider-container" class="slider-area three"> 
    <div class="slider-owl owl-theme owl-carousel"> 
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(img/slider/slider3.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">  
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7"> 
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>EDUCATION MAKES </h3>
                                    <h2>PROPER HUMANITY </h2>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>
                                    <a class="default-btn" href="{{asset('website')}}/about.html">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="slider-img">
                                <img src="{{asset('website')}}/img/slider/home.png" alt="slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(img/slider/slider2.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">   
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7"> 
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>EDUCATION MAKES </h3>
                                    <h2>PROPER HUMANITY </h2>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>
                                    <a class="default-btn" href="{{asset('website')}}/about.html">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="slider-img">
                                <img src="{{asset('website')}}/img/slider/home.png" alt="slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(img/slider/slider1.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">  
                <div class="container">
                    <div class="row">
                        <div class="col-md-7"> 
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>EDUCATION MAKES </h3>
                                    <h2>PROPER HUMANITY </h2>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>
                                    <a class="default-btn" href="{{asset('website')}}/about.html">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="slider-img">
                                <img src="{{asset('website')}}/img/slider/home.png" alt="slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->								
    </div>
</section>
<!-- About -->

		<!-- Header Area End -->
		<!-- Background Area Start -->
      
		<!-- Background Area End -->
        <!-- Courses Area Start -->
        <div class="courses-area pt-150 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <img src="{{asset('website')}}/img/icon/section.png" alt="section-title">
                            <h2>COURSES WE OFFER</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course">
                            <div class="course-img">
                                <a href="{{asset('website')}}/course-details.html"><img src="{{asset('website')}}/img/course/course1.jpg" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="{{asset('website')}}/course-details.html">CSE ENGINEERING</a></h3>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                                <a class="default-btn" href="{{asset('website')}}/course-details.html">read more</a>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course">
                            <div class="course-img">
                                <a href="{{asset('website')}}/course-details.html"><img src="{{asset('website')}}/img/course/course2.jpg" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="{{asset('website')}}/course-details.html">CSE ENGINEERING</a></h3>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                                <a class="default-btn" href="{{asset('website')}}/course-details.html">read more</a>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course mb-0">
                            <div class="course-img">
                                <a href="{{asset('website')}}/course-details.html"><img src="{{asset('website')}}/img/course/course3.jpg" alt="course">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="course-content">
                                <h3><a href="{{asset('website')}}/course-details.html">CSE ENGINEERING</a></h3>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                                <a class="default-btn" href="{{asset('website')}}/course-details.html">read more</a>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Area End -->
        <!-- Notice Start -->
        <section class="notice-area two three pt-140 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="notice-right-wrapper mb-25 pb-25">
                            <h3>TAKE A VIDEO TOUR</h3>
                            <div class="notice-video">
                                <div class="video-icon video-hover">
                                    <a class="video-popup" href="{{asset('website')}}/https://www.youtube.com/watch?v=fkoEj95puX0">
                                        <i class="zmdi zmdi-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="notice-left-wrapper">  
                            <h3>notice board</h3>
                            <div class="notice-left">
                                <div class="single-notice-left mb-23 pb-20">
                                    <h4>5, June 2022</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left hidden-sm mb-23 pb-20">
                                    <h4>4, June 2022</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left pb-70">
                                    <h4>3, June 2022</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left mb-23 pb-20">
                                    <h4>5, June 2022</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left hidden-sm mb-23 pb-20">
                                    <h4>4, June 2022</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                                <div class="single-notice-left pb-70">
                                    <h4>3, June 2022</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        <!-- Notice End -->
        <!-- About Start -->
        <div class="about-area pb-135 pt-130 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h2><span>EDUHOME</span> the best education theme for you</h2>
                            <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system, and expound the actual teachings  the master-builder of humanit happiness</p>
                            <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system</p>
                            <a class="default-btn" href="{{asset('website')}}/about.html">buy now</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('website')}}/img/about/about.png" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Event Area Start -->
        <div class="event-area three text-center pt-100 pb-115">
            <div class="container">
                <div class="row">
                     <div class="col-12">
                        <div class="section-title">
                            <img src="{{asset('website')}}/img/icon/section.png" alt="section-title">
                            <h2>UPCOMMING EVENTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event mb-35">
                            <div class="event-img">
                                <a href="{{asset('website')}}/event-details.html">
                                    <img src="{{asset('website')}}/img/event/event5.jpg" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3>20 <span>jun</span></h3>  
                                </div>
                            </div>
                            <div class="event-content text-start">
                                <h4><a href="{{asset('website')}}/event-details.html">ADVANCE PHP WORKSHOP</a></h4>
                                <ul>
                                    <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                    <li><span>venue</span> New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="{{asset('website')}}/event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event mb-35">
                            <div class="event-img">
                                <a href="{{asset('website')}}/event-details.html">
                                    <img src="{{asset('website')}}/img/event/event6.jpg" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3>18 <span>jun</span></h3>  
                                </div>
                            </div>
                            <div class="event-content text-start">
                                <h4><a href="{{asset('website')}}/event-details.html">learning english history</a></h4>
                                <ul>
                                    <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                    <li><span>venue</span> New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="{{asset('website')}}/event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event">
                            <div class="event-img">
                                <a href="{{asset('website')}}/event-details.html">
                                    <img src="{{asset('website')}}/img/event/event7.jpg" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3>16 <span>jun</span></h3>  
                                </div>
                            </div>
                            <div class="event-content text-start">
                                <h4><a href="{{asset('website')}}/event-details.html">UI &amp; UX DESIGNER MEETUP</a></h4>
                                <ul>
                                    <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                    <li><span>venue</span> New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="{{asset('website')}}/event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Area End -->
        <!-- Testimonial Area Start -->
        <div class="testimonial-area three pt-110 pb-105 text-center">
            <div class="container">
                <div class="row">
                    <div class="testimonial-owl owl-theme owl-carousel">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="single-testimonial">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="{{asset('website')}}/img/testimonial/testimonial.jpg" alt="testimonial">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                                        <h4>David Morgan</h4>
                                        <h5>Student, CSE</h5>
                                    </div>
                                </div>
                             </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->
        <!-- Blog Area Start -->
        <div class="blog-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <img src="{{asset('website')}}/img/icon/section.png" alt="section-title">
                            <h2>LATEST FROM BLOG</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="{{asset('website')}}/blog-details.html"><img src="{{asset('website')}}/img/blog/blog1.jpg" alt="blog"></a>
                                <div class="blog-hover">
                                    <a href="{{asset('website')}}/blog-details.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>By Alex  /  June 20, 2022  /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="{{asset('website')}}/blog-details.html">I must explain to you how all this a mistaken idea </a></h2>
                                    <a href="{{asset('website')}}/blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="{{asset('website')}}/blog-details.html"><img src="{{asset('website')}}/img/blog/blog2.jpg" alt="blog"></a>
                                <div class="blog-hover">
                                    <a href="{{asset('website')}}/blog-details.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>By Alex  /  June 20, 2022  /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="{{asset('website')}}/blog-details.html">I must explain to you how all this a mistaken idea </a></h2>
                                    <a href="{{asset('website')}}/blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog mb-0">
                            <div class="blog-img">
                                <a href="{{asset('website')}}/blog-details.html"><img src="{{asset('website')}}/img/blog/blog3.jpg" alt="blog"></a>
                                <div class="blog-hover">
                                    <a href="{{asset('website')}}/blog-details.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>By Alex  /  June 20, 2022  /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="{{asset('website')}}/blog-details.html">I must explain to you how all this a mistaken idea </a></h2>
                                    <a href="{{asset('website')}}/blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        <!-- Subscribe Start -->
        <div class="subscribe-area pt-60 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="subscribe-content section-title text-center">
                            <h2>subscribe our newsletter</h2>
                            <p>I must explain to you how all this mistaken idea </p>
                        </div>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form"> 
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button> 
                                </div>    
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
        <!-- Footer Start -->

@endsection
