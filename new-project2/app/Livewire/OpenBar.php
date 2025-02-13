<?php

namespace App\Livewire;

use Livewire\Component;

class OpenBar extends Component
{
    public $isOpen = false;

    public function toggle()
    {
        $this->isOpen = !$this->isOpen;

        // Emit an event to notify other components about the change
        // Here we use 'toggleButton' as the event name and pass the isOpen value
    }

    public function render()
    {
        return view('livewire.open-bar');
    }
}
