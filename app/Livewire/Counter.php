<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 3;
    public int $number;

    public function changeCount(int $number)
    {
        $this->count = $number;
    }

    public function plusCount()
    {
        $this->count++;
    }

    public function minusCount()
    {
        if ($this->count <= 0) {
            $this->count = 0;
        } else {
            $this->count--;
        }
    }
    public function render()
    {
        return view('livewire.counter');
    }


}
