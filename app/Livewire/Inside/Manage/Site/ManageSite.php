<?php

namespace App\Livewire\Inside\Manage\Site;

use Livewire\Component;

use App\Models\Site;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageSite extends Component
{
    public $count;

    public $thesearch;

    public $siteId;
    public $site;
            public $pageType;

    // public function mount($siteId)
    public function mount($siteId,$pageType)
    {
        $this->siteId = $siteId;
        // $this->site = Site::find($siteId);
        $this->pageType = $pageType;

        // $this->site = Site::find($siteId);

        // dd("pageType",$pageType);
        // if ($pageType==="Edit") { //"site-view"
        if ($pageType==="Create") { //"site-view"
            # code...
            $this->site = new Site;

        }else {
            # code...
            $this->site = Site::find($siteId);

        }

    }

    public function render()
    {
        // return view('livewire.live-site');

        $this->count++;

        return view('livewire.inside.manage.site.manage-site')
            ->layout('layouts.app');


    return view('livewire.live-site')
        ->layout('layouts.app')
        ->slot('sites');


    }
}
