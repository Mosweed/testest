@props([
'name',
'label' => null,
'id' => $name,
'options' => [],
'selected' => null,
])

<div>
    @if ($label)
    <label for="{{ $id }}" class="block text-sm/6 font-medium text-blue-400">
        {{ $label }}
    </label>
    @endif

    <div class="mt-2 grid grid-cols-1 relative">
        <select id="{{ $id }}" name="{{ $name }}" {{ $attributes->merge(['class' =>
      'col-start-1 row-start-1 w-full appearance-none rounded-md bg-blue-600 py-1.5 pr-8 pl-3 text-base text-blue-400
      outline-1 -outline-offset-1 outline-blue-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-400 hover:bg-blue-800
      sm:text-sm/6'
      ]) }}>
            @foreach ($options as $value => $text)
            <option value="{{ $value }}" @if(in_array((string) $value, (array) $selected)) selected @endif>
                {{ $text }}
            </option>
            @endforeach
        </select>

        <x-lucide-chevron-down class="pointer-events-none absolute right-2 top-1/2 -translate-y-1/2 size-5 text-blue-400 sm:size-4" />
    </div>
</div>
