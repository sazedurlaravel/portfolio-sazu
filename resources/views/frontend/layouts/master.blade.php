<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Md Sazedur Rahman || Portfolio </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       @include('frontend.partials.styles')
   </head>

   <body>
   

    @include('admin.partials.message')
    <!-- Preloader Start -->
    @include('frontend/partials.header')
    
    @yield('content')
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                   <div class="row justify-content-center">
                       <div class="col-lg-6">
                            <div class="footer-top-cap text-center">
                                <img src="{{asset('frontend/assets/img/logo/logo2_footer.png')}}" alt="">
                                <span><a href="#">sazedur936@gmail.com</a></span>
                                <p>Parbatipur,Post office: Nurul Huda-5251, Dinajpur </p>
                                <p>Dinajpur, Bangladesh</p>
                            </div>
                       </div>
                   </div>
               </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Sazedur Rahman</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <!-- Footer Social -->
                                            <div class="footer-social f-right">
                                                <a>Stay Connected</a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fas fa-globe"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- Footer End-->
                    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    @include('frontend.partials.scripts')
       
        
    </body>
</html>