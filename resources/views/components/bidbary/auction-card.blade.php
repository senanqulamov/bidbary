<div class="rounded-2xl bg-gray-800 p-4 shadow-md hover:shadow-lg transition">
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover rounded-xl mb-3">
    <h3 class="text-lg font-semibold text-white truncate">{{ $title }}</h3>
    <div class="text-sm text-gray-400 mb-1">Ends in: <x-bidbary.timer :end="$endTime" /></div>
    <div class="flex items-center justify-between mt-2">
        <x-bidbary.price-tag :amount="$currentBid" currency="USD" />
        <x-bidbary.badge :type="'live'" />
    </div>
</div>
