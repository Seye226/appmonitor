<?php

namespace App\Livewire\Inside;

use Livewire\Component;

class Minisite extends Component
{

    // public $site;
    public $mini_site;

    public $data_points;
    public function mount()
    {

        $this->data_points = [
            "load_power",
            "grid_power",
            "pv_power",
            "battery_power",
        ];
        
    }

    public function render()
    {

        return view('livewire..inside.minisite');
    }
}
