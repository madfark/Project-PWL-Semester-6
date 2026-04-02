@props(['title', 'value', 'color' => ''])

<div class="bg-[#fffaf3] border border-[#e0d3c2] p-5 rounded-lg shadow-sm">
    <p class="text-sm">{{ $title }}</p>
    <p class="text-2xl font-semibold {{ $color }}">
        {{ $value }}
    </p>
</div>