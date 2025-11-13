@if ($product->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($product->onFirstPage())
            <li class="disabled"><span>&laquo;</span></li>
        @else
            <li><a href="{{ $product->previousPageUrl() }}" class="page-link-ajax">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($product->links()->elements[0] as $page => $url)
            @if ($page == $product->currentPage())
                <li class="active"><span>{{ $page }}</span></li>
            @else
                <li><a href="{{ $url }}" class="page-link-ajax">{{ $page }}</a></li>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($product->hasMorePages())
            <li><a href="{{ $product->nextPageUrl() }}" class="page-link-ajax">&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
    </ul>
@endif