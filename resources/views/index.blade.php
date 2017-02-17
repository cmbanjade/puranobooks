@extends('layouts.apps')
@section('content')
    <div id="promo">
        <div class="jumbotron">
            <h1>Register Now</h1>
            <p>Purano Books offers a huge collection of second hand books. Grab the offer now and get discount upto 15%</p>
            <p>
                <button class="btn btn-info btn-lg" type="button">Sign Up</button>
            </p>
        </div>
    </div>
    <div class="container site-content" id="welcome">
        <h1>Welcome to PuranoBooks</h1>
        <p>The thing is: buying a secondhand book is not just about a purchase. It’s about the&nbsp;experience&nbsp;too. </p>
    </div>
    <div id="dark-section">
        <div class="container site-content" id="why">
            <h1 class="bg-info">Why Choose Us</h1>
            <div class="row">
                <div class="col-md-4" id="block_1"><i class="fa fa-book"></i>
                    <h2>Buy/Sell Books</h2>
                    <p>Sell your books, Share your books</p>
                </div>
                <div class="col-md-4"><i class="material-icons">fingerprint</i>
                    <h2>Antique Books</h2>
                    <p>You will always find a collection of antique books here</p>
                </div>
                <div class="col-md-4"><i class="glyphicon glyphicon-refresh"></i>
                    <h2>Second Hand Books</h2>
                    <p>Puranobooks has the largest collection for second hand books</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container site-content" id="gallery">
        <h1>Gallery </h1>
        <div class="row">
            <div class="col-md-4">
                <a href="photo-1.jpg" target="_blank" data-lightbox="photo-1.jpg"><img class="img-responsive" src="assets1/img/photo-1.jpg"></a>
            </div>
            <div class="col-md-4">
                <a href="photo-2.jpg" target="_blank" data-lightbox="photo-2.jpg"><img class="img-responsive" src="assets1/img/photo-2.jpg"></a>
            </div>
            <div class="col-md-4">
                <a href="photo-3.jpg" target="_blank" data-lightbox="photo-3.jpg"><img class="img-responsive" src="assets1/img/photo-3.jpg"></a>
            </div>
        </div>
    </div>
     @endsection
     @section('footer')
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">PuranoBooks<span> </span></a></h3>
                    <p class="links"><a href="#">Login </a><strong> · </strong><a href="#">Sign Up</a><strong> · </strong><a href="#">About Us</a><strong> </strong></p>
                    <p class="company-name">Purano Books © 2017 </p>
                </div>
                <div class="col-md-4 col-sm-6 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">Newroad-08, Pokhara</span> Kaski, Nepal</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +977 9826182839</p>
                    </div>
                    <div></div>
                    <p class="text-left show contact"> <i class="fa fa-envelope footer-contacts-icon"></i><a href="#" target="_blank">contact@puranobooks.com</a></p>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 footer-about">
                    <h4>About PuranoBooks</h4>
                    <p>PuranoBooks is founded on 2017/02/07. This is the best platform for managing our old books and save some money.
                    </p>
                    <div class="social-links social-icons"><a href="href://www.facebook.com/puranobooks"><i class="fa fa-facebook"></i></a><a href="href://www.twitter.com/puranobooks"><i class="fa fa-twitter"></i></a><a href="href://www.linkedin.com/puranobooks"><i class="fa fa-linkedin"></i></a>
                        <a
                        href="href://www.github.com/puranobooks"><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @endsection
