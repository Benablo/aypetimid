
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a class="navbar-brand mb-0 h1" href="/"> Midterm Project</a>
      <div class="justify-content-center float-md-right" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link float-left" href="/"> </a>
          </li>
          @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link text-light" href="/dashboard"> Dashboard</a>
            </li>

            <div class="nav-item dropdown">
                <a class="nav-link  text-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Category
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <ul>
                        @foreach(App\Models\Category::all() as $c)
                        <li><a class="dropdown-item" href="/categories/{{$c->id}}">{{$c->category}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <li class="nav-item">
                <a href="/authors" class="nav-link text-light"> Users</a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link text-light" href="/logout">Logout</a> 
            </li>
              
          @else

          <li class="nav-item">
            <a class="nav-link text-light" href="/register"> Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/login">Login</a>
          </li>
              
          @endif
        </ul>
      </div>
    </div>
  </nav>