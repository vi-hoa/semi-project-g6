<<<<<<< HEAD
@extends('auth')
@section('content')
=======
>>>>>>> 1ec6fcf1ab6b551e3ac6351a6f2fb6d59aa9ba65
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Sign up</h2>
<<<<<<< HEAD
                    <p>Welcome to the our store.</p>
=======
                    <p>Welcome to the official Anime blog.</p>
>>>>>>> 1ec6fcf1ab6b551e3ac6351a6f2fb6d59aa9ba65
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Register</h3>
                    <form action="#">
                        <div class="input__item">
<<<<<<< HEAD
                            <input type="text" placeholder="Username">
                            @if($errors->has('username'))
                            <span class="icon_mail">{{$errors->first('username')}}</span>
                            @endif
                        <div class="input__item">
                            <input type="text" placeholder="Email address">
                            @if($errors->has('email'))
                            <span class="icon_mail">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Password">
                            @if($errors->has('password'))
                            <span class="icon_lock">{{$errors->first('password')}}</span>
                            @endif
=======
                            <input type="text" placeholder="Email address">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" placeholder="Password">
                            <span class="icon_lock"></span>
>>>>>>> 1ec6fcf1ab6b551e3ac6351a6f2fb6d59aa9ba65
                        </div>
                        <button type="submit" class="site-btn">Register Now</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Have An Account Already?</h3>
                    <a href="#" class="primary-btn">Login Now</a>
                </div>
            </div>
        </div>
        <div class="login__social">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <span>or</span>
                        <ul>
<<<<<<< HEAD
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With Facebook</a></li>
=======
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                            Facebook</a></li>
>>>>>>> 1ec6fcf1ab6b551e3ac6351a6f2fb6d59aa9ba65
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->