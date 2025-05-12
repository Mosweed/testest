@props([
'searchAction' => null,
])


<div {{ $attributes }}>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-2xl font-semibold">{{ $title }}</h1>
            @if ($description)
                <p class="mt-2 text-sm text-gray-500">{{ $description }}</p>
            @endif
        </div>
        @if (isset($actions))
            <div class="space-x-2 mt-4 sm:mt-0 sm:ml-16 sm:flex-none flex">
                {{ $actions }}
            </div>
        @endif
    </div>

    <div class="mt-4">
        <form method="GET" action="{{ $searchAction ?? url()->current() }}" id="search-form">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search..."
                class="w-full sm:w-1/3 rounded-md bg-gray-800 border-gray-600 text-white placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
                id="search-input" />
        </form>
    </div>

    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            {{ $head }}
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @if ($slot->isEmpty())
                            <tr>
                                <td colspan="4" class="text-center py-4 font-semibold">No results found.</td>
                            </tr>
                        @endif
                        {{ $slot }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if (isset($foot))

                {{ $foot }}

    @endif
</div>
