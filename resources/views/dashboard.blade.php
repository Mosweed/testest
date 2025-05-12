<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12 min-h-screen bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 border border-gray-700 shadow-sm sm:rounded-lg p-6 text-gray-200 text-base">

                {{-- WELCOME --}}
                <div class="mb-6">
                    {{ __("Welcome to Metropolis") }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
