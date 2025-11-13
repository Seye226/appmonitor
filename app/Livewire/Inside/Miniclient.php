<?php

namespace App\Livewire\Inside;

use Livewire\Component;

use App\Models\client;
use App\Models\Topic;

class Miniclient extends Component
{

    // public $client;
    public $mini_client;
    // public $mini_client_id;

    public $topics;

    public $data_points;
    public function mount()
    // public function mount($mini_client)
    // public function mount($mini_client_id)
    {
        // $this->mini_client = client::find($mini_client_id);

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

        return view('livewire..inside.miniclient');
    }
}
