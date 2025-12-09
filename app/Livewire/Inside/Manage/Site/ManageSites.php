<?php

namespace App\Livewire\Inside\Manage\Site;

use Livewire\Component;

use App\Models\Site;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]


// use App\Livewire\Forms\SuperviseurForm;
use App\Livewire\Forms\SiteForm;
// use App\Livewire\Forms as FormObjs;
// use Livewire\Form;



class ManageSites extends Component
{
    public $count;

    public $thesearch;
    public $sites;

    public $modelclass;


    // public $modelformclass;
    public SiteForm $modelformclass;


    public function mount(){

        $this->modelclass = Site::class;

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
            dd('here FROM Livewire.ManageSites');
            // $this->manageCreateUserModal = true;
        }


}
