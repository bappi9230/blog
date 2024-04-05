@extends('backend.dashboard')
@section('admin')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">New Book</h4>
                    </div>
                </div>
            </div>


            <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <!--============== left card ==============-->
                    <div class="col-12 col-sm-8">
                        <div class="card-box">

                            @include('backend.include.error')
                            <div class="row">
                                <!--Date-->
                                <div class="col-md-12">
                                    <!-- Date -->
                                    <div class="form-group">
                                        <label for="inputEmail4" class="col-form-label">Date <span
                                                style="color:red">*</span></label>
                                        <input type="text" name="published_at" class="form-control"
                                            value=" {{ date('Y-m-d h:i A') }}" readonly>
                                    </div>
                                </div>
                                <!--title_en-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail4" class="col-form-label">Blog Title<span
                                                style="color:red">*</span></label>
                                        <input type="text"
                                            class="form-control @error('title') is-invalid @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Blog title" name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span> <br><br>
                                        @enderror
                                    </div>
                                </div>
                                <!-- long description-->
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="col-form-label">Blog content
                                            </label>
                                        </div>
                                    </div>
                                    <textarea id="summernote3" name="content"> {{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="text-danger">{{ $message }}</span> <br><br>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </div>
                    </div>
                    <!--================== Right card =================-->
                    <div class="col-12 col-sm-4">
                        <div class="card-box text-center">
                            <h4 class="page-title">Upload Your Book Image</h4><br>
                            <input type="file" name="image" class="text-center" id="image"
                                value="{{ old('image') }}">
                            <hr>
                            <div class="row pl-3" id="showImage"></div>
                            @error('image')
                                <br><br>
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div> <!-- end row-->
            </form>
        </div>
    </div>
    <!-- submit button -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader()
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result).width(100).height(100);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>
@endsection
