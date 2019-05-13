@if (count($breadcrumbs))

    <ul class="breadcrumb breadcrumb-4 justify-content-end">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url )
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">@if($loop->first)<i class="fas fa-home"></i>@else {{ $breadcrumb->title }} @endif</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ul>

@endif

