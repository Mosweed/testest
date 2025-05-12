<x-admin-layout>
    <div class="max-w-xl mx-auto mt-8 px-8 py-6 rounded-lg shadow-lg bg-gray-800">
        <h2 class="font-semibold text-2xl text-gray-100 leading-tight">Create New Effect</h2>
        <form method="PUT" action="{{ route('effects.store') }}" class="space-y-6">
            @csrf
            <x-form.input name="name" label="Name" placeholder="Effect name" />
            <x-form.input name="description" label="Description" placeholder="Short description" />
            <x-form.input class="h-10" name="color" label="Color" type="color" />
            <div class="flex justify-end space-x-2">
                <a href="{{ route('effects.index') }}">
                    <x-button type="button" variant="secondary">Cancel</x-button>
                </a>
                <x-button type="submit">Create Effect</x-button>
            </div>
        </form>
    </div>
</x-admin-layout>
