<div class="main-sidebar shadow">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand" style="margin-bottom: 50px">
            <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1"
                width="30">
            <a href="/">Lab Reservation</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item @yield('profile-active')">
                <a href="{{ route('profile.index') }}" class="nav-link"><i class="fa fa-user"></i>
                    <span>Profile</span></a>
            </li>
            <li class="menu-header">Dashboard</li>
            {{-- Admin Sidebar --}}
            @can('are-admin')
                <li class="nav-item @yield('dashboard-active')">
                    <a href="{{ route('admin.index') }}" class="nav-link"><i
                            class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="nav-item @yield('manajemen-user-active')">
                    <a href="{{ route('admin.manajemen-user.index') }}" class="nav-link"><i class="fa fa-user"></i>
                        <span>Users Management</span></a>
                </li>
                <li class="nav-item @yield('manajemen-lab-active')">
                    <a href="{{ route('admin.manajemen-lab.index') }}" class="nav-link"><i class="fas fa-columns"></i>
                        <span>Lab
                            Management</span></a>
                </li>
                <li class="nav-item @yield('manajemen-lab-reservation-active')">
                    <a href="{{ route('admin.manajemen-reservation.index') }}" class="nav-link"><i
                            class="far fa-file-alt"></i>
                        <span>Lab
                            Reservation Management</span></a>
                </li>
            @endcan
            {{-- Member Sidebar --}}
            @can('are-member')
                <li class="nav-item @yield('dashboard-active')">
                    <a href="{{ route('member.index') }}" class="nav-link"><i
                            class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="nav-item @yield('lab-reservation-active')">
                    <a href="{{ route('member.lab-reservation.index') }}" class="nav-link"><i class="fas fa-columns"></i>
                        <span>Lab
                            Reservation</span></a>
                </li>
                <li class="nav-item @yield('reservation-history-active')">
                    <a href="{{ route('member.reservation-history') }}" class="nav-link"><i class="far fa-file-alt"></i>
                        <span>Reservation
                            History</span></a>
                </li>
            @endcan
        </ul>
    </aside>
</div>
