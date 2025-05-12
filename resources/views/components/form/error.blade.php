@if ($errors->any())
<div class="mt-5 rounded-md bg-red-50 p-4 border border-red-200">
    <div class="flex">
        <div class="flex-shrink-0">
            <x-lucide-circle-alert class="text-red-500 size-5 mt-0.5" />
        </div>
        <div class="ml-3 text-sm text-red-700 space-y-1">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
</div>
@endif
