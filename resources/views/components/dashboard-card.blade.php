@props(['icon', 'title', 'value', 'color'])

<div class="p-4 rounded shadow-sm {{ $color }} flex items-center gap-4">
    <i class="{{ $icon }} text-2xl"></i>
    <div>
        <h4 class="text-sm font-semibold">{{ $title }}</h4>
        <p class="text-lg font-bold">{{ $value }}</p>
    </div>
</div>
