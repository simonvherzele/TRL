@extends('layouts.master')

@section('title')
    profile
@endsection

@section('content')
<div class="container bg-white ml-7 mr-7">
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{{ route('account.image', ['filename' => Auth::user()->username . '-' . Auth::user()->id . '.jpg']) }}" alt="" class="img-responsive">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                      {{ Auth::user()->username }} 
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <a href="{{ route('account') }}"><button type="button" class="btn  btn-brown">Edit</button></a>
                </div>
                <!-- END SIDEBAR BUTTONS -->
            </div>
        </div>
        <div class="col-md-9">
                <h2> My pins</h2>

    
    
            <div class="col-md-12">

               @foreach($posts->where('user_id',Auth::user()->id) as $post)
                <article class="post" data-postid="{{ $post->id }}">
                <p>{{ $post->body }}</p>
                <div class="info">
                    Posted by {{ $post->user->username }} on {{ $post->created_at }}
                </div>
                <div class="interaction">
                    <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'  }}</a> |
                        <a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'  }}</a>
                    @if(Auth::user() == $post->user)
                        |
                        <a href="#" class="edit">Edit</a>
                        |
                        <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
                    @endif
                </div>
                </article>
                @endforeach 

            </div>

    </div>
</div>
</div>
            </div>
        </div>
    </div>

<!-- gallery -->




@endsection








