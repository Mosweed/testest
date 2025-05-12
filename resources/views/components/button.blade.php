@props([
'variant' => "primary",
])

@php
$base = 'rounded-md px-3 py-1.5 text-sm/6 font-semibold focus:outline-2 focus:outline-offset-2 cursor-pointer';

$variants = [
'primary' => 'bg-blue-600 text-white shadow-sm hover:bg-blue-800',
'secondary' => 'border border-gray-700 text-gray-500 hover:bg-white/10',
'link' => 'text-blue-400 hover:underline hover:text-blue-800 p-0 bg-transparent shadow-none focus:outline-none',
];

$classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
