<div class="header">
  <!-- navbar -->
  <nav class="navbar-classic navbar navbar-expand-lg">
    <a id="nav-toggle" href="#">
      <i data-feather="menu" class="nav-icon me-2 icon-xs"></i>
    </a>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
      <!-- List -->
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#" role="button" id="dropdownUser"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            @if (Auth::user()->profile_photo_path)
              <img class="rounded-circle" src="/storage/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
            @else
              <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            @endif
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end"
          aria-labelledby="dropdownUser">
          <div class="px-4 pb-0 pt-2">
            <div class="lh-1 ">
              <h5 class="mb-1"> {{ Auth::user()->name }}</h5>
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
          </div>
          <ul class="list-unstyled">
            <li>
              <a class="dropdown-item" href="{{ route('profile.show') }}">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i> {{ __('Edit Profile') }}
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i> {{ __('Sign Out') }}
              </a>
              <form action="{{ route('logout') }}" id="logout-form"  method="post">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
</div>