@props(['name'])

<dialog x-data x-ref="modal" x-on:show-{{ $name }}.window="$refs.modal.showModal()"
    class="border border-gray-200 rounded-md shadow-xl mx-auto my-auto max-w-lg w-full min-h-56 p-4">
    <button type="button" x-on:click="$refs.modal.close()"
        class="absolute right-2.5 top-2.5 text-current/65 hover:text-current/90 hover:scale-150 transition-all duration-300 ease-in-out rounded-lg cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6">
            <path
                d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
        </svg>
    </button>

    <div>
        {{ $slot }}
    </div>
</dialog>
