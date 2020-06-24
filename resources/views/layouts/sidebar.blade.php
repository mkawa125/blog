<nav class="sidebar-nav">

    <ul class="nav">

        <li class="nav-item">
            <a class="nav-link "
               href="{{url('/')}}">
                <i class="nav-icon fa fa-dashboard"></i> Dashboard
            </a>
        </li>

        <li class="nav-item d-lg-none">
            <a class="nav-link"
               href="{{ route('users.index') }}">
                <i class="nav-icon fa fa-users"></i> Users
            </a>
        </li>

        <li class="nav-title">Users & Roles</li>

        <li class="nav-item">
            <a class="nav-link"
               href="{{ route('users.index') }}">
                <i class="nav-icon fa fa-users"></i>Users</a>
        </li>

        <li class="nav-item">
            <a class="nav-link "
               href="{{ route('roles.index') }}">
                <i class="nav-icon fa fa-tasks"></i>Roles</a>
        </li>

        {{-- Learn Nav With DropDown Menu --}}
        <li class="nav-item nav-dropdown d-lg-none">

            <a class="nav-link nav-dropdown-toggle"
               href="#">
                Account
            </a>

            <ul class="nav-dropdown-items">

                <li class="nav-item ">
                    <a class="nav-link"
                       href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form"
                          action="#"
                          method="POST"
                          style="display: none;">{{ csrf_field() }}</form>
                </li>

                <li class="nav-item ">
                    <a class="nav-link"
                       href="#">
                        Change password
                    </a>
                </li>

            </ul>

        </li>

    </ul>

</nav>