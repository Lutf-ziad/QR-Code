<?php

namespace App\Livewire;

use App\Models\Client as ModelsClient;
use Livewire\Component;

class Client extends Component
{
    public $name;
    public $email;

    public function submit()
    {
        $this->validate([
            'name'    => 'required',
            'email' => 'required|email',
        ]);

        $StoreClient = ModelsClient::create([
            'name'              => $this->name,
            'email'             => $this->email,
        ]);
        $this->name = '';
        $this->email      = '';
        session()->flash('message', 'You have successfully joined us 😁');
        return redirect(route('home'));
    }

    
    public function render()
    {
        $clients = ModelsClient::latest()->get();

        return view('livewire.client', [
            'clients' => $clients,
        ]);
    }
}
