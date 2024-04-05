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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">User Profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title"><a href="{{ route('blog.edit', $post->id) }}"
                                    class="btn btn-primary">Edit
                                    blog</a></h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                <img src="{{ asset($post->image) ?? asset('adminpanel/image/no_image.jpg') }}"
                                                    class="avatar-lg img-thumbnail" alt="profile-image"
                                                    style="width: 300px;height:150px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-nowrap" scope="row">Date</th>
                                            <td>{{ $post->published_at }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-nowrap" scope="row">Title</th>
                                            <td>{{ $post->title }}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-nowrap" scope="row">Content</th>
                                            <td>{!! $post->content !!}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-nowrap" scope="row">Status</th>
                                            @if ($post->status == 1)
                                                <td>
                                                    <p class="badge badge-pill badge-success">active</p>
                                                </td>
                                            @else
                                                <td>
                                                    <p class="badge badge-pill badge-danger">inactive</p>
                                                </td>
                                            @endif

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- end row -->

    </div> <!-- end container-fluid -->
@endsection
