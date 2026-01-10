@props(['position' => 'bottom', 'title'])

<div x-data="{ open: false }">
    <button type="button" x-ref="button" x-on:click="open = !open" class="px-3 py-2 hover:bg-gray-100 rounded-md">
        <span>
            {{ $title }}
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 inline-block">
            <path fill-rule="evenodd"
                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <ul x-show="open" x-anchor.{{ $position }}.offset.10="$refs.button"
        class="shadow-lg border border-gray-200 p-2 rounded-md bg-white">
        {{ $slot }}
    </ul>
</div>
