<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    public int $count;
    public string $notes;

    public function submit()
    {
        $this->validate([
            'count' => 'required|integer|min:1',
            'notes' => 'required|string|min:3',
        ]);

        Entry::create([
            //'bird_count' => $this->pull(count), // for each field, without $this->reset() at the end
            'bird_count' => $this->count,
            'notes'      => $this->notes,
        ]);

        $this->reset();
    }

    // this function is like __construct - initialize parameters
//    public function mount()
//    {
//        $this->count = 3;
//    }

    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::all(),
        ]);
    }
}
