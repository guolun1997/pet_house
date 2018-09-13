@extends('layout.public')


@section('main')

    <div class="my-account-area">
        <div class="container">
            <h6 class="account-heading">My Account</h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="login-form-area">
                        <form action="#" method="post">
                            <div class="login-info">
                                <h6>Login</h6>
                                <div class="single-field">
                                    <label>username or email address<span>*</span></label>
                                    <input type="email" required="">
                                </div><!-- /.single-field -->
                                <div class="single-field">
                                    <label>password<span>*</span></label>
                                    <input type="password" required="">
                                </div><!-- /.single-field -->
                                <div class="form-action">
                                    <span class="password-recover"><a href="#">Lost Your Password?</a></span>
                                    <input type="submit" class="login-btn" value="Login">
                                    <label><input type="checkbox">Remember Me</label>
                                </div><!-- /.form-action -->
                            </div><!-- /.login-info -->
                        </form>
                    </div><!-- /.login-form-area -->
                </div>
                <div class="col-md-6">
                    <div class="registration-form-area">
                        <form action="#" method="post">
                            <div class="registration-info">
                                <h6>register</h6>
                                <div class="single-field">
                                    <label>email address<span>*</span></label>
                                    <input type="email" required="">
                                </div><!-- /.single-field -->
                                <div class="single-field">
                                    <label>password<span>*</span></label>
                                    <input type="password" required="">
                                </div><!-- /.single-field -->
                                <div class="form-action">
                                    <input type="submit" class="register-btn" value="Register">
                                </div><!-- /.form-action -->
                            </div><!-- /.registration-info -->
                        </form>
                    </div><!-- /.registration-form-area -->
                </div>
            </div>
        </div>
    </div>

@endsection
