<x-modals.modal wire:model="showBidModal">
    <div class="text-lg font-semibold text-white mb-4">Confirm Your Bid</div>
    <div class="text-sm text-gray-300 mb-4">
        You're bidding <x-bidbary.price-tag :amount="$amount" currency="USD" />
    </div>
    <div class="flex justify-end gap-2">
        <x-buttons.secondary-button wire:click="$set('showBidModal', false)">Cancel</x-buttons.secondary-button>
        <x-bidbary.bid-button wire:click="submitBid">Confirm Bid</x-bidbary.bid-button>
    </div>
</x-modals.modal>
