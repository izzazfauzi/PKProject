<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step extends Component
{
    public $steps = [];

    public function increments() {
        $this->steps[] = count($this->steps) +1;
    }

    public function decrements($index) {
        unset($this->steps[$index]);
    }

    public function render()
    {
        return view('livewire.step');
    }
}
