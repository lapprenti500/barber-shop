@extends('layouts.main')
@section('content')
    <div id="contact" class="section wb">
        <div class="container-fluid">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <small>LET'S MAKE AN CONTACT FOR YOUR LIFE</small>
                    <h3>Contact</h3>
                    <hr class="grd1">
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non
                        aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">Select Time</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control"
                                        data-style="btn-white">
                                        <option value="selecttime">Select Time</option>
                                        <option value="Weekdays">Weekdays</option>
                                        <option value="Weekend">Weekend</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="map" class="map-box">
        <div class="container-fluid">

        </div><!-- end container -->
    </div><!-- end section -->
@endsection
