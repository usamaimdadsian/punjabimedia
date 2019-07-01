@extends('layouts.master')
@section('title')
    <title>Contact | Pakistani Stage Dramas</title>
@endsection
@section('content')
    <div class="contact-agile">
        <div class="faq">
            <h4 class="latest-text w3_latest_text">Contact Us</h4>
            <div class="container">
                    <div class="col-md-3 location-agileinfo">
                    <div class="icon-w3">
                        <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    </div>
                    <h3>Address</h3>
                    <h4>Lahore, Punjab</h4>
                    <h4>Pakistan.</h4>
                </div>
                <div class="col-md-3 call-agileits">
                    <div class="icon-w3">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                    </div>
                    <h3>Admin Information</h3>
                    <h4>My name is Usama Imdad. You want to know more about me <a href="http://usamasian.ml" target="_blank">click here</a>.</h4>
                </div>
                <div class="col-md-3 mail-wthree">
                    <div class="icon-w3">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <h3>Email</h3>
                    <h4><a href="mailto:stagedramaspak@gmail.com">stagedramaspak@gmail.com</a></h4>
                </div>
                <div class="col-md-3 social-w3l">
                    <div class="icon-w3">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>
                    <h3>Social media</h3>
                    <ul>
                        <li><a href="https://web.facebook.com/stageDramasPakistan" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span
                                    class="text">Facebook</span></a></li>
                        <li class="twt"><a href="https://twitter.com/StageDramasPk" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span
                                    class="text">Twitter</span></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <form action="#" method="post">
                    <input type="text" name="your name" placeholder="FIRST NAME" required="">
                    <input type="text" name="your name" placeholder="LAST NAME" required="">
                    <input type="text" name="your email" placeholder="EMAIL" required="">
                    <input type="text" name="subject" placeholder="SUBJECT" required="">
                    <textarea name="your message" placeholder="YOUR MESSAGE" required=""></textarea>
                    <input type="submit" value="SEND MESSAGE">
                </form>
            </div>
        </div>
    </div>
@endsection