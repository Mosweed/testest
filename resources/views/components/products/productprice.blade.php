<div class="mt-4">
    @if($saleprice)
        <span class="text-lg text-red-500 font-bold">
            &euro;{{ number_format($saleprice, 2) }}
        </span>
        <span class="text-gray-500 line-through ml-2">
    @else
        <span class="text-lg text-gray-900 font-bold">

    @endif

        &euro;{{ number_format($price, 2) }}
    </span>
</div>
