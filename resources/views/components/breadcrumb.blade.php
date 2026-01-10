@props([
    'separator' => '>',
    'items',
])

<nav aria-label="breadcrumb">
    <ol class="inline-flex gap-2 items-center">
        @foreach ($items as $item)
            <li class="--breadcrumb-item">
                @isset($item['url'])
                    <a href={{ $item['url'] }}>{{ $item['name'] }}</a>
                @else
                    {{ $item['name'] }}
                @endisset
            </li>

            @if (!$loop->last)
                <li>&nbsp;{{ $separator }}&nbsp;</li>
            @endif
        @endforeach
    </ol>
</nav>
