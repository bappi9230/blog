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
                    <a href="{{ url('/') }}">Blog<span class="text-primary">.</span> </a>
                </div>

                <div class="col-7 col-sm-6 text-center top-menu">
                    <div class="d-inline-flex align-items-center">
                        <div class="search-wrap">
                            <a href="#" class="d-inline-flex align-items-center js-search-toggle"><span
                                    class="icon-search2 mr-2"></span><span>Search</span></a>
                            <form method="get" action="#" class="input-wrapper header-search hs-round d-none d-md-flex">
                                <input type="text" class="form-control" name="search" id="global_search" placeholder="Search in..."
                                    onfocus="search_result_show()" onblur="search_result_hide()" id="search_area" required />

                                <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                                </button>
                                <div id="searchProducts">
                                    <h6 id="total"> </h6>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-4">
                    <div style="margin-left: 40%;">
                        @if (auth()->user())
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        @else
                            <a href="{{ route('login') }}">Login<span class="text-primary">.</span> </a>|
                            <a href="{{ route('register') }}">Register</a>
                        @endif
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
    @include('frontend.include.script')


    <script>
        $(document).ready(function() {
            $('#global_search').on('keyup', function(event) {
                let data = $(this).val();
                $.ajax({
                    url: "{{ route('search') }}",
                    method: 'GET',
                    data: {
                        data
                    },
                    dataType: "JSON",
                    success: function(res) {
                        if (res.length > 0) {
                            $('#search').html(res);
                        } else {
                            $('#search').html(
                                `<h4 style="color: #ff1414;text-align: center;padding-top: 16px;"> There is no data</h4>`
                            );
                        }
                    }

                })
            });
        });
    </script>
</body>

</html>
