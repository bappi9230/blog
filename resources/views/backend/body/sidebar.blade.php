<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->

        <div id="sidebar-menu">

            <ul id="side-menu">
                <li>
                    <a href="javascript: void(0);" aria-expanded="false">
                        <i class="nav-icon fas fa-user-secret mx-1"></i>
                        <span>Blog</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('blog.index') }}">
                                <i class="fa fa-list mx-1"></i>
                                <span>List</span>
                            </a>
                        </li>
                        <li><a href="{{ route('blog.create') }}">
                                <i class="fa fa-list mx-1"></i>
                                <span>Create</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
