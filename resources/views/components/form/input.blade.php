@props([
'type' => 'text',
'name',
'label' => null,
'placeholder' => '',
'description' => null,
'id' => $name,
'value' => null
])

<div>
    @if ($label)
    <label for="{{ $id }}" class="block text-sm/6 font-medium text-blue-400">
        {{ $label }}
    </label>
    @endif

    <div class="mt-2">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}" @if ($description) aria-describedby="{{ $id }}-description" @endif {{ $attributes->merge(['class' =>
        'block w-full rounded-md bg-gray-900 px-3 py-1.5 text-base text-gray-100 outline-1 -outline-offset-1 outline-blue-400 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-400 hover:bg-gray-800 sm:text-sm/6'
    ]) }}>
    </div>

    @if ($description)
    <p class="mt-2 text-sm text-gray-500" id="{{ $id }}-description">
        {{ $description }}
    </p>
    @endif
</div>
