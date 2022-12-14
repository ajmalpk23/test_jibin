@extends('web.layouts.master')
@section('content')

<main>
    <div class="account-area mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="basic-login">
                        <h5>Register</h5>
                        <form action="#">
                            <label for="username">Username or email address  <span>*</span></label>
                            <input id="username" type="text" placeholder="Enter Username">
                            <label for="email-id">Email Address <span>*</span></label>
                            <input id="email-id" type="text" placeholder="Email address...">
                            <label for="userpass">Password <span>*</span></label>
                            <input id="userpass" type="password" placeholder="Enter password...">
                            <div class="login-action mb-10 fix">
                                <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a>.</p>
                            </div>
                            <a href="login.html" class="tp-in-btn w-100">Register</a>
                        </form>
                        <p class="mt-20 text-center login-help">
                            <a href="login.html">I have a Account</a>
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
