@extends('frontend.main')
@section('content')
    <figure class="post-media br-sm text-center">
        <img src="{{ asset($item->image ?? 'frontend/blog.png') }}" alt="Blog" width="630" height="500">
    </figure>


    <div class="container article">
        <div class="row justify-content-center align-items-stretch">

            <article class="col-lg-8 order-lg-2 px-lg-5">

                <div class="post-meta">
                    by <a href="#" class="post-author">{{ $post->user->name }}</a>
                    - <a href="#" class="post-date"> {{$post->published_at }}</a>
                    <a href="#" class="post-comment pl-3"><i class="w-icon-comments"></i><span class="">{{ count($post->comment) }}</span> Comments</a>
                </div>

                <p>{!! $post->content !!}</p>
                <div class="pt-5">
                    <h3 class="mb-5">{{ count($post->comment) }} comment</h3>
                    @foreach ($post->comment as $item)
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="{{ asset('adminpanel/no_image.jpg') }}" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>{{ $item->user?->name }}</h3>
                                <div class="meta">{{$item->commented_at }}</div>
                                <p>{{ $item->comment }}</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        @include('backend.include.error')
                        <form action="{{ route('post.comment.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="commented_at" value="{{ date('Y-m-d h:i A') }}">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="comment" id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary btn-md">
                            </div>

                        </form>
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection
