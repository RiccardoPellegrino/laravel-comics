<header class="bg-white ">
  
  <div class="bg-primary flex-end ">
    <div class="container">
        <ul class=" text-white d-flex list-unstyled justify-content-end">
            <li class="me-3">DC POWER ^SM VISA &copy;</li>
            <li>Additional dc site</li>
        </ul>
    </div>
  </div>

  <nav class="container">
    <a href="#">
      <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo">
    </a>
 <div>
<ul>
    <li>
      <a class="nav-link {{Route::currentRouteName() == 'characters' ? 'active' : ''}}" href="{{route('characters')}}">
        Characters
       </a> 
   </li>
   <li>
    <a class="nav-link {{Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">
      Comics
     </a> 
 </li>
 <li>
  <a class="nav-link {{Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{route('movies')}}">
    Movies
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{route('tv')}}">
    TV
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'games' ? 'active' : ''}}" href="{{route('games')}}">
    Games
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">
    Collectibles
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'videos' ? 'active' : ''}}" href="{{route('videos')}}">
    Videos
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'fans' ? 'active' : ''}}" href="{{route('fans')}}">
    Fans
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'news' ? 'active' : ''}}" href="{{route('news')}}">
    News
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'shop' ? 'active' : ''}}" href="{{route('shop')}}">
    Shop
   </a> 
</li>
</ul>

</nav>
</div>
</header>