@vite('resources/js/drag-and-drop.js')
@vite('resources/css/drag-and-drop.css')

<x-admin-layout>
    <div class="flex flex-col min-h-screen bg-gray-800 text-white">
        <!-- Topbar -->
        <div class="flex justify-between px-5 py-5 bg-gray-700 border-b border-gray-600">
            <div class="flex items-center">
                <div>{{ $title ?? __('Simulation') }}</div>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-3 py-1 text-sm text-blue-200 bg-blue-900 rounded">
                    Save
                </button>
            </div>
        </div>

        <!-- Main layout -->
        <div class="flex flex-1">
            <div class="relative flex justify-center flex-1">
                <div class="w-full max-w-4xl p-4">
                    <div id="drop-grid" class="grid grid-cols-1 gap-6 text-gray-300 text-lg">
                        <div class="flex flex-col items-center gap-6">
                            <!-- Dropzone grid -->
                            <div class="mainContainer">
                                <div class="layout">
                                    <div class="cityGrid">
                                        @for ($i = 0; $i < 12; $i++)
                                            <div class="empty item"></div>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <!-- Deadzone -->
                            <div class="deadzone">
                                🗑️
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->


            <aside class="w-[400px] shrink-0 flex flex-col bg-gray-800 border-l border-gray-700 text-white">
                <!-- Toggle Tabs -->
                <div class="flex">
                    <div id="tab-districts-btn"
                         class="flex-1 px-4 py-4 border-b border-gray-700 text-lg font-semibold text-orange-400 bg-gray-900 cursor-pointer hover:bg-gray-700 transition">
                        Districts
                    </div>
                    <div id="tab-effects-btn"
                         class="flex-1 px-4 py-4 border-b border-gray-700 text-lg font-semibold text-gray-300 cursor-pointer hover:bg-gray-700 transition">
                        Effects
                    </div>
                </div>

                <!-- Content -->
                <div class="flex-1 px-4 overflow-y-auto" style="max-height: calc(100vh - 100px);">
                    <!-- Districts Tab Content -->
                    <div id="tab-districts-content">
                        <x-simulation_elements.district-grid :grouped-districts="$groupedDistricts" />
                    </div>

                    <!-- Effects Tab Content -->
                    <div id="tab-effects-content" class="hidden">
                        

                    </div>
                </div>
            </aside>


        </div>


</x-admin-layout>
