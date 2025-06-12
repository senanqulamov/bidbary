@props([
    'title',
    'image',
    'currentBid',
    'endTime',
    'onClick' => null
])

<div class="rounded-2xl bg-gray-900 shadow p-4 hover:shadow-lg transition cursor-pointer w-64" @click="{{ $onClick }}">
    <img src="{{ $image }}" alt="{{ $title }}" class="rounded-xl w-full h-48 object-cover" />
    <div class="mt-4">
        <h3 class="text-lg font-semibold text-white">{{ $title }}</h3>
        <p class="text-sm text-gray-400">Current Bid: <span class="text-white">${{ $currentBid }}</span></p>
        <p class="text-xs text-gray-500">Ends: {{ \Carbon\Carbon::parse($endTime)->diffForHumans() }}</p>
    </div>
</div>
