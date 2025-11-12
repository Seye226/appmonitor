<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Site;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class LiveSite extends Component
{
    public $count;

    public $thesearch;

    public $siteId;
    public $site;
    public function mount($siteId)
    {
        $this->siteId = $siteId;
        $this->site = Site::find($siteId);
    }

    public function render()
    {
        // return view('livewire.live-site');

        $this->count++;

        return view('livewire.live-site')
            ->layout('layouts.app');


    return view('livewire.live-site')
        ->layout('layouts.app')
        ->slot('sites');


    }
}
