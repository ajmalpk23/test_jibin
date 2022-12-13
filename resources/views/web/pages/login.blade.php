@extends('web.layouts.master')
@section('content')

<main>
    <div class="account-area mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="basic-login mb-50">
                        <h5>Login</h5>
                        <form action="#">
                            <label for="name">Username or email address  <span>*</span></label>
                            <input id="name" type="text" placeholder="Enter Username">
                            <label for="pass">Password <span>*</span></label>
                            <input id="pass" type="password" placeholder="Enter password...">
                            <div class="login-action mb-10 fix">
                                <span class="log-rem f-left">
                                   <input id="remember" type="checkbox">
                                   <label for="remember">Remember me</label>
                                </span>
                                <span class="forgot-login f-right">
                                   <a href="forgot-password.html">Lost your password?</a>
                                </span>
                            </div>
                            <a href="login.html" class="tp-in-btn w-100">log in</a>
                        </form>
                        <p class="mt-20 text-center login-help">
                            <a href="{{url('user/register')}}">Don't have account ?</a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-image w-img">
                        <img src="assets/img/about-b.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
