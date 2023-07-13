@extends('layouts.main')

@section('content')

    <div class="section wb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="message-box">
                        <h4>About</h4>
                        <h2>Welcome to SMBarber</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non
                            aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus
                            bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero
                            bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="row">
                <div class="col-md-12">
                    <div class="about-tab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_a" data-toggle="tab">Our Mission</a></li>
                            <li><a href="#tab_b" data-toggle="tab">Why Us?</a></li>
                            <li><a href="#tab_c" data-toggle="tab">About Us</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab_a">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque tortor mi,
                                    eget mattis velit sagittis id. Duis ornare mauris eu eros interdum, vitae finibus arcu
                                    ultricies. Donec vitae felis eleifend, dignissim erat a, pretium diam. Donec eu massa
                                    odio. Suspendisse et ornare lacus, pharetra imperdiet ligula.</p>
                                <p>Vestibulum ac quam id lorem semper condimentum. Nulla vel ligula turpis. Nullam luctus,
                                    mi nec rhoncus gravida, tortor est semper purus, a feugiat sapien odio non urna. Fusce
                                    pellentesque neque ut nisi rhoncus imperdiet. Sed eu purus vel turpis consectetur
                                    convallis. Donec a dolor tellus. Phasellus dignissim erat nec ipsum condimentum
                                    sollicitudin. </p>
                            </div>
                            <div class="tab-pane fade" id="tab_b">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which don't
                                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                    need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <ul>
                                    <li><i class="fa fa-circle-o" aria-hidden="true"></i>User Experince</li>
                                    <li><i class="fa fa-circle-o" aria-hidden="true"></i>Full Devices</li>
                                    <li><i class="fa fa-circle-o" aria-hidden="true"></i>Awesome Design</li>
                                    <li><i class="fa fa-circle-o" aria-hidden="true"></i>Visual Impact</li>
                                    <li><i class="fa fa-circle-o" aria-hidden="true"></i>100% Sincronized</li>
                                    <li><i class="fa fa-circle-o" aria-hidden="true"></i>Custom Support</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tab_c">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which don't
                                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                    need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div><!-- tab content -->
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="row text-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="uploads/barber_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i
                                    class="flaticon-unlink"></i></a>
                            <img src="{{ asset('uploads/barber_01.jpg') }}" alt=""
                                class="img-responsive img-rounded">
                        </div>
                        <h3>Show us Your Graft Style</h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis
                            nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                    </div><!-- end service -->
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="uploads/barber_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i
                                    class="flaticon-unlink"></i></a>
                            <img src="{{ asset('uploads/barber_02.jpg') }}" alt=""
                                class="img-responsive img-rounded">
                        </div>
                        <h3>Outstanding Barber Shop</h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum
                            euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                    </div><!-- end service -->
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="uploads/barber_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i
                                    class="flaticon-unlink"></i></a>
                            <img src="{{ asset('uploads/barber_03.jpg') }}" alt=""
                                class="img-responsive img-rounded">
                        </div>
                        <h3>The Barber Materials</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales
                            aliquam at eget quam. Integer ultricies et magna quis posuere.</p>
                    </div><!-- end service -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="barbers" class="section lb">
        <div class="container-fluid">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <small>MEET OUR BABRER TEAM</small>
                    <h3>OUR BARBERS</h3>
                    <hr class="grd1">
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non
                        aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div>
            </div><!-- end title -->

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix">
                        <div class="hover-br">
                            <img src="{{ asset('uploads/barber_team_01.jpg') }}" alt="" class="img-responsive">
                            <div class="social-up-hover">
                                <div class="footer-social">
                                    <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-title">
                            <h3>Soren Bo Bostian</h3>
                            <small>The Founder</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of The Barber Shop
                            Company.</p>
                    </div>
                    <!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s"
                    data-wow-delay="0.4s">
                    <div class="widget clearfix">
                        <div class="hover-br">
                            <img src="{{ asset('uploads/barber_team_03.jpg') }}" alt="" class="img-responsive">
                            <div class="social-up-hover">
                                <div class="footer-social">
                                    <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-title">
                            <h3>Bryan Saftler</h3>
                            <small>The Barber</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop
                            Market.</p>
                    </div>
                    <!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s"
                    data-wow-delay="0.6s">
                    <div class="widget clearfix">
                        <div class="hover-br">
                            <img src="{{ asset('uploads/barber_team_02.jpg') }}" alt="" class="img-responsive">
                            <div class="social-up-hover">
                                <div class="footer-social">
                                    <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-title">
                            <h3>Matthew Bayliss</h3>
                            <small>The Barber</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and barber of the Barber Shop
                            Website.</p>
                    </div>
                    <!--widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="testimonials" class="parallax section db parallax-off"
        style="background-image:url('uploads/parallax_20.jpg');">
        <div class="container-fluid">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <small>LET'S SEE OUR TESTIMONIALS</small>
                    <h3>HAPPY TESTIMONIALS</h3>
                    <hr class="grd1">
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non
                        aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly
                                    skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_01.png') }}" alt=""
                                    class="img-responsive alignright">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_02.png') }}" alt=""
                                    class="img-responsive alignright">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_03.png') }}" alt=""
                                    class="img-responsive alignright">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids
                                    pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('uploads/testi_03.png') }}" alt=""
                                    class="img-responsive alignright">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

@endsection
