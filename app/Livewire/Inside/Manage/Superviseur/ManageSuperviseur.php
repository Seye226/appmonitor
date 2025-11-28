<?php

namespace App\Livewire\Inside\Manage\Superviseur;

use Livewire\Component;

use App\Models\Superviseur;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageSuperviseur extends Component
{
    public $count;

    public $thesearch;

    public $superviseurId;
    public $superviseur;
            public $pageType;
    public $modelInputArray=[];

    // public function mount($superviseurId)
    public function mount($superviseurId,$pageType)
    {
        $this->superviseurId = $superviseurId;
        // $this->superviseur = Superviseur::find($superviseurId);
        $this->pageType = $pageType;

        // $this->superviseur = Superviseur::find($superviseurId);

        // dd("pageType",$pageType);
        // if ($pageType==="Edit") { //"superviseur-view"
        if ($pageType==="Create") { //"superviseur-view"
            # code...
            $this->superviseur = new Superviseur;
            // $this->superviseur = new Superviseur();
            // $this->superviseur = Superviseur::get();

            $this->modelInputArray=$this->superviseur->getFillable();

        }else {
            # code...
            $this->superviseur = Superviseur::find($superviseurId);

            $this->modelInputArray=$this->superviseur->toArray();

        }

        //     // dd("this->superviseur->getFillable()",$this->superviseur->getFillable(),$this->superviseur->toArray());
        //     // $this->modelInputArray=$this->superviseur->getFillable();
        // $this->modelInputArray=$this->superviseur->toArray();
        // dd($this->modelInputArray,$this->superviseur,$this->superviseur->toArray());
    }

    public $nom;
    public function submit()
    {
        $this->validate([

            // "nom"=>"required",
            // "email"=>"required|email",
            // "password"=>"required|min:3|max:10"


                    // "pseudo"=>"required",
            "modelInputArray.pseudo"=>"required",
            "modelInputArray.user_id"=>"required",
            "modelInputArray.telephone"=>"required",
            
        ]);

        dd("nombis",$this->nombis);

    }

    public function render()
    {
        // return view('livewire.live-superviseur');

        $this->count++;

        return view('livewire.inside.manage.superviseur.manage-superviseur')
            ->layout('layouts.app');


    return view('livewire.live-superviseur')
        ->layout('layouts.app')
        ->slot('superviseurs');


    }
}
