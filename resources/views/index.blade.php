<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Component Practice</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-6">

    {{-- * Alert component --}}
    <x-alert type="danger" message="Thsi is a normal a danger" />
    <x-alert type="warning" message="This is a dismissable warning." dismissable />
    <x-alert type="warning" message="This is a dismissable and auto dismissable warning." dismissable
        auto-dismissable />
    <x-alert type="success" message="This is a dimissable, auto dismissable with dely time success " dismissable
        auto-dismissable auto-dismiss-delay="5000" />

    <hr class="my-4">

    {{-- * Accordion component --}}
    <div x-data="{
        showId: null,
    }">
        <div class="m-auto accordion">
            <x-accordionx id="1" title="Accordion Item #1" />
            <x-accordionx id="2" title="Accordion Item #2" />
            <x-accordionx id="3" title="Accordion Item #3" />
            <x-accordionx id="4" title="Accordion Item #4" />
            <x-accordionx id="5" title="Accordion Item #" />
        </div>
    </div>

    <div class="w-3xl mx-auto my-20">

        {{-- accordion component --}}
        <div x-data="{
            show: false,
        }" class="border border-gray-300 rounded overflow-hidden">
            {{-- accordion item --}}
            <div>
                <h2 class="accordion-header">
                    <button type="button" x-on:click="show = !show"
                        class="flex items-center justify-between w-full p-4 text-left bg-gray-100 border border-gray-200">
                        Accordion Item #1

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 transition duration-300 ease-in-out" :class="{ '-rotate-180': show }">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </h2>
                <div x-show="show" x-collapse.duration.1000ms>
                    <div class="p-4">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                        collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall
                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this
                        with
                        custom CSS or overriding our default variables. It's also worth noting that just about any HTML
                        can
                        go
                        within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="w-3xl mx-auto my-20">

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

    <hr class="my-4">

    <x-breadcrumb separator="/" :items="[['name' => 'Home', 'url' => '/'], ['name' => 'Library', 'url' => '/library'], ['name' => 'Data']]" />


    <hr class="my-4">

    {{-- * Modal component --}}
    <div x-data="{
        show: true,
    }">
        <button x-on:click="show = !show"
            class="px-6 py-2 font-semibold text-white transition-all duration-300 ease-in-out bg-blue-600 rounded-lg shadow-lg cursor-pointer hover:bg-blue-700">Modal</button>

        <div x-show="show" x-transition
            class="flex flex-col items-center justify-center p-4 space-y-6 bg-gray-300 rounded-lg shadow-lg w-xs">
            <div class="w-full text-2xl font-bold tracking-normal text-center text-gray-800 form-header">Login Form
            </div>
            <div class="flex flex-col w-full space-y-2 form-body">
                <input type="text"
                    class="w-full px-2.5 py-1 border rounded placeholder:font-medium text-sm focus:outline-none"
                    placeholder="Enter the email">
                <input type="password" class="w-full rounded border px-2.5 py-1 focus:outline-none"
                    placeholder="Enter the password">
            </div>
            <div class="flex justify-end w-full gap-4 font-semibold text-white">
                <input type="reset" value="Close"
                    class="px-5 py-1.5  bg-yellow-600 rounded-lg shadow-lg cursor-pointer hover:bg-yellow-700">
                <input type="submit" value="Login"
                    class="px-5 py-1.5  bg-blue-600 rounded-lg shadow-lg cursor-pointer hover:bg-blue-700">
            </div>
        </div>
    </div>



</body>

</html>
