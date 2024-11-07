<?php

namespace App\Livewire;

use Livewire\Component;

class Lazy extends Component
{
    public function mount()
    {
        sleep(1);
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <p>Loading critical info...</p>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.lazy');
    }
}
