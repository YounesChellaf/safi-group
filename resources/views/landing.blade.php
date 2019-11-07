@extends('home')
@section('content')
    <section id="intro" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last" style="margin-top: 8%">
                    <h2>Safi Group<br>of <span>companies </span></h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Know More !</a>
                    </div>
                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <img src="{{asset('assets/img/safi-logo.png')}}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section><!-- #intro -->
    <main id="main">

        <!--==========================
          About Us Section
        ============================-->
        <section id="about">

            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-6" style="margin-top: 15%">
                        <div class="about-img">
                            <img src="{{asset('assets/img/personel-pic.jpeg')}}" alt="" >
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content">
                            <h2>About Us</h2>
                            {{--<h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>--}}
                            <p>
                                Our company is a diversified and experienced investment group that specializes in investing in sectors of the economy that we know and can effectively navigate. We have been in the investing space for decades now and each of our trading specialists has learned the intracacies of each of our target industries. An advanced knowledge of our preferred industires allows us greater potential for profit and the ability to get the best results for our clients who entrust us with funds. When you hire us to manage your investments, you can expect top-quality results, professionalism, and communication.
                            </p>
                            <p>
                                Our target industries for our investments include lucrative and reliable sections of the economy such as insurance, trading, legal, medicine, IT, mining and more. Our intimate knowledge of each of these industries allows us to predict with great accuracy the general direction of each one and how to invest in companies within the sector. Gathering actionable data is a large part of our strategy, and we have decades of experience doing just that in each of these sectors. These industries have been proven to be somewhat predictable and produce a lot of revenue, making them reliable targets for strategic acquisition for our clients. We believe in these sectors and know that our involvement with them will lead to a favorable outcome for our clients.
                            </p>
                            <p>
                                Our investment group manages funds for all sorts of clients, so don’t feel intimidated or left out by our services. If you want to inquire about a large-scale investment into these industries but don’t know the best way to strategically enter the market, we can help by managing your funds and using our industry insight to get you the best returns possible. Get in touch with our investment agents today to start talking about an investment solution and strategy that will work for you and ensure consistent, significant returns for the years to come.
                            </p>
                            {{--<ul>--}}
                            {{--<li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>--}}
                            {{--<li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>--}}
                            {{--<li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- #about -->


        <!--==========================
          Services Section
        ============================-->
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Services</h3>
                    <p>The main investment domains in our group of companies.</p>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #fceef3; width: 40%; height: 100px">
                                <img src="{{asset('assets/img/insurence.svg')}}" alt="" style="width: 50%; margin-top: 5%">
                            </div>
                            <h4 class="title"><a href="{{route('insurance')}}">Insurance</a></h4>
                            <p class="description">Insurance is one of the oldest and most reliable investments in the country and the world ...
                                <a href="{{route('insurance')}}">More details</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #fff0da; width: 40%; height: 100px">
                                <img src="{{asset('assets/img/legal.svg')}}" alt="" style="width: 50%; margin-top: 5%">
                            </div>
                            <h4 class="title"><a href="{{route('legal')}}">Legal</a></h4>
                            <p class="description">The legal industry is one of the cornerstones of our investment portfolio due to the sustained ... <a href="{{route('legal')}}">More details</a></p>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #e1eeff; width: 40%; height: 100px">
                                <img src="{{asset('assets/img/sale.svg')}}" alt="" style="width: 50%; margin-top: 5% ">
                            </div>
                            <h4 class="title"><a href="{{route('trading')}}">Trading</a></h4>
                            <p class="description">World trade and commerce is always happening in every second of every day. The volume of dollars ... <a href="{{route('trading')}}">More details</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #eafde7; width: 40%; height: 100px">
                                <img src="{{asset('assets/img/doctor.svg')}}" alt="" style="width: 60%; margin-top: 5%">
                            </div>
                            <h4 class="title"><a href="{{route('medical')}}">Medical</a></h4>
                            <p class="description">In many areas of the world, including the United States, healthcare is the largest industry in ... <a href="{{route('medical')}}">More details</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #e1eeff; width: 40%; height: 100px">
                                <img src="{{asset('assets/img/technology.svg')}}" alt="" style="width: 50%; margin-top: 5%">
                            </div>
                            <h4 class="title"><a href="{{route('it')}}">Information Technology</a></h4>
                            <p class="description">As the world continues to move forward, it continues to be proven that infromation technology ... <a href="{{route('it')}}">More details</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #ecebff; width: 40%; height: 100px">
                                <img src="{{asset('assets/img/icon.svg')}}" alt="" style="margin-bottom: 5%">
                            </div>
                            <h4 class="title"><a href="{{route('mining')}}">Mining</a></h4>
                            <p class="description">Many don’t think of mining as being one of the world’s largest industries anymore and as such ... <a href="{{route('mining')}}">More details</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #services -->

        <!--==========================
          Why Us Section
        ============================-->
        <section id="why-us" class="wow fadeIn">
            <div class="container">
                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">10</span>
                        <p>Companies</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">25</span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">180</span>
                        <p>Hard Workers</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">5</span>
                        <p>Countries</p>
                    </div>

                </div>

            </div>
        </section>
        <section id="team" class="section-bg">
            <div class="container">
                <div class="section-header">
                    <h3>Team</h3>
                    <p>Our pationnate team who care about evoluating the world</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{asset('assets/img/personel-pic.jpeg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Bahir Safi</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="https://www.linkedin.com/in/bahir-safi-38398b16b/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #team -->

        <!--==========================
          Clients Section
        ============================-->
        <section id="clients" class="wow fadeInUp">
            <div class="container">

                <header class="section-header">
                    <h3>Our Companies</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <a href="https://claim24.nl/" target="_blank"><img src="{{asset('assets/img/claim.png')}}" alt=""></a>
                    <a href="https://claim24.nl/" target="_blank"><img src="{{asset('assets/img/claim.png')}}" alt=""></a>
                    <a href="https://claim24.nl/" target="_blank"><img src="{{asset('assets/img/claim.png')}}" alt=""></a>
                    <a href="https://claim24.nl/" target="_blank"><img src="{{asset('assets/img/claim.png')}}" alt=""></a>
                </div>

            </div>
        </section><!-- #clients -->
    </main>
@endsection