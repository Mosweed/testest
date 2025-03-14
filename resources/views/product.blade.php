<x-app-layout>
    <x-slot:heading>
        Product Overviews
    </x-slot:heading>




        <div class="container mx-auto px-4 py-10">
            <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 p-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div>
                        <img id="mainImage" class="w-full h-96 object-cover rounded-lg border"
                            src="{{ $product['image'] }}" alt="{{ $product['name'] }}">


                    </div>

                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">{{ $product['name'] }}</h1>
                        <p class="text-sm text-gray-500 mt-1">Category: <span class="font-semibold">{{ $product['category'] }}</span></p>


                        <div class="mt-4">
                            <span class="text-2xl font-bold text-red-600">${{ $product['saleprice'] }}</span>
                            <span class="text-sm line-through text-gray-400">${{ $product['price'] }}</span>
                        </div>

                        <p class="mt-2 text-green-600 font-semibold">In Stock</p>
                        <p class="mt-1 text-gray-500 text-sm">EAN: <span class="font-semibold">{{ $product['ean'] }}</span></p>

                        <p class="mt-4 text-gray-700 text-sm">{{ $product['description'] }}</p>

                        <div class="mt-5 flex items-center space-x-4">
                            <input type="number" min="1" value="1" class="w-16 border text-center rounded-lg p-2">

                            <button class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition">
                                Add to Cart
                            </button>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
