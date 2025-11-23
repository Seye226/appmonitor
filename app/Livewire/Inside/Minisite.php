<?php

namespace App\Livewire\Inside;

use Livewire\Component;

use App\Models\Site;
use App\Models\Topic;

class Minisite extends Component
{

        // public $icon_model_size = '15';
        // public $icon_model_size = '10';
    public $icon_model_size = '48';

    // public $icon_sub_size = "10";
    public $icon_sub_size = "8";
    // public $icon_sub_size = "6";

    public $type;

    // public $site;
    public $mini_site;
    // public $mini_site_id;

    public $topics;

    public $data_points;
    public function mount()
    // public function mount($mini_site)
    // public function mount($mini_site_id)
    {
        // $this->mini_site = Site::find($mini_site_id);

        $this->topics = Topic::all();

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
