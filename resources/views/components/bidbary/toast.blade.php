<div x-data="{ visible: true }" x-show="visible"
     x-init="setTimeout(() => visible = false, 4000)"
     class="fixed bottom-4 right-4 bg-gray-800 text-white px-4 py-2 rounded-lg shadow-lg z-50">
    {{ $message }}
</div>
