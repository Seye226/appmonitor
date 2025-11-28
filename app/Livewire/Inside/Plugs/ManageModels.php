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

        // public $manageCreateModelModal = false;

        // public $manageEditModelModal = false;
        // public $manageViewModelModal = false;
        public $pageTypeModelModal = false;
        public $manageModelModal;

    public $modeltype;
    public $pageType;
            // public $clientId;
            // public $client;
            // public function mount($clientId)
            // {
            //     $this->clientId = $clientId;
            //     $this->client = Client::find($clientId);
            // }
    public $modelname;
    public function mount($modeltype){
        // dd("modeltype",$modeltype);
        
        $this->modeltype=$modeltype;
        // dd($this->modeltype::all());

        //-----NEW--A-le-27/11/25-----Pour automatiser la vue-livewire EN DEFINISANT le nom du MODEL à traiter, qu'on obtiendra en EXTRACTANT la derniere valeur du ARRAY obtenue a partir du EXPLODE du NAMESPACE du model!
            //Crééer pour etraire uniquement le nom du MODEL sans le NAMESPACE COMPLET!    
            $explodeVar=explode('\\', $this->modeltype);
            // $modelname=strtolower($explodeVar[count($explodeVar)-1]);
            $this->modelname=strtolower($explodeVar[count($explodeVar)-1]);
            // dd(
            //     $this->modeltype,
            //     // $this->modeltype::class,
            //     $this->modeltype::all(),
            //     "------------",
            //     "explodeVar=",
            //     $explodeVar,
            //     count($explodeVar),
            //     $modelname,
            //     // strtolower($modelname),
            // );
        //----END-NEW--A-le-27/11/25-----

    }

                // public function openModal()
                // {
                //     // dd('here');
                //     $this->manageCreateModelModal = true;

                //     // $model = new User;
                //     $model = new $this->modeltype;

                //             // $model->fillable // but now working
                //             // $model->fillable() // but now working.
                //     // dd('here fillable: '.json_encode($model->fillable));
                //             // dd('here fillable: '.json_encode($model->fillable()));
                //     // dd('here fillable: '.json_encode($model->getFillable()));

                //     $this->manageModelModal = $model;
                //     // $this->manageModelModal =  new $this->modeltype;

                // }



    public $modelInputArray=[];
    public function submit()
    {
        $this->validate([

            // "nom"=>"required",
            // "email"=>"required|email",
            // "password"=>"required|min:3|max:10"


                    // "pseudo"=>"required",
            "modelInputArray.pseudo"=>"required",
            "modelInputArray.telephone"=>"required",

                // "modelInputArray.user_id"=>"required",
                //     // 'post_id' => 'required|exists:posts,id',
            "modelInputArray.user_id"=>"required|exists:users,id",
            // 'comment_id' => [
            //     'required',
            //     Rule::exists('comments')->where(function ($query) {
            //         $query->where('post_id', request()->post_id);
            //     }),
            // ], 


        ]);

        // // dd("nombis",$this->nombis);
        // dd(
        //     "modelInputArray",$this->modelInputArray,
        //     "modelInputArray.pseudo",$this->modelInputArray['pseudo']
        // );

        try {
            //code...


            // if ($this->pageType==="Edit" && isset($this->manageModelModal)) {
            if ($this->pageType==="Edit" && isset($this->manageModelModal->id)) {
                # code...
                // dd("this->pageType",$this->pageType,"update");
                $this->manageModelModal::update($this->modelInputArray);
            }elseif ($this->pageType==="Create") {
                # code...
                // dd("this->pageType",$this->pageType,"create");
                $this->manageModelModal::create($this->modelInputArray);
            }else {
                # code...
                dd("HEY DD FROM livewire.inside.plugs.ManageModels in Submit->function()","this->pageType",$this->pageType,"none");

            }

            // refreshPage(); 



        } catch (\Throwable $th) {
            //throw $th;
        }

    }




        // public function openManageModelModal()
        // public function openManageModelModal($modalid)
        public function openManageModelModal($modalid,$model_type)
        {
            // dd('here modalid: '.$modalid." model_type: ".$model_type);
            // $this->manageViewModelModal = true;

            $this->pageTypeModelModal = true;

            $this->pageType=$model_type;

            // if ($model_type === "Edit") {
            if ($model_type === "Create") {
                
                    // $this->manageEditModelModal = true;
                // $this->manageCreateModelModal = true;
                $this->manageModelModal = new $this->modeltype;

                // $this->modelInputArray=$this->manageModelModal->getFillable();


            }
            else {
                
                // $this->pageTypeModelModal = true;
                $this->manageModelModal = $this->modeltype::find($modalid);
                $this->modelInputArray=$this->manageModelModal->toArray();

            }




            //     // $this->manageModelModal = User::find($modalid);
            // $this->manageModelModal = $this->modeltype::find($modalid);
        }

        public function updatedPageTypeModelModal()
        {
            // dd('hei ici updated!');
            // $this->pageTypeModelModal = false;
            $this->manageModelModal = null;
            $this->pageType=null;

        }
        // public function updatedManageViewModelModal()
        // {
        //     // dd('hei ici updated!');
        //     // $this->manageViewModelModal = false;
        //     $this->manageModelModal = null;
        // }
        // public function updatedManageEditModelModal()
        // {
        //     // dd('hei ici updated!');
        //     // $this->manageViewModelModal = false;
        //     $this->manageModelModal = null;
        // }





    public function render()
    {
        // return view('livewire.live-client');

        // dd("modeltype: ".$this->modeltype);

        $this->count++;

        // $this->models = User::all();

        // if ($this->modeltype==="user") {
        //     # code...        
        //     $this->models = User::all();
        // }elseif ($this->modeltype==="client") {
        //     # code...        
        //     $this->models = Client::all();
        // }elseif ($this->modeltype==="site") {
        //     # code...        
        //     $this->models = Site::all();
        // }elseif ($this->modeltype==="superviseur") {
        //     # code...        
        //     $this->models = Superviseur::all();
        // }else {
        //     # code...
        // }
            // $this->models = User::find($clientId);

        // dd($this->modeltype::all());
        $this->models = $this->modeltype::all();

        return view('livewire.inside.plugs.manage-models')
            ->layout('layouts.app');


    return view('livewire.live-client')
        ->layout('layouts.app')
        ->slot('clients');


    }
}
