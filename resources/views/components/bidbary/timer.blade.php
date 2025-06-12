@props(['end'])

<div x-data="{
        end: new Date('{{ $end }}'),
        now: new Date(),
        timeLeft: '',
        update() {
            const diff = Math.max(0, this.end - new Date());
            const mins = Math.floor(diff / 60000);
            const secs = Math.floor((diff % 60000) / 1000);
            this.timeLeft = `${mins}m ${secs}s`;
        }
    }"
     x-init="update(); setInterval(update, 1000)"
     x-text="timeLeft">
</div>
