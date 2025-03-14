<x-app-layout>
    <x-slot:heading>
        Product Listings
    </x-slot:heading>

    <div class="max-w-6xl mx-auto py-10">
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($products as $product)
               <x-products.productcard :product="$product" />
            @endforeach
        </ul>
    </div>
</x-app-layout>
