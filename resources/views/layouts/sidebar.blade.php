 <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('dash-ui/images/brand/logo/logo.svg') }}" alt="Logo"/>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <i data-feather="home" class="nav-icon icon-xs me-2"></i>  {{ __('Dashboard') }}
            </x-jet-nav-link>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">{{ __('Layouts & Pages') }}</div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2"></i> {{ __('Layouts') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon icon-xs me-2 bi bi-table"></i>
                    {{ __('Tables') }}
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">{{ __('Documentation') }}</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow" href="#" >
                    <i data-feather="clipboard" class="nav-icon icon-xs me-2" ></i>  {{ __('Docs') }}
                </a>
            </li>
        </ul>
    </div>
</nav>