<?php


namespace App\Livewire\Inside\Manage\Superviseur;

use Livewire\Component;

use App\Models\Superviseur;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageSuperviseurs extends Component
{
    public $count;

    public $thesearch;
    public $superviseurs;

    public $modelclass;
    public function mount(){

        $this->modelclass = Superviseur::class;

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

        $this->superviseurs = Superviseur::all();
        // $this->superviseurs = Superviseur::find($clientId);

        return view('livewire.inside.manage.superviseur.manage-superviseurs')
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
