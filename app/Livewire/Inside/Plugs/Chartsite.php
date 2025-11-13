<?php

namespace App\Livewire\Inside\Plugs;

use Livewire\Component;

class Chartsite extends Component
{

    public $site_id;
    public function mount($site_id)
    {
        $this->site_id = $site_id;
    }

    public function render()
    {
        return view('livewire..inside.plugs.chartsite');
    }
}
