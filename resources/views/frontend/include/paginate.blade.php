<ul class="pagination justify-content-center pb-2">
    @if ($blog->previousPageUrl())
        <li class="prev active">
            <a href="{{ $blog->previousPageUrl() }}" aria-label="Previous" tabindex="-1">
                <i class="w-icon-long-arrow-left"></i>Prev
            </a>
        </li>
    @endif
    <li class="page-item {{ $blog->currentPage() == 1 ? ' active' : '' }}">
        <a class="page-link" href="{{ $blog->url(1) }}">1</a>
    </li>
    @for ($i = max(2, $blog->currentPage() - 2); $i <= min($blog->lastPage(), $blog->currentPage() + 3); $i++)
        <li class="page-item {{ $blog->currentPage() == $i ? ' active' : '' }}">
            <a class="page-link" href="{{ $blog->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    @if ($blog->nextPageUrl())
        <li class="next">
            <a href="{{ $blog->nextPageUrl() }}" aria-label="Next" class="active">
                Next<i class="w-icon-long-arrow-right"></i>
            </a>
        </li>
    @endif
</ul>
