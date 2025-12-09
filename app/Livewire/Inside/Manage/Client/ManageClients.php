<?php

namespace App\Livewire\Inside\Manage\Client;

use Livewire\Component;

use App\Models\Client;

use Livewire\Attributes\Layout;

use App\Livewire\Forms\ClientForm;

// #[Layout('layouts.app') ]

class ManageClients extends Component
{
    public $count;

    public $thesearch;

    public $clients;

    public $modelclass;
    public ClientForm $modelformclass;
    public function mount(){

        $this->modelclass = Client::class;

    }


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
            dd('here Livewire.manageClients');
            // $this->manageCreateUserModal = true;
        }


}
