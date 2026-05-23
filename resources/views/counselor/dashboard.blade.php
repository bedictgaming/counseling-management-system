<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-700 leading-tight">
            {{ __('Counselor Case Portal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-2">Counselor Session Hub</h3>
                    <p class="text-gray-600">Hello, Counselor {{ auth()->user()->name }}. Review your pending cases, schedule availabilities, and securely write session notes here.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>