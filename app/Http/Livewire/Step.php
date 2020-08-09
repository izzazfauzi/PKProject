<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step extends Component
{
    public $steps = [];
    public $count = 0;

    public function increments() {
        if (!$this->steps) {
            $this->count = 0;
            $this->steps[] = $this->count++;
        }
        else {
            $this->steps[] = $this->count++;
        }
    }

    public function decrements($index) {
        unset($this->steps[$index]);
//        dd($this->steps);
    }

    public function render()
    {
        return view('livewire.step');
    }
}
