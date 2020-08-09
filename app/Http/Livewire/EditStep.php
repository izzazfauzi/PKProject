<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Step;

class EditStep extends Component
{
    public $steps = [];

    public function mount($steps) {
        $this->steps = $steps->toArray();
    }

    public function increments() {
        $this->steps[] = count($this->steps);
    }

    public function decrements($index) {
        $step = $this->steps[$index];
        if (isset($step['id'])) {
            Step::find($step['id'])->delete();
        }
        unset($this->steps[$index]);
    }

    public function render()
    {
        return view('livewire.edit-step');
    }
}
