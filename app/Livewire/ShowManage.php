<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Superviseur;

class ShowManage extends Component
{

    public $type;
    // public $type = '';

    public $search = '';
    public $searchTerm = '';

    public $searchTermList = [
        'All',
        'Standard',

        // 'reference',
        // 'description',
        // 'localisation',

        'firstname',
        'lastname',
        'pseudo',
        'adresse',
        'telephone',
    ];


    public $superviseurs;
    // public $superviseurs=[];
    
    public function mount()
    {
        // $this->superviseurs = \App\Models\Superviseur::all();

        $this->updatedSearch();
    }

    public function updatedSearch()
    {   
        // if ($this->search == '') {
        //     # code...

        //     $this->superviseurs = \App\Models\Superviseur::all();

        // }else {
            # code...


            // $this->superviseurs = \App\Models\Superviseur::where('description', 'like', '%' . $this->search . '%')
            //     ->orWhere('reference', 'like', '%' . $this->search . '%')
            //     ->orWhere('localisation', 'like', '%' . $this->search . '%')
            //     ->get();

            if ($this->searchTerm == 'All' || $this->searchTerm == '') {

                $this->superviseurs = \App\Models\Superviseur::where('firstname', 'like', '%' . $this->search . '%')
                    ->orWhere('lastname', 'like', '%' . $this->search . '%')
                    ->orWhere('pseudo', 'like', '%' . $this->search . '%')
                    ->orWhere('adresse', 'like', '%' . $this->search . '%')
                    ->orWhere('telephone', 'like', '%' . $this->search . '%')
                    ->get();

            }
            elseif ($this->searchTerm == 'Standard') {

                $this->superviseurs = \App\Models\Superviseur::where('firstname', 'like', '%' . $this->search . '%')
                    ->orWhere('lastname', 'like', '%' . $this->search . '%')
                    ->orWhere('pseudo', 'like', '%' . $this->search . '%')
                    ->get();

            }else {

                $this->superviseurs = \App\Models\Superviseur::where($this->searchTerm, 'like', '%' . $this->search . '%')
                    ->get();
                    
            }

            
        // }
    }

    public function render()
    {

        return view('livewire.show-manage');


    }
}
