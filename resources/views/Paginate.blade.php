<nav aria-label="Page navigation" class="mt-5">
    @if ($paginator->lastPage() > 1)

        <ul class="pagination">
            <li class="page-item ">
                @if($paginator->currentPage() == 1)
                    <a href="#" class="fas fa-arrow-right" onclick="return false"></a>
                @else
                    <a href="{{ $paginator->currentPage()-1 }}" class="fas fa-arrow-right"></a>
                @endif

            </li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endfor
            <li class=" page-item ">
                @if($paginator->currentPage() == $paginator->lastPage())
                <a href="#" class="fas fa-arrow-left" onclick="return false"></a>
                @else
                    <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="fas fa-arrow-left"></a>
                @endif
            </li>
        </ul>

    @endif
</nav>