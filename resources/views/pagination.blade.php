<link rel="stylesheet" type="text/css" href="{{ asset('/4.0.0/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome-4.7.0/css/font-awesome.min.css')}}">

@if ($paginator->hasPages())
    <ul class="pager">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span><i class="fa fa-arrow-left"> Previous</i></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-arrow-left"> Previous</i> </a></li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"> Next <i class="fa fa-arrow-right"></i></a></li>
        @else
            <li class="disabled"><span>Next <i class="fa fa-arrow-right"></i></span></li>
        @endif
    </ul>
@endif