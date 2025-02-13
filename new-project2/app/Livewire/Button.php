<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Redirect; // Import this line

class Button extends Component
{
    public $isVisible = false;

    // Listen for the 'toggleButton' event emitted from the OpenBar component
    protected $listeners = ['toggleButton' => 'updateVisibility'];

    public function updateVisibility($isOpen)
    {
        // Update the visibility state based on the emitted value
        $this->isVisible = $isOpen;
    }
    public function toHome(){
        return Redirect::route('home');
    }
public function toContact(){
    return Redirect::route('Contact');
}
public function  toAbout(){
    return Redirect::route('About');
}
public function toService(){
    return Redirect::route('Service');
}
    public function render()
    {
        return view('livewire.button');
    }

}
