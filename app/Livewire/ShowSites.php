<?php

namespace App\Livewire;

use Livewire\Component;

class ShowSites extends Component
{

    public $search = '';

    // public $sites;
    public function mount()
    {
        // $this->sites = \App\Models\Site::all();
    }

    public function render()
    {
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
