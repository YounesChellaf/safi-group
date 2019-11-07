<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Safi group of companies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.jpeg')}}" rel="icon">
    <link href="{{asset('assets/img/favicon.jpeg')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
<!--==========================
Header
============================-->
<header id="header">

    {{--<div id="topbar">--}}
        {{--<div class="container">--}}
            {{--<div class="social-links">--}}
                {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                {{--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="{{route('home')}}" class="scrollto"><span>Safi Group</span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('home')}}#intro">Home</a></li>
                <li><a href="{{route('home')}}#about">About Us</a></li>
                <li><a href="{{route('home')}}#services">Services</a></li>
                <li><a href="{{route('home')}}#team">Team</a></li>
                <li><a href="{{route('home')}}#clients">Our companies</a></li>
                <li><a href="{{route('home')}}#footer">Contact Us</a></li>
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
@yield('content')

<!--==========================
  Footer
============================-->
<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-sm-8">

                            <div class="footer-info">
                                <h3>SAFI Group</h3>
                                <p>
                                    Our company is a diversified and experienced investment group that specializes in investing in sectors of the economy that we know and can effectively navigate
                                </p>
                                 </div>

                            <div class="footer-newsletter">
                                <div class="footer-links">
                                    <h4>Contact Us</h4>
                                    <p>
                                        Schenkkade 50<br>
                                        2595AR Den Haag<br>
                                        Netherlands <br>
                                        <strong>Phone:</strong>+31203033013<br>
                                        <strong>Email:</strong>Info@safi.nl<br>
                                    </p>
                                </div>

                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>

                        </div>

                        {{--<div class="col-sm-6">--}}
                            {{--<div class="footer-links">--}}
                                {{--<h4>Useful Links</h4>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#">Home</a></li>--}}
                                    {{--<li><a href="#">About us</a></li>--}}
                                    {{--<li><a href="#">Services</a></li>--}}
                                    {{--<li><a href="#">Terms of service</a></li>--}}
                                    {{--<li><a href="#">Privacy policy</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                            {{--<div class="footer-links">--}}
                                {{--<h4>Contact Us</h4>--}}
                                {{--<p>--}}
                                    {{--A108 Adam Street <br>--}}
                                    {{--New York, NY 535022<br>--}}
                                    {{--United States <br>--}}
                                    {{--<strong>Phone:</strong> +1 5589 55488 55<br>--}}
                                    {{--<strong>Email:</strong> info@example.com<br>--}}
                                {{--</p>--}}
                            {{--</div>--}}

                            {{--<div class="social-links">--}}
                                {{--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>--}}
                                {{--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>Send us a message</h4>
                        <p>You can contact us by sending us an email at the address or to use this form message to send an email automaticly </p>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>

                            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                        </form>
                    </div>

                </div>



            </div>

        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/mobile-nav/mobile-nav.js')}}"></script>
<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('assets/contactform/contactform.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
