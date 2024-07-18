<!-- Left Sidebar -->
<div class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="sidebar-user-panel active">
                <div class="user-panel">
                    <div class="image">
                        <img src="{{ asset('assets/images/usrbig.jpg') }}" class="img-circle user-img-circle" alt="User Image" />
                    </div>
                </div>
                <div class="profile-usertitle">
                    <div class="sidebar-userpic-name"> Emily Smith </div>
                    <div class="profile-usertitle-job">Manager </div>
                </div>
            </li>
            <li class="{{ Request::route()->named('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="{{ Request::route()->named('form') ? 'active' : '' }}">
                <a href="#" class="menu-toggle">
                    <i class="fab fa-wpforms"></i>
                    <span>Forms</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::route()->named('form') ? 'active' : '' }}">
                        <a href="{{ route('form') }}">Basic Form</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::route()->named('datatable') || Request::route()->named('usertable') ? 'active' : '' }}">
                <a href="#" class="menu-toggle">
                    <i class="fas fa-table"></i>
                    <span>Tables</span>
                </a>
                <ul class="ml-menu">
                    <li class="{{ Request::route()->named('datatable') ? 'active' : '' }}">
                        <a href="{{ route('datatable') }}">Report</a>
                    </li>
                    <li class="{{ Request::route()->named('usertable') ? 'active' : '' }}">
                        <a href="{{ route('usertable') }}">User Report</a>
                    </li>
                </ul>
            </li>
            {{-- Add more menu items as needed --}}
        </ul>
    </div>
    <!-- #Menu -->
</div>
<!-- #END# Left Sidebar -->
