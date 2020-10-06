@extends('frontend.layouts.master')
@section('content')
<main>
   <!-- slider Area Start-->
   <div class="slider-area ">
      <div class="slider-active">
         <!-- Single Slider -->
         <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-8">
                     <div class="hero__caption">
                        <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                        <h1 data-animation="fadeInUp" data-delay=".6s">I’m Md Sazedur Rahman</h1>
                        <P data-animation="fadeInUp" data-delay=".8s" >I am a professional web designer and developer. I have 2 years experience in this field. I can create any kind of website as static or develop that in php laravel framework. I have experience in responsive design which is helpful for supporting any device. So you can order me and let me know about your project and get that.</P>
                        <!-- Hero-btn -->
                        <div class="hero__btn">
                           <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Learn More</a>
                           <a href="https://rb.gy/tjyjjb" target="_blank" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Single Slider -->
         <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-8">
                     <div class="hero__caption">
                        <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                        <h1 data-animation="fadeInUp" data-delay=".6s">I’m Designer Haris F. Watson</h1>
                        <P data-animation="fadeInUp" data-delay=".8s" >jhorem rfpsum golor sidt amet, consectetur adipiscing elit, eiusmod tempor incididunt utcjhg labore bet dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</P>
                        <!-- Hero-btn -->
                        <div class="hero__btn">
                           <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Learn More</a>
                           <a href="industries.html" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- slider Area End-->
   <!-- About Area start -->
   <section class="about-area section-paddingt30">
      <div class="container">
         <div class="row ">
            <div class="col-lg-5">
               <div class="about-caption mb-50">
                  <h3>Designing With Passion While Exploring The World.</h3>
                  <p class="pera1">Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.</p>
                  <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. </p>
               </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
               <div class="about-caption2">
                  <h3>Any Type Of Query<br> & Discussion.</h3>
                  <p>Late talk with me</p>
                  <div class="send-cv">
                     <a href="#">sazedur936@gmail.com</a>
                     <i class="ti-arrow-right"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About Area End -->
   <!-- Categories Area Start -->
   <section class="categories-area section-padding3">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <!-- Section Tittle -->
               <div class="section-tittle mb-70">
                  <h2>What Services you will Get from me!</h2>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="single-cat text-center mb-50">
                  <div class="cat-icon">
                     <img src="{{asset('images/categories/'.$category->image)}}" alt="Logo" width="100" style="margin-bottom: 10px;">
                  </div>
                  <div class="cat-cap">
                     <h5><a href="services.html">{{$category->name}}</a></h5>
                     <p>{{$category->category_desc}}</p>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
   <!-- Categories Area End -->
   <!-- Services Area Start -->
   <section class="services-area  services-padding">
      <div class="container">
         <div class="project-heading mb-35">
            <div class="row align-items-end">
               <div class="col-lg-6">
                  <!-- Section Tittle -->
                  <div class="section-tittle">
                     <h2>Work Example Here !</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <!-- Nav Card -->
               <div class="tab-content active" id="nav-tabContent">
                  <!-- card ONE -->
                  <div class="tab-pane fade active show">
                     <div class="services-caption">
                        <div class="row">
                            <div class="col-lg-12">
                                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">

                                    @php $i=1; @endphp

                                     @foreach($projects as $project)
                                     
                                            <!-- Single -->
                                         <div class="carousel-item {{$i==1 ? "active":" "}} single-services mb-30">
                                            <a href="{{$project->project_link}}" target="_blank"><img  src="{{asset('images/projects/'.$project->image)}}" alt=""></a>
                                         </div>

                                    
                                       
                                    @php $i++; @endphp
                                     
                                      @endforeach 

                                   
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>

                            </div>
                           
                          


                               

                        </div>
                     </div>
                  </div>
                  <!-- Card TWO -->
                  <!-- Card THREE -->
                  <!-- card FUR -->
                  <!-- card FIVE -->
               </div>
               <!-- End Nav Card -->
            </div>
         </div>
      </div>
   </section>
   <!-- Services Area End -->
   <!-- Want To Work Start -->
   <section class="wantToWork-area w-padding2">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-8 col-md-8">
               <div class="wantToWork-caption wantToWork-caption2">
                  <h2>Dont worry for contact i`m available</h2>
               </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3">
               <a href="{{route('contacts.form')}}" class="btn btn-black f-right">Contact Me Now</a>
            </div>
         </div>
      </div>
   </section>
   <!-- Want To Work End -->

  


  
   <!-- Brand Area End -->
   <!-- Contact Info Start -->
   <section class="contact-info-area w-padding2" data-background="{{asset('frontend/assets/img/gallery/section_bg04.jpg')}}">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-7">
               <div class="contact-caption mb-50">
                  <h3>If Not Now, When? Let’s Work Together!</h3>
                  <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra.</p>
                  <img src="{{asset('frontend/assets/img/gallery/sin.png')}}" alt="">
               </div>
            </div>
            <div class="col-xl-5 col-lg-5">
               <form action="{{route('contacts.store')}}" class="contact-wrapper" method="post">
                  @csrf
                  <input type="text" name="name" placeholder="Full Name">
                  <input type="email" name="email" placeholder="Email Address">
                  <textarea name="msg" placeholder="Your Message"></textarea>
                  <button class="submit-btn2" type="submit">Send Message</button>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- Contact Info End -->
</main>
@endsection