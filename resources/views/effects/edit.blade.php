<x-admin-layout>
    <div class="max-w-xl mx-auto mt-8 px-8 py-6 rounded-lg shadow-lg bg-gray-800">
        <h2 class="font-semibold text-2xl text-gray-100 leading-tight">Edit Effect</h2>
        <form method="POST" action="{{ route('effects.update', $effect) }}" class="space-y-6">
            @csrf
            @method('PUT')
            <x-form.input name="name" label="Name" placeholder="Effect name" :value="$effect->name" />
            <x-form.input name="description" label="Description" placeholder="Short description" :value="$effect->description" />
            <x-form.input class="h-10" name="color" label="Color" type="color" :value="$effect->color" />
            <div class="flex justify-end space-x-2">
                <a href="{{ route('effects.index') }}">
                    <x-button type="button" variant="secondary">Cancel</x-button>
                </a>
                <x-button type="submit">Save Changes</x-button>
            </div>
        </form>
    </div>
</x-admin-layout>
