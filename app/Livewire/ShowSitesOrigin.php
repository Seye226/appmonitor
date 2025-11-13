<?php

namespace App\Livewire;

use Livewire\Component;

class ShowSitesOrigin extends Component
{

    public $search = '';

    // public $sites;
    // public $sites=[];
    
    public function mount()
    {
        // $this->sites = \App\Models\Site::all();

        // $this->updatedSearch();
    }

    // public function updatedSearch()
    // {   
    //     // if ($this->search == '') {
    //     //     # code...

    //     //     $this->sites = \App\Models\Site::all();

    //     // }else {
    //         # code...
        
    //         $this->sites = \App\Models\Site::where('description', 'like', '%' . $this->search . '%')
    //             ->orWhere('reference', 'like', '%' . $this->search . '%')
    //             ->orWhere('localisation', 'like', '%' . $this->search . '%')
    //             ->get();
    //     // }
    // }

    public function render()
    {

        // return view('livewire.show-sites');

        // $sites = \App\Models\Site::all();

        $sites = \App\Models\Site::where('description', 'like', '%' . $this->search . '%')
            ->orWhere('reference', 'like', '%' . $this->search . '%')
            ->orWhere('localisation', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.show-sites', [
            'sites' => $sites,
        ]);

    }
}
