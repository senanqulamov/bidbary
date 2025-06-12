<div x-data="{ show: @entangle($attributes->wire('model')) }"
     x-show="show"
     class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
     x-cloak>
    <div @click.away="show = false" class="w-full max-w-lg p-6 bg-white dark:bg-gray-900 rounded-2xl shadow-xl">
        {{ $slot }}
    </div>
</div>
