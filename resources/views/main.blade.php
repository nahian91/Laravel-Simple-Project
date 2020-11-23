<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead--> 
        <header class="masthead" style="background-image: url(@if ($top->image) {{$top->image}} @endif)">
            <div class="container">
                <div class="masthead-subheading">                    
                    @if ($top->sub_title)
                        {{$top->sub_title}}
                    @endif
                </div>
                <div class="masthead-heading text-uppercase">
                    @if ($top->title)
                        {{$top->title}}
                    @endif
                </div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="@if ($top->link) {{$top->link}}
                @endif">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@if  ($settings->services_title) {{$settings->services_title}} @endif</h2>
                    <h3 class="section-subheading text-muted">@if ($settings->services_description)
                        {{$settings->services_description}}
                    @endif</h3>
                </div>
                <div class="row text-center">                    
                    @foreach ($services as $service)
                        <div class="col-md-4">
                            <img src="{{$service->image}}" style="width:100px" alt="">
                            <h4 class="my-3">{{$service->title}}</h4>
                            <p class="text-muted">{{$service->description}}</p>
                        </div>                        
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@if ($settings->portfolio_title)
                        {{$settings->portfolio_title}}
                    @endif</h2>
                    <h3 class="section-subheading text-muted">@if ($settings->portfolio_description)
                        {{$settings->portfolio_description}}
                    @endif</h3>
                </div>
                <div class="row">


                    @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$portfolio->id}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{$portfolio->small_image}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$portfolio->title}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$portfolio->category->title}}</div>
                            </div>
                        </div>

                        
                        <!-- Modal 1-->
                        <div class="portfolio-modal modal fade" id="portfolioModal{{$portfolio->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="modal-body">
                                                    <!-- Project Details Go Here-->
                                                    <h2 class="text-uppercase">{{$portfolio->title}}</h2>
                                                    <p class="item-intro text-muted">{{$portfolio->description}}</p>
                                                    <img class="img-fluid d-block mx-auto" src="{{$portfolio->big_image}}" alt="" />
                                                    <p>{{$portfolio->description}}</p>
                                                    <ul class="list-inline">
                                                        <li>Date: {{$portfolio->created_at->format('m D, y')}}</li>
                                                        <li>Client: {{$portfolio->clients->title}}</li>
                                                        <li>Category: {{$portfolio->category->title}}</li>
                                                    </ul>
                                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                        <i class="fas fa-times mr-1"></i>
                                                        Close Project
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>                        
                    @endforeach



                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@if ($settings->about_title)
                        {{$settings->about_title}}
                    @endif</h2>
                    <h3 class="section-subheading text-muted">@if ($settings->about_description)
                        {{$settings->about_description}}
                    @endif</h3>
                </div>
                <ul class="timeline">

                    <?php $i=0; ?>
                    @foreach ($abouts as $about)
                    <?php $i++;?>
                    <li class="<?php if($i%2) {echo 'timeline-image';}?>">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                        
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@if ($settings->team_title)
                        {{$settings->team_title}}
                    @endif</h2>
                    <h3 class="section-subheading text-muted">@if ($settings->team_decription)
                        {{$settings->team_decription}}
                    @endif</h3>
                </div>
                <div class="row">

                    @foreach ($teams as $team)
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{asset($team->image)}}" alt="" />
                                <h4>{{$team->title}}</h4>
                                <p class="text-muted">{{$team->designation}}</p>
                                @if ($team->tw_link)
                                    <a class="btn btn-dark btn-social mx-2" href="{{$team->tw_link}}"><i class="fab fa-twitter"></i></a>
                                @endif

                                @if ($team->fb_link)
                                    <a class="btn btn-dark btn-social mx-2" href="{{$team->fb_link}}"><i class="fab fa-facebook-f"></i></a>
                                @endif

                                @if ($team->ln_link)
                                    <a class="btn btn-dark btn-social mx-2" href="{{$team->ln_link}}"><i class="fab fa-linkedin-in"></i></a>
                                @endif
                            </div>
                        </div>                        
                    @endforeach


                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">@if ($settings->contact_title)
                        {{$settings->contact_title}}
                    @endif</h2>
                    <h3 class="section-subheading text-muted">@if ($settings->contact_description)
                        {{$settings->contact_description}}
                    @endif</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">@if ($footer->copyright)
                        {{$footer->copyright}}
                    @endif</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="@if ($footer->tw_link)
                        {{$footer->tw_link}}
                        @endif"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="@if ($footer->fb_link)
                        {{$footer->fb_link}}
                        @endif"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="@if ($footer->ln_link)
                        {{$footer->ln_link}}
                        @endif"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('assets')}}/js/scripts.js"></script>
    </body>
</html>
