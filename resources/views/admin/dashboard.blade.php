<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-600 leading-tight">
            {{ __('Admin Control Center') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-2">System Analytics & Configurations</h3>
                    <p class="text-gray-600">Administrator access verified. You can monitor system statistics, register new counselor staff profiles, or review user auditing records across the system.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>