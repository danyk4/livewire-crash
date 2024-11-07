<div>
    <form wire:submit='submit'>
        <div>
            <label for="count">Bird Count</label>
            <input type="number" wire:model='count'>
            @error('count')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="notes">Notes</label>
            <textarea wire:model="notes"></textarea>
            @error('notes')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button>Add A New Bird Count Entry</button>
    </form>

    <div>
        @foreach($entries as $entry)
            <div wire:key="{{ $entry->id }}" wire:transition>
                <p>{{ $entry->bird_count }} bird(s) - {{ $entry->notes }} <span><button wire:click="delete({{ $entry->id }})">Delete</button></span></p>
            </div>
        @endforeach
    </div>
</div>
