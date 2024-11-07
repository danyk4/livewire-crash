<div>
    <h1>Bookmarks</h1>
    <p>User: {{ Auth::user()->name }}</p>
    <form wire:submit="save">
        <input type="text" wire:model="name">
        <input type="text" wire:model="url">
        <button type="submit">Save</button>
    </form>

    <div>
        @foreach(Auth::user()->bookmarks as $bookmark)
            <div wire:key="{{ $bookmark->id }}">
                <a href="{{ $bookmark->url }}">{{ $bookmark->name }}</a>
                <button wire:click="delete({{ $bookmark->id }})">Delete</button>
            </div>
        @endforeach
    </div>
</div>
