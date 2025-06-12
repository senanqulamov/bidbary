<button {{ $attributes->merge(['class' => 'px-4 py-2 text-gray-800 bg-gray-100 hover:bg-gray-200 rounded-2xl text-sm font-medium transition']) }}>
    {{ $slot }}
</button>
