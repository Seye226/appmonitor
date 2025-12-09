<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

use Livewire\Attributes\Rule;
    // use Livewire\Attributes\Rule as LiveRule;

// use Illuminate\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

use App\Models\Site;

class SiteForm extends Form
{
    //

    public ?Site $site;

    #[Rule('required')]
    // #[Validate('required')]
    public ?string $description;

    // #[Rule('required')]
            // [Validate(['required',Rule::unique('sites')])]
                // [Validate(['required',unique('sites')])]
                    // [Validate('required|exists:sites,reference')]
        // [Validate('required|unique:sites')]
    // #[Rule(['required','unique:sites,reference','ignore:this.'])]
    #[Rule(['required','unique:sites,reference'])]
    // #[Validate(['required','unique:sites'])]
    public ?string $reference;
    // public string $reference;

        #[Rule('required')]
    // #[Rule(['required','unique:sites'])]
    // #[Validate(['required','unique:sites'])]
    public ?string $adresse;
    // public string $adresse;

        // [Validate(['required','min:4'])]
    #[Rule(['required','unique:sites,localisation','min:5'])]
    // #[Validate(['required','unique:sites','min:5'])]
    public ?string $localisation;

    #[Rule(['required','exists:clients,id'])]
    // #[Validate(['required','exists:clients,id'])]
    public ?string $client_id;

    #[Rule(['required','exists:superviseurs,id'])]
    // #[Validate(['required','exists:clients,id'])]
    public ?string $superviseur_id;
        // 'origin_superviseur_id',

// -----DEBUT-NEW-ATTR--Le 30/11/25----
    
            // [Validate(['required', 'message:"Please provide a load info"'])]
        // #[Validate(['required', 'message:Please provide a load info'])]
    #[Rule(['required'])]
    // #[Validate(['required'])]
    public ?string $load_info;
    // public string $load_info;
    

    #[Rule(['required'])]
    // #[Validate(['required'])]
    public ?string $pv_info;

    // #[Validate(['required'])]
    public ?string $battery_info;

    // #[Validate(['required'])]
    public ?string $grid_info;

    // #[Validate(['required'])]
    public ?string $genset_info;

// ----END-NEW-ATTR--Le 30/11/25

    public $inputsTypeList = [
        'description'=>['inputType'=>'text'],
        'reference'=>['inputType'=>'text'],
        'adresse'=>['inputType'=>'text'],

        'localisation'=>['inputType'=>'text'],
        'client_id'=>['inputType'=>'select'],
        'superviseur_id'=>['inputType'=>'select'],

        'load_info'=>['inputType'=>'textarea'],
        'pv_info'=>['inputType'=>'textarea'],
        'battery_info'=>['inputType'=>'textarea'],
        'grid_info'=>['inputType'=>'textarea'],

        'genset_info'=>['inputType'=>'textarea'],

    ];



                                    // protected $rules = [
                                    //     'pv_info' => 'required|min:6',
                                    //     'battery_info' => 'required|email',
                                    // ];

                                    // // public function rules()
                            // protected function rules()
                            // {
                            //     return [
                            //         'reference' => [
                            //             'required',
                            //             // Rule::unique('sites')->ignore($this->site),
                            //             Rule::unique('sites'),
                            //             // ValidationRule::unique('sites'),
                            //         ],

                            //         'adresse' => 'required|min:5',
                            //         'load_info' => 'required|min:5',
                            //     ];
                                
                            //     // return [
                            //     //     'title' => [
                            //     //         'required',
                            //     //         Rule::unique('posts')->ignore($this->post),
                            //     //     ],
                            //     //     'content' => 'required|min:5',
                            //     // ];
                            // }

                            // // public function updated(){
                            // // public function updatedPageTypeModelModal(){
                            // public function updatedDescription(){
                            // // public function updatedReference(){
                            //     dd("hey updated!!");
                            // }



    public function setForm($siteId){
        // $this->site = $site;
        $site = Site::find($siteId);

        if ($siteId && $site) {
            $this->site = $site;

            $this->description = $site->description;
            $this->reference = $site->reference;
            $this->adresse = $site->adresse;

            $this->localisation = $site->localisation;
           
            $this->client_id = $site->client_id; 
            $this->superviseur_id = $site->superviseur_id;
            
            
            $this->load_info = $site->load_info;
            $this->pv_info = $site->pv_info;
            $this->battery_info = $site->battery_info;
            $this->grid_info = $site->grid_info;
            $this->genset_info = $site->genset_info;


        }else {
            $this->reset();
        }

    }

    public function update(){

        // dd("we want to update!",'this->site',$this->site,'this->validate()',$this->validate());

        // $this->validate();

        $this->validate(
            [

                'description'=>[
                    'required',
                    // 'text'
                ],

                // 'reference'=>['required','unique:sites,reference'],
                "reference"=>[
                    'required',
                    // Rule::unique('sites', 'reference')->ignore($this->site->id),
                    ValidationRule::unique('sites', 'reference')->ignore($this->site->id),
                ],
                // "title"=> 'required|string',

                'adresse'=>[
                    'required',
                        // 'text'

                    // 'unique:sites',
                    // 'unique:sites,adresse',
                    ValidationRule::unique('sites', 'adresse')->ignore($this->site->id),
                ],

                'localisation'=>[
                    'required',

                    // // 'unique:sites',
                    // // 'unique:sites,localisation',
                    // //     // Rule::unique('sites', 'localisation')->ignore($this->site->id),
                    // ValidationRule::unique('sites', 'localisation'),
                    ValidationRule::unique('sites', 'localisation')->ignore($this->site->id),

                    'min:5'
                ],
                'client_id'=>[
                    'required',
                    'exists:clients,id'
                ],
                'superviseur_id'=>[
                    'required',
                    'exists:superviseurs,id'
                ],

                'load_info'=>[
                    'required',
                    // 'textarea'
                ],
                'pv_info'=>[
                    'required',
                    // 'textarea'
                ],
                'battery_info'=>[
                    'required',
                    // 'textarea'
                ],
                'grid_info'=>[
                    'required',
                    // 'textarea'
                ],

                'genset_info'=>[
                    'required',
                    // 'textarea'
                ],


            ]
        );

            // Superviseur::update([
        // $this->site->update([
        //     "description"=>$this->description,
        //     "reference"=>$this->reference,
        //     "adresse"=>$this->adresse,
            
        //     "localisation"=>$this->localisation,

        //     "client_id"=>$this->client_id,
        //     "superviseur_id"=>$this->superviseur_id,


        //     "load_info"=>$this->load_info,
        //     "pv_info"=>$this->pv_info,
        //     "battery_info"=>$this->battery_info,
        //     "grid_info"=>$this->grid_info,
        //     "genset_info"=>$this->genset_info,


        // ]);

        // $this->site->update();

        $this->site->update($this->all());


        $this->reset(); 

    }


    public function store(){
        $this->validate();

        Site::create([
            "description"=>$this->description,
            "reference"=>$this->reference,
            "adresse"=>$this->adresse,

            "localisation"=>$this->localisation,

            "client_id"=>$this->client_id,
            "superviseur_id"=>$this->superviseur_id,

            "load_info"=>$this->load_info,
            "pv_info"=>$this->pv_info,
            "battery_info"=>$this->battery_info,
            "grid_info"=>$this->grid_info,
            "genset_info"=>$this->genset_info,

        ]);

        $this->reset(); 

    }

}
