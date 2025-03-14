<x-app-layout>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>

    <div class="container mx-auto px-4 py-10">
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Neem contact met ons op</h2>

            <form action="#" method="POST" class="space-y-4">
                <!-- Naam -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                    <input type="text" id="name" name="name"
                        class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Email (verplicht) -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" required
                        class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Bericht (verplicht) -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Bericht <span class="text-red-500">*</span></label>
                    <textarea id="message" name="message" required rows="4"
                        class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Type Bericht (Select Box) -->
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Type bericht</label>
                    <select id="type" name="type"
                        class="w-full mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="Hulp">Hulp</option>
                        <option value="Sales">Sales</option>
                        <option value="Tips">Tips</option>
                    </select>
                </div>

                <!-- Verstuur Knop -->
                <div>
                    <button type="submit" disabled
                        class="w-full bg-gray-400 text-white py-2 px-4 rounded-lg cursor-not-allowed">
                        Versturen
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
