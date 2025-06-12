<button {{ $attributes->merge(['class' => 'px-4 py-2 text-white bg-red-600 hover:bg-red-700 rounded-2xl text-sm font-medium transition']) }}>
    {{ $slot }}
</button>
