<x-app-layout>
    <x-slot:heading>
        🛍️ Checkout Page
    </x-slot:heading>
    <div class="container mx-auto px-4 py-10">

        <div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">
            <form action="{{ route('thankyou') }}" method="POST">
                @csrf
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Shipping Address</h2>

                <div class="mb-4">
                    <label for="address" class="block text-gray-700 font-medium">Address</label>
                    <input type="text" id="address" name="address" required
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="zipcode" class="block text-gray-700 font-medium">Zip Code</label>
                    <input type="text" id="zipcode" name="zipcode" required
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="city" class="block text-gray-700 font-medium">City</label>
                    <input type="text" id="city" name="city" required
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <h2 class="text-xl font-semibold text-gray-800 mb-4">Payment Method</h2>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="payment_method" value="credit_card" required class="form-radio text-blue-500">
                        <span class="ml-2 text-gray-700">Credit Card</span>
                    </label>
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="payment_method" value="paypal" required class="form-radio text-blue-500">
                        <span class="ml-2 text-gray-700">PayPal</span>
                    </label>
                </div>

                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="payment_method" value="ideal" required class="form-radio text-blue-500">
                        <span class="ml-2 text-gray-700">iDEAL</span>
                    </label>
                </div>

                <div class="flex justify-between items-center border-t pt-4 mt-4">
                    <span class="text-xl font-semibold text-gray-700">Total Price:</span>
                    <span class="text-2xl font-bold text-green-600">${{ number_format($total,2) }}</span>
                </div>


                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">
                        Complete Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
