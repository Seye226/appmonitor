<?php

namespace App\Livewire\Inside\Plugs;

use Livewire\Component;

use App\Models\User;

use App\Models\Client;
use App\Models\Site;
use App\Models\Superviseur;

use App\Models\Topic;


use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageModels extends Component
{
    public $count;

    public $thesearch;
    // public $models;
    public $models=[];

        public $manageCreateModelModal = false;

        public $manageEditModelModal = false;
        public $manageViewModelModal = false;
        public $manageModelModal;

    public $modeltype;

        public function openModal()
        {
            // dd('here');
            $this->manageCreateModelModal = true;

            $model = new User;
                    // $model->fillable // but now working
                    // $model->fillable() // but now working.
            // dd('here fillable: '.json_encode($model->fillable));
                    // dd('here fillable: '.json_encode($model->fillable()));
            // dd('here fillable: '.json_encode($model->getFillable()));

        }

        // public function openManageModelModal()
        // public function openManageModelModal($modalid)
        public function openManageModelModal($modalid,$model_type)
        {
            // dd('here modalid: '.$modalid." model_type: ".$model_type);
            $this->manageViewModelModal = true;
            if ($model_type === "edit") {
                
                $this->manageEditModelModal = true;
            }else {
                
                $this->manageViewModelModal = true;
            }
            $this->manageModelModal = User::find($modalid);
        }

        public function updatedManageViewModelModal()
        {
            // dd('hei ici updated!');
            // $this->manageViewModelModal = false;
            $this->manageModelModal = null;
        }
        public function updatedManageEditModelModal()
        {
            // dd('hei ici updated!');
            // $this->manageViewModelModal = false;
            $this->manageModelModal = null;
        }

    // public $clientId;
    // public $client;
    // public function mount($clientId)
    // {
    //     $this->clientId = $clientId;
    //     $this->client = Client::find($clientId);
    // }

    public function render()
    {
        // return view('livewire.live-client');

        // dd("modeltype: ".$this->modeltype);

        $this->count++;

        $this->models = User::all();

        if ($this->modeltype==="user") {
            # code...        
            $this->models = User::all();
        }elseif ($this->modeltype==="client") {
            # code...        
            $this->models = Client::all();
        }elseif ($this->modeltype==="site") {
            # code...        
            $this->models = Site::all();
        }elseif ($this->modeltype==="superviseur") {
            # code...        
            $this->models = Superviseur::all();
        }else {
            # code...
        }
        // $this->models = User::find($clientId);

        return view('livewire.inside.plugs.manage-models')
            ->layout('layouts.app');


    return view('livewire.live-client')
        ->layout('layouts.app')
        ->slot('clients');


    }
}
