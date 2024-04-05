<div class="navbar-custom">
    <div class="container-fluid">
        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{ url('/') }}" class="logo logo-dark text-center">
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>
        </ul>

        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list" style="float: right">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent" role="button">
                    <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" alt="user-image"
                        class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        Maxine K <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="dropdownMenuReference">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>


        <div class="clearfix"></div>
    </div>
</div>
