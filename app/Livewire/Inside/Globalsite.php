<?php

namespace App\Livewire\Inside;

use Livewire\Component;

use App\Models\Site;

class Globalsite extends Component
{
    public $site_id;
    public $global_site;

    public function mount($site_id)
    {
        $this->site_id = $site_id;
        $this->global_site = Site::find($site_id);
    }

    public function render()
    {
        return view('livewire..inside.globalsite');
    }
}
