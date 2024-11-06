<div>
    <h1>Counter</h1>
    <div>Count: {{ $count }}</div>
    <input type="number" wire:model.blur='number' />
    <button wire:click="minusCount">Minus</button>
    <button wire:click="plusCount">Plus</button>
    <button wire:click="changeCount({{ $number }})">Change Count</button>
</div>
