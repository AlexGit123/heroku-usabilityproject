<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="color: green">
                    You're logged in!
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/"> Visit the Home Page</a>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('fooeys.create')}}">Create a Fooey!</a>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/password-management">The Importance of Password Management</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
