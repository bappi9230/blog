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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Edit</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Blog</h4>
                    </div>
                </div>
            </div>


            <form method="POST" action="{{ route('blog.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row">
                    <input type="hidden" name="user_id" value="{{ $post->user_id }}">
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
                                            value=" {{ $post->published_at }}" readonly>
                                    </div>
                                </div>
                                <!--title-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail4" class="col-form-label">Title<span
                                                style="color:red">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Blog title Bn"
                                            name="title" value="{{ $post->title }}">
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
                                    <textarea id="summernote3" name="content"> {{ $post->content }}</textarea>
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
                            <input type="file" name="image" class="text-center" id="image">
                            <hr>
                            @if ($post->image)
                                <div class="row pl-3">
                                    <img src="{{ $post->image ? asset($post->image) : asset('adminpanel/image/no_image.jpg') }}"
                                        style="width: 150px;height:200px;object-fit:fill;">
                                </div>
                            @endif
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
