@extends('layouts.app')

@section('content')
<section class="sign-in">
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-6 col-lg-12 col-md-offset-4 col-md-12">
                    <div class="form-container">
                        <div class="form-icon p-4">
                            <img class="w-100" src="{{asset('img/td-logo.png')}}" alt="logo">
                            <p>Welcome Step Sister</p>
                        </div>
                        <form class="form-horizontal">
                            <h3 class="title">Sign in</h3>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" type="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" type="password" placeholder="Password">
                            </div>
                            <button class="btn signin">Login</button>
                            <span class="forgot-pass"><a href="#">Forgot Username/Password?</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection