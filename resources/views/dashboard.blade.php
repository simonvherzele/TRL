@extends('layouts.master')
<style>
      #map {
        height: 500px;
        width: 100%;
      }
    </style>

@section('title')
	The Roamers Life - #TRL
@endsection

@section('content')
@include('includes.message-block')
<div class="panel-heading">
            <div class="row">
              <div class="col">
                <a href="#" class="active btn-block btn btn-brown" id="pins-link">Browse by pins</a>
              </div>
              <div class="col">
                <a href="#" id="map-link" class=" btn-block btn btn-brown">Browse on the map</a>
              </div>
            </div>
            <hr>
          </div>
<div class="container bg-white ml-7 mr-7 mb-5">


  <!-- posts (foto's) -->
  <div id="Postdiv" style="display: block;">
  <header class="mb-5"><h3>Check out these spots...</h3></header>
	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
        			@foreach($posts as $post)
        			<article class="post" data-postid="{{ $post->id }}">
        				<p>{{ $post->body }}</p>
                <img class="w-25" src="{!! '/img/'.$post->user_id.'-'.$post->body.'.jpeg' !!}" alt="new photo">
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
	</section>
</div>


<!-- map -->
<div id="Mapdiv" style="display: none;">
	<section class="row posts">
		<div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var positions = <?php echo json_encode( $posts ) ?>;
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 51.0281407, lng: 4.4790396},
          zoom: 12
        });
        for(var i = 0; i < positions.length; i++)
        {
        
            var lat = positions[i].lat;
            var lon = positions[i].lng;
            var name = positions[i].body;
            //window.alert(lat);

            var marker = new google.maps.Marker({ position: new google.maps.LatLng(lat, lon) });
            marker.setMap(map);

            var infoWindow = new google.maps.InfoWindow({ content: name });
            infoWindow.open(map, marker);
        }
        infoWindow = new google.maps.InfoWindow;



        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            /*map.setCenter(pos);
            var marker = new google.maps.Marker({
            position: pos,
            map: map,
            title: 'Hello World!'
            });*/




           
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      


      

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }</script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqcPcmHc5-sb5PnxW97xomgaHRrSWHpNI&callback=initMap">
    </script>
	</section>

</div>
</div>



<!-- posts edit -->
 <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<script>
	var token = '{{ Session::token() }}';
	var urlEdit = '{{ route('edit') }}';
	var urlLike = '{{ route('like') }}';
</script>





@endsection