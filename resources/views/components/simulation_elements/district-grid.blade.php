@props(['groupedDistricts'])

@forelse($groupedDistricts as $category => $items)

    <div class="pt-4">
        <details class="group">
            <summary
                class="mb-2 font-medium text-white cursor-pointer flex items-center justify-between">
                <span> {{ $category }}</span>
                <svg class="w-4 h-4 transition-transform duration-300 group-open:rotate-180"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </summary>

            <div class="functionGrid grid grid-cols-3 gap-4 mt-2">
                @forelse ($items as $item)
                    <div draggable="true" data-effect-changes='@json(collect($item->effects)->mapWithKeys(fn($e) => [$e->name => $e->pivot->value]))'
                        class="fill transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex flex-col items-center justify-center px-3 py-2 mb-2 text-center rounded-lg shadow-sm border border-gray-600 bg-gray-800 text-white cursor-grab active:cursor-grabbing text-sm">
                        <div class="mb-1">
                            <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->name }}" class="w-8 h-8 object-contain">
                        </div>
                        <span>{{ $item->name }}</span>
                    </div>
                @empty
                    <li class="text-center text-sm text-gray-400 py-4">
                        No Districts available.
                    </li>
                @endforelse




            </div>
        </details>
    </div>

@empty
    <li class="text-center text-sm text-gray-400 py-4">
        No Districts available.
    </li>
@endforelse
