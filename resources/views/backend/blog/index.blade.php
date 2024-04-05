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

            <div class="col-lg-12">
                <div class=" table-responsive">
                    <div class="card-box">
                        <table class="table m-0 table-colored-bordered table-bordered-primary dt-responsive nowrap"
                            id="datatable-buttons" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <h4 class="header-title"><a href="{{ route('blog.create') }}" class="btn btn-primary">Create
                                    New</a></h4>
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Date</th>
                                    <th style="width:20px !important;">Title</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key += 1 }}</th>
                                        <td style="color: black">{{ date('d M, Y', strtotime($item->published_at)) }}
                                        </td>
                                        <td style="color: black; width:20px !important;">
                                            {{ Str::words(ucfirst($item->title), 5, '...') }}
                                        </td>
                                        <td style="color: black ">
                                            {{-- <img
                                                src="{{ asset($item->image) ?? asset('adminpanel/image/no_image.jpg') }}"
                                                style="width: 80px;height:50px; boject-fit:fill;"> --}}
                                        </td>
                                        <td>
                                            {!! Str::words($item->content, 20, '...') !!}
                                        </td>

                                        <td>
                                            @if ($item->status == 1)
                                                <p class="badge badge-pill badge-success">active</p>
                                            @else
                                                <p class="badge badge-pill badge-danger">inactive</p>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('blog.edit', $item->id) }}" class="btn btn-primary btn-sm"
                                                title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('blog.show', $item->id) }}" class="btn btn-info btn-sm"
                                                title="Edit"><i class="fa fa-eye"></i></a>
                                            <form action="{{ route('blog.destroy', $item->id) }}" method="post" class="py-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- container -->

    </div> <!-- content -->
@endsection
