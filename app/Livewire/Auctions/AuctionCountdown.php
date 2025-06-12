<?php

namespace App\Livewire\Auctions;

use Livewire\Component;

class AuctionCountdown extends Component
{
    public string $title;
    public string $image;
    public float $currentBid;
    public string $endTime;

    public function render()
    {
        return view('livewire.auctions.auction-card');
    }
}
