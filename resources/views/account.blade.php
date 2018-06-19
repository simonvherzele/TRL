    @extends('layouts.master')

@section('title')
    Account
@endsection

@section('content')
<div class="container bg-white ml-7 mr-7 mb-5">


    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Your Account</h3></header>
            <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" value="{{ $user->username }}" id="username">
                </div>
                <div class="form-group">
                    <label for="name">Real Name</label>
                    <input type="text" name="name" class="form-control" value="Full Name" id="realname">
                </div>
                <div class="form-group">
                    <label for="bio">Some Keywords about you</label>
                    <input type="text" name="bio" class="form-control" value="Fotography, travel, design, ..." id="bio">
                </div>
                <div class="form-group">
                    <label for="image">Profile photo (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
         
         @if (Storage::disk('local')->has($user->username . '-' . $user->id . '.jpg'))
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <img class="w-25" src="{{ route('account.image', ['filename' => $user->username . '-' . $user->id . '.jpg']) }}" alt="new photo">
            </div>
        </section>
        @endif
       <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>

</div>
    
    </section>
   
@endsection