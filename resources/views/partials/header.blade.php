<header class="bg-white">
  <nav class="container d-flex ">

    <a href="#">
      <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo">
    </a>
    
<ul>
    <li>
      <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
        Characters
       </a> 
   </li>
   <li>
    <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
      Comics
     </a> 
 </li>
 <li>
  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
    Movies
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
    TV
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
    Games
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
    Collectibles
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
    Videos
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
    Fans
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
    News
   </a> 
</li>
<li>
  <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
    Shop
   </a> 
</li>
</ul>

</nav>
 
</header>