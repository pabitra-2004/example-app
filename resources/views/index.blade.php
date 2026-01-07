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
            <x-accordion id="1" title="Accordion Item #1" />
            <x-accordion id="2" title="Accordion Item #2" />
            <x-accordion id="3" title="Accordion Item #3" />
            <x-accordion id="4" title="Accordion Item #4" />
            <x-accordion id="5" title="Accordion Item #" />
        </div>
    </div>

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
