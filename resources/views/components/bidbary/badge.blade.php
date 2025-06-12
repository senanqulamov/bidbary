@props(['type' => 'live'])

@php
    $colors = [
        'live' => 'bg-green-600',
        'ended' => 'bg-gray-600',
        'featured' => 'bg-purple-600',
    ];
@endphp

<span class="px-2 py-0.5 text-xs text-white font-semibold rounded-full {{ $colors[$type] ?? 'bg-gray-500' }}">
    {{ strtoupper($type) }}
</span>
