<nav class="navbar navbar-expand-lg navbar-dark d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
      <a class="navbar-brand nav-link" href="{{ url('/') }}">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="Laravel logo" style="width: 1.5rem;">
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
            @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/courses')}}">Courses</a>
                     </li>
                     @endauth
            @endif
                </div>

                @if (Route::has('login'))
            @auth
        <div class="btn-group shadow-0">
        <button type="button" class="btn btn-dark dropdown-toggle" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Log Out') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    @else
        <div class="btn-group shadow-0">
        <button type="button" class="btn btn-dark dropdown-toggle" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                Accedi
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('login') }}" class="dropdown-item">{{ __('Log in') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="dropdown-item">{{ __('Register') }}</a>
                    </li>
                @endif
            </ul>
        </div>
    @endauth
@endif
      </div>
    </div>
  </nav>