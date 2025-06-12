@props(['amount', 'currency' => 'USD'])

<span class="text-sm font-semibold text-yellow-400">
    {{ number_format($amount, 2) }} {{ $currency }}
</span>
