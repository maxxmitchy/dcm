<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Details extends Component
{
    public $name;

    public $email;

    public $address;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->address = auth()->user()->address;
    }

    public function render()
    {
        return view('livewire.details');
    }

    public function store()
    {
        auth()->user()->update(['name' => $this->name, 'email' => $this->email]);
    }
}
