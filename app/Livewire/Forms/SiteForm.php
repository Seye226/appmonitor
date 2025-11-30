<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

use Livewire\Attributes\Rule;

use App\Models\Site;

class SiteForm extends Form
{
    //

    public ?Site $site;

    #[Rule('required')]
    public ?string $description;

    #[Rule('required')]
    public ?string $reference;

    #[Rule('required')]
    public ?string $localisation;

    #[Rule('required|exists:clients,id')]
    public ?string $client_id;

    #[Rule('required|exists:clients,id')]
    public ?string $superviseur_id;

    public function setForm($siteId){
        // $this->site = $site;
        $site = Site::find($siteId);

        if ($siteId && $site) {
            $this->site = $site;

            $this->description = $site->description;
            $this->reference = $site->reference;
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
            "telephone"=>$this->telephone,
            "localisation"=>$this->localisation,

            "client_id"=>$this->client_id,
            "superviseur_id"=>$this->superviseur_id,
        ]);

        $this->reset(); 

    }

}
