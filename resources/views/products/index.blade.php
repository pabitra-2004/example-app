<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#E9F2F3] w-full">
    <div class="p-6">
        <div class="flex justify-between items-center mb-5">
            <h1 class="font-bold mb-5 text-2xl">Products</h1>
            <button type="button" class="px-3 py-1 text-white font-semibold bg-indigo-500 rounded flex items-center justify-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6">
                    <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                </svg>

                Add New Product
            </button>
        </div>

        <div class="grid grid-cols-4 gap-6">
            @foreach ($products as $product)
            <div class="max-w-sm bg-gray-100 border border-gray-500  rounded-md space-y-2 shadow-md">
                <a href="#">
                    <img class="rounded-t-md" src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="" />
                </a>
                <div class="p-3.5">
                    <p class=" text-lg text-gray-800 font-bold tracking-tight capitalize mb-2">{{ $product->name }}</p>
                    <p class="text-sm text-gray-600 place-self-auto place-items-stretch text-justify mb-1">{{ $product->description }}</p>
                    <div class="flex justify-between mb-2 items-center">
                        <span class="text-xl text-gray-900 font-bold">₹{{ $product->price }}</span>
                        <span class="text-sm text-gray-700 font-medium">Last Update - {{ $product->updated_at->diffForHumans() }}</span>
                    </div>

                    <div class="grid grid-cols-2 overflow-hidden divide-x-4 gap-2 divide-gray-900">
                        <button type="button" class="flex items-center justify-center gap-1 font-semibold px-2 py-1 rounded text-white bg-blue-600"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor" class="size-5 inline-block">
                                <path
                                    d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                <path
                                    d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                            </svg>
                            Edit
                        </button>

                        <form action='{{ url("/products/{$product->id}") }}' method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="flex items-center justify-center gap-1 font-semibold px-2 py-1 rounded text-white bg-rose-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-5 inline-block">
                                    <path fill-rule="evenodd"
                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Delete
                            </button>
                        </form>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>

</body>

</html>