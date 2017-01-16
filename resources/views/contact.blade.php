@extends('layout')

@section('title')
Contact 
@stop

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Calhoun's
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-offset-1 col-md-10">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB4s1b2brpC2l4TpMDbtxcx58o7IZqRsSw&q=Calhoun+Riverside+RV+Retreat,Tivoli+TX"></iframe>
            </div>
        </div>
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-offset-1 col-md-5">
                <h3>Send us a Message</h3>
                <form  name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>First Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-offset-2 col-md-4">
                <h3>Contact Details</h3>
                <p><i class="fa fa-compass">
                    Coordinates</i><br> 
                    Lat: 28.477294<br>
                    Long: -96.861032<br>
                </p>
                <p> Address<br>
                    125 Haeber Ln<br>
                Tivoli, TX 77990<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (361) 550-7536</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">calhoun@calhounsrvretreats.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>:<br> Monday - Friday: 9:00 AM to 6:00 PM<br>
                    Saturday - Sunday 9:00 AM to 4:00 PM</p>
            </div>
        </div>
    </div>
@stop