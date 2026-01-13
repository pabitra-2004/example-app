<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Component Practice</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-6">

    {{-- <hr class="my-2"> --}}
    {{-- * Accordion component --}}
    {{-- <h1 class="m-2 text-lg font-semibold text-center text-blue-500">Accordion component</h1> --}}
    {{-- ? Accordion component method 1 --}}
    {{-- <div x-data="{
        showId: null,
    }">
        <div class="m-auto accordion">
            <x-accordionx id="1" title="Accordion Item #1" />
            <x-accordionx id="2" title="Accordion Item #2" />
            <x-accordionx id="3" title="Accordion Item #3" />
            <x-accordionx id="4" title="Accordion Item #4" />
            <x-accordionx id="5" title="Accordion Item #" />
        </div>
    </div> --}}


    {{-- ? accordion component method 2 --}}
    <div class="mx-auto my-10 w-3xl">
        <x-accordion>
            <x-accordion.item title="Accordion Item #1">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>
            <x-accordion.item title="Accordion Item #2">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>
            <x-accordion.item title="Accordion Item #2">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>
            <x-accordion.item title="Accordion Item #2">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </x-accordion.item>
        </x-accordion>

    </div>



    {{-- <hr class="my-2"> --}}
    {{-- * Alert component --}}
    {{-- <h1 class="m-2 text-lg font-semibold text-center text-blue-500">Alert component</h1>
    <x-alert type="danger" message="Thsi is a normal a danger" />
    <x-alert type="warning" message="This is a dismissable warning." dismissable />
    <x-alert type="warning" message="This is a dismissable and auto dismissable warning." dismissable
        auto-dismissable />
    <x-alert type="success" message="This is a dimissable, auto dismissable with dely time success " dismissable
        auto-dismissable auto-dismiss-delay="5000" /> --}}



    <hr class="my-2">
    {{-- * Breadcrumb component --}}
    <h1 class="m-2 text-lg font-semibold text-center text-blue-500">Breadcrumb component</h1>
    <x-breadcrumb separator="/" :items="[['name' => 'Home', 'url' => '/'], ['name' => 'Library', 'url' => '/'], ['name' => 'Data']]" />



    <hr class="my-2">
    {{-- * dropdown component --}}
    <h1 class="m-2 text-lg font-semibold text-center text-blue-500 cursor-pointer">Dropdown component</h1>
    <x-dropdown position="bottom" title="Pabitra Das">
        <x-dropdown.item>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="inline-block size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            Account
        </x-dropdown.item>
        <x-dropdown.item>Profile</x-dropdown.item>
        <x-dropdown.item>Billing</x-dropdown.item>
        <x-dropdown.item>Logout</x-dropdown.item>
        <x-dropdown.item>Delete</x-dropdown.item>
    </x-dropdown>





    <hr class="my-2">
    {{-- * Modal component --}}
    <h1 class="m-2 text-lg font-semibold text-center text-blue-500">Modal component</h1>

    <div x-data="{
        open: false,
    }">
        <button x-on:click="open = !open"
            class="text-white bg-blue-600 hover:bg-blue-700  font-semibold rounded-lg text-sm px-4 py-2.5 shadow-lg cursor-pointer">
            Toggle modal
        </button>


        <div x-show="open" x-transition.duration.300ms class="fixed inset-0 z-50 flex items-center justify-center size-full bg-black/50">

            {{-- method 1 --}}
            {{-- <dialog class="">
            </dialog> --}}

            {{-- method 2 --}}
            <div class="p-8 overflow-x-hidden overflow-y-auto bg-gray-300 border border-gray-400 shadow-lg select-none w-md rounded-xl">
                <div class="flex items-center justify-between pb-3 border-b border-gray-400">
                    <h3 class="text-lg font-medium text-gray-900">
                        Sign in to our platform
                    </h3>
                    <button type="button" x-on:click="open = !open"
                        class="p-2 text-gray-700 transition-all duration-300 ease-in-out rounded-lg cursor-pointer hover:bg-gray-500 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path
                                d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                        </svg>
                    </button>
                </div>

                <form action="#" class="pt-6">
                    <div class="mb-4">
                        <label for="email" class="block mb-2.5 text-sm font-medium text-gray-900">Your
                            email</label>
                        <input type="email"
                            class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg  block w-full px-3 py-2.5 shadow-xs focus:outline placeholder:text-gray-600"
                            placeholder="example@gmail.com" required />
                    </div>

                    <div>
                        <label for="password" class="block mb-2.5 text-sm font-medium text-gray-900">Your
                            password</label>
                        <input type="password"
                            class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg  block w-full px-3 py-2.5 shadow-xs focus:outline placeholder:text-gray-600"
                            placeholder="•••••••••" required />
                    </div>

                    <div class="flex items-start my-6">
                        <div class="flex items-center">
                            <input id="checkbox-remember" type="checkbox"
                                class="w-4 h-4 bg-gray-100 border border-gray-400 rounded-xs">
                            <label for="checkbox-remember"
                                class="text-sm font-medium text-gray-900 select-none ms-2">Remember
                                me</label>
                        </div>
                        <a href="#" class="text-sm font-medium text-blue-700 ms-auto hover:underline">Forget
                            Password?</a>
                    </div>

                    <button type="submit"
                        class="text-white transition-all duration-300 ease-in-out bg-blue-600 border border-blue-800 hover:bg-blue-700 shadow-xs font-medium rounded-lg text-sm px-4 py-2.5 w-full mb-3">Login
                        to your account
                    </button>

                    <div class="text-sm font-medium text-gray-900">
                        Not registered?
                        <a href="#" class="text-blue-700 hover:underline">Create account</a>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <hr class="my-2">



</body>

</html>
