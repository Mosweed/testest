<aside class="w-64 bg-gray-800 shadow-lg flex flex-col">
    <div class="p-6 border-b border-gray-700">
        <h1 class="text-xl font-bold text-blue-400">Metropolis </h1>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-4">
        @php
        $active = fn($route) => request()->routeIs($route)
        ? 'bg-gray-700 text-blue-400 font-semibold'
        : 'hover:bg-gray-700 text-gray-300';
        @endphp

        <a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded {{ $active('dashboard') }}">
            Dashboard</a>

        <a href="{{ route('simulation.index') }}" class="block px-3 py-2 rounded {{ $active('simulation.index') }}">
            Simulation</a>

        <a href="{{ route('effects.index') }}" class="block px-3 py-2 rounded {{ $active('effects.index') }}">
            Effects</a>

            <a href="{{ route('districts.index') }}" class="block px-3 py-2 rounded {{ $active('districts.*') }}">
            Districts</a>


    </nav>
</aside>
