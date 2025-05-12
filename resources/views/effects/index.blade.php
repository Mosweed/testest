<x-admin-layout>
    <x-table title="Effects" description="Manage all available effects"      :searchAction="route('effects.index')">
        <x-slot:actions>
            <a href="{{ route('effects.create') }}">
                <x-button>Add effect</x-button>
            </a>
        </x-slot:actions>

        <x-slot:head>
            <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-100 sm:pl-0">Name</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-100">Description</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-100">Color</th>
            <th scope="col" class="relative py-3.5 pr-4 pl-3 sm:pr-0"></th>
        </x-slot:head>

        <x-slot:slot>
            @foreach ($effects as $effect)
            <tr>
                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-100 sm:pl-0">{{ $effect->name}}</td>
                <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">{{ $effect->description }}</td>
                <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">
                    <div class="size-5 rounded-full" style="background-color: {{ e($effect->color) }}"></div>
                </td>
                <td class="relative py-4 pr-4 pl-3 text-right text-sm font-medium whitespace-nowrap sm:pr-0 space-x-2">
                    <div class="flex">
                        <form action="{{ route('effects.destroy', $effect) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button type="submit" class="text-red-500 hover:text-red-300" variant="link">Delete</x-button>
                        </form>
                        <a href="{{ route('effects.edit', $effect) }}">
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
                    {{ $effects->links('pagination::tailwind') }}
                </td>
            </tr>
        </x-slot:foot>


    </x-table>
</x-admin-layout>
