@if ($paginator->hasPages())

    <ul>
        @foreach ($elements as $element)
            {{--"Three Dots" Separator--}}
            @if (is_string($element))
                <li class="blog_dot">
                    <div></div>
                    {{ $element }}{{ __('.') }}
                </li>
            @endif

            {{--Array Of Links--}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="blog_dot active">
                            <div></div>
                            {{ $page }}{{ __('.') }}
                        </li>
                    @else
                        <li class="blog_dot">
                            <div></div>
                            <a class="page-links" href="{{ $url }}">{{ $page }}{{ __('.') }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>

@endif
