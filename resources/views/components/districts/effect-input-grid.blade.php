@props(['effects', 'district' => null])

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($effects as $effect)
        @php
            $existing = $district?->effects->firstWhere('id', $effect->id);
            $value = old("effects.$loop->index.value", $existing?->pivot->value ?? 0);
        @endphp

        <div class="border border-gray-600 bg-gray-900 rounded p-3 shadow-sm">
            <label class="block font-medium text-white">{{ $effect->name }}</label>
            <input type="number"
                   name="effects[{{ $loop->index }}][value]"
                   class="mt-1 w-full px-3 py-1 border border-gray-600 bg-gray-800 text-white rounded focus:ring-orange-500 focus:border-orange-500"
                   value="{{ $value }}">
            <input type="hidden" name="effects[{{ $loop->index }}][id]" value="{{ $effect->id }}">
        </div>
    @endforeach
</div>
