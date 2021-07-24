<!DOCTYPE html>
<html lang="en">

<head>
    <title>WiSport</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset("images/fav.ico") }}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CMontserrat:300,500%7COswald:400,500" rel="stylesheet">

    <!-- FONTAWESOME ICONS -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ALL CSS FILES -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wisport.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- MOB.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ url('/css/mob.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>


<!-- SECTION: TRAINING -->
<section>
    <div class="training img-pag-cycle">
        <div class="tr-pro">
            <div class="inn-title">
                <!-- SOCIAL SHARE -->
                <div class="share-btn">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i> Share On Facebook</a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Share On Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- TRAINING BENEFITS -->
            <div class="inn-all-com">
                <h4>Season Start Date</h4>
                <p>Join us for fun, community based events and competition</p>
                <div class="inn-ev-date">
                    <div class="inn-ev-date-left">
                        <h4>2nd</h4>
                        <span>may 2021</span>
                    </div>
                </div>
            </div>
            <!-- TRAINING BENEFITS -->
            <div class="inn-all-com inn-all-list tp-1">
                <!--h4>Other Details</h4>
                <p>Becoming a gym certified personal fitness trainer is your foundation for success. gym is the only personal trainer certification program that integrates a complete approach to fitness, wellness and business skills.</p>
                <ul>
                    <li>League Location: Illinois, USA</li>
                    <li>Get trained by qualified personnel</li>
                    <li>Guest lectures by International faculty</li>
                    <li>Internship with the Global fitness leader</li>
                    <li>Placement opportunities with Gold’s Gym</li>
                    <li>Earn handsome salaries on completion of course</li>
                    <li>Fitness Assessment room</li>
                </ul-->
                <!-- TICKET BOOKING -->
                <div class="inn-tickers">
                    <!--a href="booking.html" class="inn-reg-com inn-reg-book"><i class="fa fa-ticket" aria-hidden="true"></i> </a-->
                    <a href="join-club.html" class="inn-reg-com inn-reg-link"><i class="fa fa-registered" aria-hidden="true"></i> Join WiSport Now</a>
                </div>
            </div>
            <!-- TRAINING BENEFITS -->
            <div class="inn-all-com inn-all-list inn-pad-top-5 tp-1">
                <h4>Standings</h4>
                <!--p>Becoming a gym certified personal fitness trainer is your foundation for success. gym is the only personal trainer certification program that integrates a complete approach to fitness, wellness and business skills.</p-->
                <a href="#" class="inn-te-ra-link">Click to view full team ranking</a>
            </div>
        </div>
    </div>
</section>
<!--SECTION: BLOG POSTS-->
<!--SECTION: FOOTER-->
<section>
    <div class="ffoot">
        <div class="lp">

            <!--SECTION: FOOTER-->
            <div class="row foot2">
                <div class="col-md-3">
                    <div class="foot2-1 foot-com">
                        <h4>USA: ADDRESS & CONTACT</h4>
                        <p>10110 Welcome Ave N, Brooklyn Park, MN 55443</p>
                    </div>
                    <div class="foot2-2 foot-soc foot-com">
                        <h4>Follow Us Now</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook fb1"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter tw1"></i></a>
                            </li>
                        </ul>
                        <span class="foot-ph">Phone: 763-898-6065</span>
                    </div>
                </div>
            </div>
            <!--SECTION: FOOTER-->
            <div class="row">
                <div class="col-md-12 foot4">
                    <h5>Our Sponsors</h5>
                    <ul>
                        <li>
                            <a href="#"><img src="{{ asset("images/sponsor/1.png") }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset("images/sponsor/2.png") }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Footer-->
<section>
    <!-- FOOTER: COPY RIGHTS -->
    <div class="fcopy">
        <div class="lp copy-ri row">
            <div class="col-md-6 col-sm-12 col-xs-12">Copyright © 2017 Sports Club. All Rights Reserved.</div>
            <div class="col-md-6 foot-privacy">
                <ul>
                    <li><a href="#">Privacy</a>
                    </li>
                    <li><a href="#">Terms of use</a>
                    </li>
                    <li><a href="#">Security</a>
                    </li>
                    <li><a href="#">Policy</a>
                    </li>
                    <li><a href="join-club.html">Make Sponsors</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--== Bootstrap & Latest JS ==-->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
