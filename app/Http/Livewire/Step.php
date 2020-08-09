<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step extends Component
{
    public $steps = 0;

    public function increments() {
        $this->steps++;
    }

    public function decrements() {
        $this->steps--;
    }

    public function render()
    {
        return view('livewire.step');
    }
}
