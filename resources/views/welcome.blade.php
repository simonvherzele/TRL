@extends('layouts.master-login')

@section('title')
    Welcome to TRL!
@endsection

@section('content')
    

<div id="login-bg"></div>


    <img id="logo" src="{{ asset('img/full-logogroot.png') }}">



<div class="row">
 <div class="col"></div>


<div class="container col" ">
    <!-- Login card-->


    <div id="login-form" class="card kader" style="width: 20rem; display: block;" >
<article class="card-body ">


<a id="register-form-link" href="" class="float-right btn btn-brown">Register</a>
<h5 class="card-title mb-4 mt-1 text-uppercase">Sign in</h5>
     <form action="{{ route('signin') }}" method="post">
    <div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">
        <label for="email">Your Email</label>
        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
    </div> <!-- form-group// -->
    <div class="form-group">
        <a class="float-right text-secondary" href="#">Forgot?</a>
        <label for="password">Your password</label>
        <input class="form-control" type="password" name="password" id="password">
    </div> <!-- form-group// --> 
    <div class="form-group"> 
    <div class="checkbox">
      <label> <input type="checkbox"> Save password </label>
    </div> <!-- checkbox .// -->
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-brown btn-block ">Login<img class="arrow" src="{{ asset('img/arrow.png') }}"></button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <br>
  <!-- error message -->
    @include('includes.message-block')

    </div> <!-- form-group// -->                                                           
</form>
</article>
</div> <!-- card.// -->
<!-- Register card-->
<div id="register-form" class="card kader" style="width: 20rem; display: none;">
<article class="card-body">
<a id="login-form-link" href="" class="float-right btn btn-brown">Sign in</a>
<h5 class="card-title mb-4 mt-1 text-uppercase">Register</h5>
     <form action="{{ route('signup') }}" method="post">
    <div class="form-group  {{$errors->has('email') ? 'has-error' : '' }}">
        <label for="email">Your email</label>
        <input class="form-control" type="text" name="email" id="email1" value="{{ Request::old('email') }}">
    </div> <!-- form-group// -->
    <div class="form-group {{$errors->has('username') ? 'has-error' : '' }}">
        <label for="username">Your username</label>
        <input class="form-control" type="text" name="username" id="username" value="{{ Request::old('username') }}">
                </div>
    <div class="form-group {{$errors->has('password') ? 'has-error' : '' }}">
        <label for="password">Your password</label>
        <input class="form-control" type="password" name="password" id="password1">
    </div> <!-- form-group// --> 
    <div class="form-group"> 
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-brown btn-block"> Register me <img class="arrow" src="{{ asset('img/arrow.png') }}"></button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </div> <!-- form-group// -->                                                           
</form>
</article>
</div> <!-- card -->

</div>
<div class="col"></div>

</div>
    <!-- <div class="row">
        <div class="col-md-6">
            <h3>Sign up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group  {{$errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{$errors->has('username') ? 'has-error' : '' }}">
                    <label for="username">Your username</label>
                    <input class="form-control" type="text" name="username" id="username" value="{{ Request::old('username') }}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit!</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>    
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit!</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>  
    </div> -->
@endsection