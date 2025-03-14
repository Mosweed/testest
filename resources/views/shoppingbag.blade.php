
<x-app-layout>
<div class="container mx-auto px-4 py-10">


    <x-slot:heading>
        🛒 Your Shopping Cart    </x-slot:heading>
    @if(empty($cart))
        <p class="text-gray-500">Your cart is empty. <a href="{{ url('/products') }}" class="text-blue-500 underline">Continue Shopping</a></p>
    @else
        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 text-left">
                        <th class="p-3">Product</th>
                        <th class="p-3">Price</th>
                        <th class="p-3">Quantity</th>
                        <th class="p-3">Subtotal</th>
                        <th class="p-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                        <tr class="border-t">
                            <td class="p-3 flex items-center">
                                <img src="{{ $item['image'] }}" class="w-16 h-16 rounded-lg mr-4">
                                <span class="font-semibold">{{ $item['name'] }}</span>
                            </td>
                            <td class="p-3 text-center text-gray-600">${{ number_format($item['price'], 2) }}</td>
                            <td class="p-3 text-center">

                                    <input type="number" name="quantity" value="1" min="1"
                                        class="w-16 border rounded-lg text-center p-1">
                                    <button type="submit" class="ml-2 text-blue-500 hover:underline">Update</button>

                            </td>
                            <td class="p-3 text-center text-gray-700 font-semibold">${{ number_format($item['price'] * 1, 2) }}</td>
                            <td class="p-3 text-center">

                                    <button type="submit" class="text-red-500 hover:underline">Remove</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Total Price -->
            <div class="flex justify-between items-center mt-6">
                <span class="text-xl font-semibold text-gray-700">Total: ${{ number_format($total, 2) }}</span>
                <div class="space-x-3">

                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                            Clear Cart
                        </button>

                    <button onclick="window.location.href='{{ route('checkout') }}'"  class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
</x-app-layout>
