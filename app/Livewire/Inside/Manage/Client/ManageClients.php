<?php

namespace App\Livewire\Inside\Manage\Client;

use Livewire\Component;

use App\Models\Client;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageClients extends Component
{
    public $count;

    public $thesearch;

    public $clients;

    // public $clientId;
    // public $client;
    // public function mount($clientId)
    // {
    //     $this->clientId = $clientId;
    //     $this->client = Client::find($clientId);
    // }

    public function render()
    {
        // return view('livewire.live-client');

        $this->count++;

        $this->clients = Client::all();
        // $this->client = Client::where();

        return view('livewire.inside.manage.client.manage-clients')
            ->layout('layouts.app');


    return view('livewire.live-client')
        ->layout('layouts.app')
        ->slot('clients');


    }


        public function openManageCreateUserModal()
        {
            dd('here');
            // $this->manageCreateUserModal = true;
        }

        
}
