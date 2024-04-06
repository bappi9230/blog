@foreach ($post as $item)
<div class="col-12">
    <div class="post-entry horizontal d-md-flex">
        <div class="media">
            <a href="#"><img src="{{ asset($item->image ?? 'frontend/blog.png') }}" alt="Image"
                    class="img-fluid"></a>
        </div>
        <div class="text">
            <h2><a href="#">{{ $item->title }}</a></h2>
            <div class="meta mb-0">
                {{ date('Y-m-d H:i:s', strtotime($item->published_at)) }}
                <span>&bullet;</span>
            </div>
            <p>{!! strip_tags(Str::words($item->content, 40, '...')) !!}
            <div> <a href="{{ route('post.details', $item->id) }}">read
                    more >></a></div>
        </div>
    </div>
</div>
@endforeach

<div class="col-12">
<div class="row">
    <div class="col-8"></div>
    <div class="col-4">
        <nav aria-label="Page navigation example text-right">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="{{ $post->previousPageUrl() }}"
                        aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $post->lastPage(); $i++)
                    <li class="page-item {{ $post->currentPage() == $i ? ' active' : '' }}">
                        <a class="page-link" href="{{ $post->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item">
                    <a class="page-link" href="{{ $post->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>
