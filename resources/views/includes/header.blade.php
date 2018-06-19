<header>
	
<div class="barboven">

<!-- bar boven -->
<ul class="nav justify-content-end mt-3 mr-3">
  <li class="justify-content-start">
    <a href="{{ route('dashboard') }}">
    <img id="logonav" src="{{ asset('img/logoklein.png') }}" ></a></li>
  <li class="nav-item mr-3">
    <a class="btn btn-brown" href="{{ route('create') }}"><img id="pin" src="{{ asset('img/pin.svg') }}">create pin</a>
  </li>
  <li class="nav-item">
    <div class="dropdown">
        <button class="btn btn-brown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ app('App\Http\Controllers\UserController')->getAccountHeader() }}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route('profile') }}">my profile</a>
          <a class="dropdown-item" href="{{ route('account') }}">settings</a>
          <a class="dropdown-item" href="{{ route('logout') }}">log out</a>
        </div>
      </div> 
  </li>
</ul>


</div>

<!-- bar onder -->
<nav class="navbar navbar-light mb-3 baronder">
  <a class="navbar-brand">Discover awesome spots!</a>
</nav>





</header>