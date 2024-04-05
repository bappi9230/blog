<!doctype html>
<html lang="en">

<head>
    @include('frontend.include.css')
    <title>Blog</title>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!---header-->
    <div class="container">
        <nav class="site-nav">
            <div class="row align-items-center">
                <div class="col-sm-2 text-lg-left logo d-none d-sm-block pl-3">
                    <a href="index.html">Blog<span class="text-primary">.</span> </a>
                </div>

                <div class="col-7 col-sm-6 text-center top-menu">
                    <div class="d-inline-flex align-items-center">
                        <div class="search-wrap">
                            <a href="#" class="d-inline-flex align-items-center js-search-toggle"><span
                                    class="icon-search2 mr-2"></span><span>Search</span></a>
                            <form action="#" class="d-flex">
                                <input type="search" id="s" class="form-control"
                                    placeholder="Enter keyword and hit enter...">
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-4">
                    <div style="margin-left: 40%;">
                        <a href="index.html">Login<span class="text-primary">.</span> </a>|
                        <a href="index.html">Register</a>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block row align-items-center">
            </div>
        </nav> <!-- END nav -->
    </div>

    <!---content-->
    @yield('content')

    @include('frontend.include.footer')
</body>

</html>
