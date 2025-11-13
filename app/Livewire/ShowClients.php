<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Client;

class ShowClients extends Component
{

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


    public $clients;
    // public $clients=[];
    
    public function mount()
    {
        // $this->clients = \App\Models\Client::all();

        $this->updatedSearch();
    }

    public function updatedSearch()
    {   
        // if ($this->search == '') {
        //     # code...

        //     $this->clients = \App\Models\Client::all();

        // }else {
            # code...


            // $this->clients = \App\Models\Client::where('description', 'like', '%' . $this->search . '%')
            //     ->orWhere('reference', 'like', '%' . $this->search . '%')
            //     ->orWhere('localisation', 'like', '%' . $this->search . '%')
            //     ->get();

            if ($this->searchTerm == 'All' || $this->searchTerm == '') {

                $this->clients = \App\Models\Client::where('firstname', 'like', '%' . $this->search . '%')
                    ->orWhere('lastname', 'like', '%' . $this->search . '%')
                    ->orWhere('pseudo', 'like', '%' . $this->search . '%')
                    ->orWhere('adresse', 'like', '%' . $this->search . '%')
                    ->orWhere('telephone', 'like', '%' . $this->search . '%')
                    ->get();

            }
            elseif ($this->searchTerm == 'Standard') {

                $this->clients = \App\Models\Client::where('firstname', 'like', '%' . $this->search . '%')
                    ->orWhere('lastname', 'like', '%' . $this->search . '%')
                    ->orWhere('pseudo', 'like', '%' . $this->search . '%')
                    ->get();

            }else {

                $this->clients = \App\Models\Client::where($this->searchTerm, 'like', '%' . $this->search . '%')
                    ->get();
                    
            }

            
        // }
    }

    public function render()
    {

        return view('livewire.show-clients');

            // $sites = \App\Models\Client::all();

        // $sites = \App\Models\Client::where('description', 'like', '%' . $this->search . '%')
        //     ->orWhere('reference', 'like', '%' . $this->search . '%')
        //     ->orWhere('localisation', 'like', '%' . $this->search . '%')
        //     ->get();

        // return view('livewire.show-clients', [
        //     'clients' => $clients,
        // ]);

    }
}
