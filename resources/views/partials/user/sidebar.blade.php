<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">
                <span class="logo-name" style="font-weight: 600; font-size:21px;">Cardro Software</span>
            </a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                {{-- <img alt="image" src="{{ asset('assets/img/avat.png') }}">
                --}}
                <img alt="image" src="/storage/{{ Auth::user()->image }}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="active">
                <a href="/user-dashboard" class="menu-toggle nav-link"><i
                        data-feather="airplay"></i><span>Dashboard</span></a>
            </li>
            @if (Auth::user()->is_admin)
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="file-plus"></i><span>Products</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="/manage-products">Manage Products</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="menu"></i><span>Posts</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="/manage-posts">Manage Posts</a></li>
                    </ul>
                </li>
                {{-- Users routes for super admin --}}
                <li class="menu-header">Users</li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="user-check"></i><span>Users</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="/create-admin">Register user</a></li>
                        <li><a class="nav-link" href="/manage-admin">Manage users</a></li>
                    </ul>
                </li>
                <li class="menu-header">Financials</li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="briefcase"></i><span>Transactions</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="/manage-transactions">All Transactions</a></li>
                    </ul>
                </li>
            @endif
            <li class="menu-header">Account</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>User
                        settings</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/user-profile">My profile</a></li>
                    <li><a class="nav-link" href="/auth-password-reset/{{ Auth::user()->uuid }}">Change Password</a>
                    </li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
