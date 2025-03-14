

<li class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
    <a href="/product/{{ $product['id'] }}" class="block p-6">
        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-64 object-cover rounded-t-lg">
        <div class="p-4">
            <h2 class="text-xl font-bold text-gray-900">{{ $product['name'] }}</h2>
            <p class="text-gray-600 mt-2">Category: <span class="font-semibold">{{ $product['category'] }}</span></p>
            <p class="text-gray-600 mt-2">EAN: <span class="font-semibold">{{ $product['ean'] }}</span></p>
            <p class="text-gray-700 mt-4">{{ $product['description'] }}</p>

            <x-products.productprice :price="$product['price']" :saleprice="$product['saleprice']" />
        </div>
    </a>
</li>
