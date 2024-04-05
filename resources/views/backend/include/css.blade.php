<head>
    <meta charset="utf-8" />
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Blog" name="description" />
    <meta content="Blog" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- pusher app -->
    @vite(['resources/js/app.js'])

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('adminpanel/image/banglareads.png') }}">

    <!-- C3 Chart css -->
    <link href="{{ asset('adminpanel/assets/libs/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('adminpanel/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />

    <link href="{{ asset('adminpanel/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- select -->
    <link href="{{ asset('adminpanel/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"
        id="app-stylesheet" />
    <link href="{{ asset('adminpanel/assets/libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css" id="app-stylesheet" />

    <!-- Toaster Message -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    <!-- Data table -->
    <link href="{{ asset('adminpanel/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />


    <link href="{{ asset('adminpanel/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('adminpanel/assets/libs/switchery/switchery.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('adminpanel/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('adminpanel/assets/css/app.min.css') }}" rel="stylesheet" type="text/css"
        id="app-stylesheet" />

    <!-- Plugins css -->
    <link href="{{ asset('adminpanel/assets/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/assets/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('adminpanel/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">



    <!--summernote -->
    {{-- <link href="{{ asset('adminpanel/assets/libs/summernote/summernote-bs4.css') }}" rel="stylesheet"
        type="text/css" /> --}}
    <link href="{{ asset('adminpanel/assets/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet"
        type="text/css" />


    <!--font-->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <style>
        .hover-span {
            color: #333;
            transition: color 0.3s;
        }

        .hover-span:hover {
            color: #fa6400;
        }
    </style>

    <!-- animetion -->
    <link rel="stylesheet" href="{{ asset('adminpanel/assets/css/animetion.css') }}">
    <link rel="stylesheet" href="{{ asset('adminpanel/assets/css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
