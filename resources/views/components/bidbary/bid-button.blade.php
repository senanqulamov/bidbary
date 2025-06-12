<button {{ $attributes->merge(['class' => 'px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-xl text-sm font-semibold transition']) }}>
    {{ $slot ?? 'Place Bid' }}
</button>
