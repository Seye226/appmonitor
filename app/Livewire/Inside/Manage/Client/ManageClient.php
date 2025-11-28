<?php

namespace App\Livewire\Inside\Manage\Client;

use Livewire\Component;

use App\Models\Client;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageClient extends Component
{
    public $count;

    public $thesearch;

    public $clientId;
    public $client;

        public $pageType;
    // public function mount($clientId)
    public function mount($clientId,$pageType)
    {
        $this->clientId = $clientId;
        $this->pageType = $pageType;

        // $this->client = Client::find($clientId);

        // dd("pageType",$pageType);
        // if ($pageType==="Edit") { //"client-view"
        if ($pageType==="Create") { //"client-view"
            # code...
            $this->client = new Client;

        }else {
            # code...
            $this->client = Client::find($clientId);

        }

    }


    public function render()
    {
        // return view('livewire.live-client');

        $this->count++;

        return view('livewire.inside.manage.client.manage-client')
            ->layout('layouts.app');


    return view('livewire.live-client')
        ->layout('layouts.app')
        ->slot('clients');


    }
}
