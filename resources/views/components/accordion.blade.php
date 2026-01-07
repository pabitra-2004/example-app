<div class="accordion-item group" :class="{ 'active': showId === {{ $id }} }">
    <button type="button" x-on:click="showId === {{ $id }} ? showId = null : showId = {{ $id }}"
        class="accordion-item-header">
        <span>{{ $title }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 icon">
            <path fill-rule="evenodd"
                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                clip-rule="evenodd" />
        </svg>
    </button>


    <div x-show="showId === {{ $id }}" x-collapse.duration.1000ms class="accordion-item-body">
        <strong>This is the first item’s accordion body.</strong> It is shown by default, until the collapse
        plugin adds the appropriate classes that we use to style each element. These classes control the
        overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
        this with custom CSS or overriding our default variables. It’s also worth noting that just about any
        HTML can go within the <code class="text-red-400">.accordion-body</code>, though the transition does
        limit overflow.
    </div>
</div>
