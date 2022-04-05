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
            <x-jet-nav-link href="{{ route('customers.index') }}" :active="request()->routeIs('customers.*')">
                <i data-feather="users" class="nav-icon icon-xs me-2"></i>  {{ __('Customers') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.*')">
                <i data-feather="user" class="nav-icon icon-xs me-2"></i>  {{ __('Users') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="">
                <i class="nav-icon icon-xs me-2 bi bi-display"></i>  {{ __('Equipment') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('brands.index') }}" :active="request()->routeIs('brands.*')">
                <i class="nav-icon icon-xs me-2 bi bi-tags"></i>  {{ __('Brands') }}
            </x-jet-nav-link>
            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">{{ __('Layouts & Pages') }}</div>
            </li>
            <x-jet-nav-link href="">
                <i data-feather="user" class="nav-icon icon-xs me-2"></i>  {{ __('Equipment') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="">
                <i data-feather="user" class="nav-icon icon-xs me-2"></i>  {{ __('Brands') }}
            </x-jet-nav-link>
        </ul>
    </div>
</nav>