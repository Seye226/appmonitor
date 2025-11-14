<?php

namespace App\Livewire;

use Livewire\Component;

class ShowSites extends Component
{
    public $viewoptionselected="Grid";
    public $viewoptions=[
        'Grid'=>"grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8",
        // 'Grid'=>"grid grid-cols-1 xl:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8",

        // 'List'=>"grid grid-cols-1 xl:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8",
        'List'=>"grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8",

        'Component'=>""
    ];

    public $type;

    public $search = '';
    public $searchTerm = '';

    public $client_id;

    public $searchTermList = [
        'All',
        'Standard',
        'reference',
        'description',
        'localisation',
    ];


    public $sites;
    // public $sites=[];
    
    public function mount()
    {
        // $this->sites = \App\Models\Site::all();

        $this->updatedSearch();
    }

    public function updatedSearch()
    {   
        // if ($this->search == '') {
        //     # code...

        //     $this->sites = \App\Models\Site::all();

        // }else {
            # code...


            // $this->sites = \App\Models\Site::where('description', 'like', '%' . $this->search . '%')
            //     ->orWhere('reference', 'like', '%' . $this->search . '%')
            //     ->orWhere('localisation', 'like', '%' . $this->search . '%')
            //     ->get();

            if ($this->searchTerm == 'All' || $this->searchTerm == '') {

                $this->sites = \App\Models\Site::where('description', 'like', '%' . $this->search . '%')
                    ->orWhere('reference', 'like', '%' . $this->search . '%')
                    ->orWhere('localisation', 'like', '%' . $this->search . '%')
                    ->get();

            }
            elseif ($this->searchTerm == 'Standard') {

                $this->sites = \App\Models\Site::where('description', 'like', '%' . $this->search . '%')
                    ->orWhere('reference', 'like', '%' . $this->search . '%')
                    ->orWhere('localisation', 'like', '%' . $this->search . '%')
                    ->get();

            }else {

                $this->sites = \App\Models\Site::where($this->searchTerm, 'like', '%' . $this->search . '%')
                    ->get();
                    
            }

            
        // }
    }

    public function render()
    {
        //         // dd($this->sites);
        //         // var_dump($this->sites);
        // $this->sites=$this->sites->where("client_id",$this->client_id);
        //     // $this->sites=$this->sites->where("client_id",$this->client_id)->get();

        // dd(Auth()->user());
        if ($this->client_id)
            $this->sites=$this->sites->where("client_id",$this->client_id);
        else {
            # code...
        }

        return view('livewire.show-sites');

            // $sites = \App\Models\Site::all();

        // $sites = \App\Models\Site::where('description', 'like', '%' . $this->search . '%')
        //     ->orWhere('reference', 'like', '%' . $this->search . '%')
        //     ->orWhere('localisation', 'like', '%' . $this->search . '%')
        //     ->get();

        // return view('livewire.show-sites', [
        //     'sites' => $sites,
        // ]);

    }
}
