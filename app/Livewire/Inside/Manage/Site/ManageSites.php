<?php

namespace App\Livewire\Inside\Manage\Site;

use Livewire\Component;

use App\Models\Site;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageSites extends Component
{
    public $count;

    public $thesearch;
    public $sites;

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

        $this->sites = Site::all();
        // $this->sites = Site::where($clientId);

        return view('livewire.inside.manage.site.manage-sites')
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
