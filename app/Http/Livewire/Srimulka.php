<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Srimulka extends Component
{
    public $undangan;
    public function mount($undangan)
    {
    }
    public function render()
    {
        // dd($this->undangan);
        return view('livewire.srimulka', ['tamu' => $this->undangan]);
    }
}
