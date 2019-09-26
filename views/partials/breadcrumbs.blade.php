@if (count($breadcrumbs) > 1)
    <nav aria-label="breadcrumb" class="breadcrumb m-0 p-0">
        <div class="container">
            <ol class="row breadcrumb padder mb-0">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url && !$loop->last)
                    <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                @else
                    <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                @endif

            @endforeach
        </ol>
        </div>
    </nav>
@endif
