

 <x-admin-layout>
    <div class="mb-8">
        <div class="flex items-center gap-4">

            <div>
                <h1 class="text-3xl font-bold text-white">Edit District</h1>
                <p class="text-sm text-gray-400">Update this district's details</p>
            </div>
        </div>
    </div>

    <div class="bg-gray-800 shadow-md rounded-xl p-6 max-w-3xl mx-auto">
        <form action="{{ route('districts.update', $district) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT')

            <x-form.input name="name" label="Name" :value="old('name', $district->name)" />

            <div>
                <label for="category" class="block text-sm font-medium text-gray-300 mb-1">Category</label>
                <select name="category" id="category"
                    class="w-full border border-gray-600 bg-gray-900 text-white px-4 py-2 rounded @error('category') border-red-500 @enderror ">
                    <option value="">-- Select a category --</option>
                    @foreach (\App\Models\District::CATEGORIES as $category)
                        <option value="{{ $category }}"
                            {{ old('category', $district->category) === $category ? 'selected' : '' }}>
                            {{ $category }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>


              <x-form.input  placeholder="image file" type="file" name="image_path" label="Upload Image" :value="old('name', $district->image_path)" />

                @if ($district->image_path)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $district->image_path) }}" alt="Current image"
                            class="w-24 h-20 object-cover rounded shadow">
                    </div>
                @endif
            </div>

            <div>
                <x-districts.effect-input-grid :effects="$effects" :district="$district" />
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('districts.index') }}">
                    <x-button type="button" variant="secondary">Cancel</x-button>
                </a>
                <x-button type="submit">Update District</x-button>
            </div>
        </form>
    </div>


</x-admin-layout>
