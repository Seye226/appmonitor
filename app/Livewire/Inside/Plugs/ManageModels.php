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

use App\Livewire\Forms\SuperviseurForm;
use App\Livewire\Forms as FormObjs;
use Livewire\Form;

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
public $modelValidationFields;
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

            // $this->modelValidationFields = [

            //     "modelInputArray.pseudo"=>"required",

            //     // "modelInputArray.telephone"=>"required|numeric|min:6|max:10",
            //     "modelInputArray.telephone"=>"required|numeric",

            //     "modelInputArray.user_id"=>"required|exists:users,id",

            // ];

                // $manageModel = new $this->modeltype;
                //         // $manageModel = $this->modeltype::find(1);

                // dd(
                //     "this->modeltype",
                //     $this->modeltype,
                //     // $this->modeltype::getFillable(),
                //     (new $this->modeltype),
                //     (new $this->modeltype)->getFillable(),


                //     // "manageModelModal",
                //     // $this->manageModelModal,
                //     // // $this->manageModelModal::getFillable(),

                //     // "manageModel",
                //     // $manageModel,
                //     // $manageModel->getFillable(),

                // );
foreach ((new $this->modeltype)->getFillable() as $inputname) {
    # code...
    $this->modelValidationFields["modelInputArray.".$inputname]="required";
}
        // dd(
        //     "this->modelValidationFields",
        //     $this->modelValidationFields,
        // );


// $formName="App\\Livewire\\Forms\\".ucfirst($this->modelname)."Form";
            //     //     // $formName="\\App\\Livewire\\Forms\\".ucfirst($this->modelname)."Form";
            // $formName="Forms\\".ucfirst($this->modelname)."Form";
        // $formName="FormObjs\\".ucfirst($this->modelname)."Form";
            // $formName=ucfirst($this->modelname)."Form";

        // $this->modelInputArray = $formName;
            // $this->modelInputArray = $formName::class;
            // $this->modelInputArray = $formName::form;
        // $this->modelInputArray = new Form($formName);
            // $this->modelInputArray = new SuperviseurForm;
            // $this->modelInputArray = new SuperviseurForm();
            
        // $this->modelInputArray = new $formName();
        // $this->modelInputArray = new $formName;
        // $this->modelInputArray = new $formName(new $this->modeltype);
// $this->modelInputArray = $this->superviseurform;
    // dd(
    //     $this->superviseurform,
    //     // $this->superviseurform->rules()
    // );
    // $this->modelValidationFields = $this->superviseurform->rules();
if ($this->modelname==="superviseur") {
    $this->modelInputArray = $this->superviseurform;
}elseif ($this->modelname==="site") {
    $this->modelInputArray = $this->siteform;
}elseif ($this->modelname==="user") {
    $this->modelInputArray = $this->userform;
}elseif ($this->modelname==="client") {
    $this->modelInputArray = $this->clientform;
}else {
    $this->modelInputArray = [];
}
        // $test = 'App\Livewire\Forms\Superviseur';
        // // $test = \App\Livewire\Forms\Superviseur;
        // // \App\Livewire\Forms\Superviseur $test;
        // // Superviseur $test;

        // dd(
        //     "modelInputArray=>",$this->modelInputArray,
        //     // "this->modelInputArray->validate()",($this->modelInputArray)->validate(),
        //     "modeltype=>", $this->modeltype,
        //     // "modeltype=>",new $this->modeltype,
        //     "-",
        //     "modelname=>",$this->modelname,
        //     "formName=>",$formName,

        //     // "this->modelInputArrayBis=>",$this->modelInputArrayBis,
        //     // "this->modelInputArrayBis->validate()=>",($this->modelInputArrayBis)->validate(),

        //     "test=>",$test,
        //     "testBis=>",$this->testBis,

        // );


    }
        // public SuperviseurForm $modelInputArrayBis;
        // public Forms\SuperviseurForm $modelInputArrayBis;
    // public FormObjs\SuperviseurForm $modelInputArrayBis;
        // public 'App\\Livewire\\Forms\\SuperviseurForm' $modelInputArrayBis;
        // public App\Livewire\Forms\SuperviseurForm $modelInputArrayBis;

    // public Superviseur $testBis;

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



    // public function updated($field)
    // {
    //     // $this->validateOnly($field,

    //     //             // [
    //     //             //     "modelInputArray.pseudo"=>"required",
    //     //             //     "modelInputArray.telephone"=>"required|numeric",
    //     //             //     "modelInputArray.user_id"=>"required|exists:users,id",
    //     //             // ]

    //     //     $this->modelValidationFields

    //     // );

    //     $this->validate();
    // }

        // public $modelInputArray=[];
        // public SuperviseurForm $superviseurForm;
    // public SuperviseurForm $modelInputArray;
        // public "App\\Livewire\\Forms\\SuperviseurForm" $modelInputArray;
    public $modelInputArray;
    // public Form $modelInputArray;
    public FormObjs\SuperviseurForm $superviseurform;
    // public SuperviseurForm $superviseurform;
    public FormObjs\SiteForm $siteform;
    public FormObjs\UserForm $userform;
    public FormObjs\ClientForm $clientform;

    public function submit()
    {

                        // $formName="App\\Livewire\\Forms\\".ucfirst($this->modelname)."Form";
                        // // $formName=ucfirst($this->modelname)."Form";
                        // // $this->modelInputArray = new $formName();
                        // // $this->modelInputArray = new $formName;
                        // $this->modelInputArray = $formName;
                        // // $this->modelInputArray = new SuperviseurForm;
                        // // $this->modelInputArray = new SuperviseurForm();
                        // dd(
                        //     "this->modelInputArray",$this->modelInputArray,
                        //     "this->modelInputArray->validate()",($this->modelInputArray)->validate(),
                        //     "modeltype",$this->modeltype,
                        //     "-",
                        //     "modelname",$this->modelname,
                        //     "formName",$formName,

                        // );


        // dd(
        //     $this->superviseurform,
        //     // $this->superviseurform->rules()
            
        //     $this->modelInputArray,
        // );

        // $test = 'App\Livewire\Forms\Superviseur';
                // $test = \App\Livewire\Forms\Superviseur;
                // \App\Livewire\Forms\Superviseur $test;
                // Superviseur $test;

                // $this->modelInputArray->set('propertyName','modelInputArray');
                // $this->modelInputArray->setPropertyName('modelInputArray');
                // $this->modelInputArray->propertyName='modelInputArray';
                // $this->modelInputArray['propertyName']='modelInputArray';

        // dd(
        //     "modelInputArray=>",$this->modelInputArray,


        //     // "this->modelInputArray->validate()",($this->modelInputArray)->validate(),
        //     "modeltype=>", $this->modeltype,
        //     // "modeltype=>",new $this->modeltype,
        //     "-",
        //     "modelname=>",$this->modelname,
        //     // "formName=>",$formName,

        //     // "this->modelInputArrayBis=>",$this->modelInputArrayBis,
        //     // "this->modelInputArrayBis->validate()=>",($this->modelInputArrayBis)->validate(),

        //     "test=>",$test,
        //     // "testBis=>",$this->testBis,

        // );


        // $this->superviseurForm->store();
// $this->modelInputArray->store();
// if ($model_type === "Create") {
if ($this->pageType === "Create") {
    $this->modelInputArray->store();
}else {
    $this->modelInputArray->update();
}

        // return;
        // return $this->redirect('/');
        // return $this->redirect();
    }

    public function oldSubmit()
    {
        $this->validate(
            // [

            //     // "nom"=>"required",
            //     // "email"=>"required|email",
            //     // "password"=>"required|min:3|max:10"


            //             // "pseudo"=>"required",
            //     "modelInputArray.pseudo"=>"required",
            //     "modelInputArray.telephone"=>"required|numeric",

            //         // "modelInputArray.user_id"=>"required",
            //         //     // 'post_id' => 'required|exists:posts,id',
            //     "modelInputArray.user_id"=>"required|exists:users,id",
            //     // 'comment_id' => [
            //     //     'required',
            //     //     Rule::exists('comments')->where(function ($query) {
            //     //         $query->where('post_id', request()->post_id);
            //     //     }),
            //     // ], 


            // ]
            $this->modelValidationFields
        );

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
            $this->reset(); 

            // $this->redirect();

            // return view('livewire');


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
            // if ($model_type === "Create") {
            if ($this->pageType === "Create") {
                
                    // $this->manageEditModelModal = true;
                // $this->manageCreateModelModal = true;
$this->manageModelModal = new $this->modeltype;

                // $this->modelInputArray=$this->manageModelModal->getFillable();
// if ($this->modelname==="superviseur") {
//     $this->modelInputArray = $this->superviseurform;
// }elseif ($this->modelname==="site") {
//     $this->modelInputArray = $this->siteform;
// }elseif ($this->modelname==="user") {
//     $this->modelInputArray = $this->userform;
// }elseif ($this->modelname==="client") {
//     $this->modelInputArray = $this->clientform;
// }else {
//     $this->modelInputArray = [];
// }

            }
            else {

//--------
                // $this->pageTypeModelModal = true;
$this->manageModelModal = $this->modeltype::find($modalid);
    // $this->modelInputArray=$this->manageModelModal->toArray();
//------------
// if ($this->modelname==="superviseur") {
//     $this->modelInputArray = $this->superviseurform;
// }elseif ($this->modelname==="site") {
//     $this->modelInputArray = $this->siteform;
// }elseif ($this->modelname==="user") {
//     $this->modelInputArray = $this->userform;
// }elseif ($this->modelname==="client") {
//     $this->modelInputArray = $this->clientform;
// }else {
//     $this->modelInputArray = [];
// }
// dd($this->modelInputArray,$modalid);

$this->modelInputArray->setSuperviseurForm($modalid);
//----------

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
