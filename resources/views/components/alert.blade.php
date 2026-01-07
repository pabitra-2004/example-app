@php
    $classes = 'text-blue-500 bg-blue-100';

    if ($type === 'danger') {
        $classes = 'text-rose-500 bg-rose-100';
    } elseif ($type === 'warning') {
        $classes = 'text-yellow-500 bg-yellow-100';
    } elseif ($type === 'success') {
        $classes = 'text-green-500 bg-green-100';
    }
@endphp


<div x-data="{
    open: true,
    init() { @if ($autoDismissable) setTimeout(() => this.open = !open, {{ $autoDismissDelay }}) @endif }
}" x-show="open" x-transition
    class="px-4 py-2 mb-2 text-sm font-medium tracking-wide rounded-md flex justify-between items-center {{ $classes }}">

    {{ $message }}

    @if ($dismissable)
        <button x-on:click ="open =! open">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="cursor-pointer size-5">
                <path fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    @endif
</div>
