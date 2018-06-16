@extends('layouts.master')

@section('title')
    Welcome to TRL!
@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
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
    </div>
@endsection