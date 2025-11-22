<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Superviseur;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class LiveManage extends Component
{
    public $count;

    public $thesearch;

    public $superviseurId;
    public $superviseur;
    public function mount($superviseurId)
    {
        $this->superviseurId = $superviseurId;
        $this->superviseur = Superviseur::find($superviseurId);
    }

    public function render()
    {
        // return view('livewire.live-client');

        $this->count++;

        return view('livewire.live-manage')
            ->layout('layouts.app');


    return view('livewire.live-manage')
        ->layout('layouts.app')
        // ->slot('clients');
        ->slot('manage');


    }




}
