 <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <a href="#"><img src="{{asset('frontend/assets/img/service/services1.png')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('frontend/assets/img/service/services2.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('frontend/assets/img/service/services3.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services4.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services5.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services6.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="services-caption">
                                    <div class="row">

                                        @php

                                        $projects=$category->projects()

                                        @endphp

                                        @if($projects->count()>0)

                                            @foreach($projects as $project)

                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('images/projects/'.$project->image)}}" alt="">
                                                    </div>
                                                </div>

                                            @endforeach

                                        @else

                                            No Project Found

                                        @endif

                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services2.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('frontend/assets/img/service/services1.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('frontend/assets/img/service/services3.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services4.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services5.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services6.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FUR -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services1.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('frontend/assets/img/service/services2.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('frontend/assets/img/service/services3.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services4.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services5.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services6.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FIVE -->
                            <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services3.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('frontend/assets/img/service/services2.png')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('frontend/assets/img/service/services1.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services4.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services5.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('frontend/assets/img/service/services6.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>