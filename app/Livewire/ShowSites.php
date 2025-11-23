<?php

namespace App\Livewire;

use Livewire\Component;

class ShowSites extends Component
{
    // public $viewoptionselected="Grid";
    // public $viewoptionselected="Affiché en Ligne";
    public $viewoptionselected;
    public $viewoptions=[
        // 'Ligne'=>"grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8",
        //     // 'Ligne'=>"grid grid-cols-1 xl:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8",
        'Affiché en Ligne'=>"grid grid-cols-1 lg:grid-cols-2 gap-3 lg:gap-4 p-3 lg:p-4",

        //     // 'List'=>"grid grid-cols-1 xl:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8",
        // 'Colonne'=>"grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8",
        'Affiché en Colonne'=>"grid grid-cols-1 gap-3 lg:gap-4 p-3 lg:p-4",

        'Component'=>""
    ];

    // public $sub_title;
    public $sub_title='';
    
    public $type;

    public $search = '';
    public $searchTerm = '';

    public $client_id;
    public $superviseur_id;

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
        // dd("hey ici ShowSites mount");
        // $this->sites = \App\Models\Site::all();
        if ($this->type==="sites") {
            $this->viewoptionselected="Affiché en Ligne";
        }else {
            $this->viewoptionselected="Affiché en Colonne";
        }
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
        if ($this->client_id){
            $this->sites=$this->sites->where("client_id",$this->client_id);

            $this->sub_title="BY CLIENT";

        }
        // else {
        //     # code...
        // }
        // if ($this->superviseur_id && $this->client_id) {
        elseif ($this->superviseur_id && $this->client_id) {

            dd("hey ici superviseur_id AND client_id is not null: ".$this->superviseur_id);
            $this->sites=$this->sites->where("superviseur_id",$this->superviseur_id)->where("client_id",$this->client_id);
            $this->sub_title="BY CLIENT & SUPERVISEUR";

            # code...
        }
        elseif ($this->superviseur_id) {
            // dd("hey ici superviseur_id is not null: ".$this->superviseur_id);
            $this->sites=$this->sites->where("superviseur_id",$this->superviseur_id);
            $this->sub_title="BY SUPERVISEUR";

            # code...
        }
        else {
            // dd("hey ici superviseur_id is null");
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
