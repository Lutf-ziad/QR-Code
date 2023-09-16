<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome', [
            'clients' => Client::latest()->get(),
        ]);
    }
}
