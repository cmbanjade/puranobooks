@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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


