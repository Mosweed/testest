<x-admin-layout>

        <x-table title="District Overview" description="Manage available districts" :searchAction="route('districts.index')">
        <x-slot:actions>

        </x-slot:actions>
        <x-slot:head>
            <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-100 sm:pl-0">Image</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-100">Name</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-100">Category</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-100">Actions</th>
            <th scope="col" class="relative py-3.5 pr-4 pl-3 sm:pr-0"></th>
        </x-slot:head>

        <x-slot:slot>
            @foreach ($districts as $district)
            <tr>
                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-100 sm:pl-0">
                    @if($district->image_path)
                                <img src="{{ asset('storage/' . $district->image_path) }}"
                                     class="w-16 h-12 object-contain rounded shadow-sm" alt="image">
                            @else
                                <span class="text-gray-500 italic">No image</span>
                            @endif
                </td>
                <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">{{ $district->name }}</td>
                <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">{{ $district->category }}</td>
                <td class="relative py-4 pr-4 pl-3 text-right text-sm font-medium whitespace-nowrap sm:pr-0 space-x-2">
                    <div class="flex">
                       
                        <a href="{{ route('districts.edit', $district) }}">
                            <x-button variant="link">Edit</x-button>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </x-slot:slot>


        <x-slot:foot>
            <tr>
                <td colspan="4" class="py-4 pl-4 pr-3 text-sm font-medium whitespace-nowrap text-gray-100 sm:pl-0">
                    {{ $districts->links('pagination::tailwind') }}
                </td>
            </tr>
        </x-slot:foot>


    </x-table>

</x-admin-layout>
