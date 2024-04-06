@extends('frontend.main')
@section('content')
    <div class="section-latest pl-3" style="padding-top: 10px;">
        <div class="container">
            <div class="row gutter-v1 align-items-stretch mb-5">
                <div class="col-md-12" id="search">
                    @include('frontend.search')
                </div>
            </div>
        </div>
    </div>
@endsection
