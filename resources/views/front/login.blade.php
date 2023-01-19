@extends('front.layout.main')
@section('content')
<div class="w3l-breadcrumbs">
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="{{ url('/') }}">Home</a> » <span class="breadcrumb_last" aria-current="page">Login</span>
        </div>
    </nav>
</div>
<!--//breadcrumbs -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->


</div>
<section class="w3l-loginhny py-5">
    <!-- login -->
    <div class="container py-lg-3">
        <div class="w3l-hny-login">
            <div class="w3l-hny-login-info">
                <h2>Login to your Account</h2>
                <form action="{{ url('check-login') }}" method="post">
                    @csrf()
                    @if ($message = Session::get('authentication'))
                    <span class="italic text-sm text-danger mb-3">Invail Phone no or Password!</span>
                    @endif
                    <label>Phone No</label>
                    <div class="input-group">
                        <input type="text" name="username" placeholder="01XXXXXXXXX" autofocus>
                        @error('username')
                        <span class="italic text-sm text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <label>Password</label>
                    <div class="input-group">
                        <input type="Password" name="password" placeholder="Password">
                        @error('password')
                        <span class="italic text-sm text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="login-check">
                        <!-- <label class="checkbox"><input type="checkbox" name="checkbox" /> Remember me</label> -->
                        <a class="forgot" href="#">Forgot password?</a>
                    </div>
                    <button class="btn read-button btn-login" type="submit">Login</button>
                </form>
                <p class="account1">Dont have an account yet? <a href="#">Sign Up</a></p>
            </div>
        </div>
    </div>
</section>
<!-- //login -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

</div>
@endsection