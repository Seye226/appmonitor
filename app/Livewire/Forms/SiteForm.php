<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

// use Livewire\Attributes\Rule;
    // use Livewire\Attributes\Rule as LiveRule;

use Illuminate\Validation\Rule;
// use Illuminate\Validation\Rule as ValidationRule;

use App\Models\Site;

class SiteForm extends Form
{
    //

    public ?Site $site;

    // #[Rule('required')]
    #[Validate('required')]
    public ?string $description;

    // [Rule('required')]
        // [Validate(['required',Rule::unique('sites')])]
            // [Validate(['required',unique('sites')])]
                // [Validate('required|exists:sites,reference')]
    // [Validate('required|unique:sites')]
    #[Validate(['required','unique:sites'])]
    public ?string $reference;
    // public string $reference;

    // [Rule('required')]
    #[Validate(['required','unique:sites'])]
    public ?string $adresse;
    // public string $adresse;

        // [Validate(['required','min:4'])]
    #[Validate(['required','unique:sites','min:5'])]
    public ?string $localisation;

    #[Validate(['required','exists:clients,id'])]
    public ?string $client_id;

    #[Validate(['required','exists:clients,id'])]
    public ?string $superviseur_id;
        // 'origin_superviseur_id',

// -----DEBUT-NEW-ATTR--Le 30/11/25----
    
            // [Validate(['required', 'message:"Please provide a load info"'])]
        // #[Validate(['required', 'message:Please provide a load info'])]
    #[Validate(['required'])]
    public ?string $load_info;
    // public string $load_info;
    

    #[Validate(['required'])]
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
        }else {
            $this->reset();
        }

    }

    public function update(){
        $this->validate();

        // Superviseur::update([
        $this->site->update([
            "description"=>$this->description,
            "reference"=>$this->reference,
            "adresse"=>$this->adresse,
            
            "localisation"=>$this->localisation,

            "client_id"=>$this->client_id,
            "superviseur_id"=>$this->superviseur_id,
        ]);

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
        ]);

        $this->reset(); 

    }

}
