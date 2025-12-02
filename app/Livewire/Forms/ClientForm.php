<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

use Livewire\Attributes\Rule;

use App\Models\Client;


class ClientForm extends Form
{
    //

    public ?Client $client;

    #[Rule('required')]
    // public string $firstname;
        // public ?string $firstname = '';
    public ?string $firstname;

    #[Rule('required')]
        // public string $lastname = '';
    public ?string $lastname;

    #[Rule('required')]
    public ?string $pseudo;

    #[Rule('required')]
    public ?string $adresse;

    #[Rule('required|numeric')]
    public string $telephone = '';
    // public int $telephone;

    #[Rule('required|exists:users,id')]
    public string $user_id = '';


    public $inputsTypeList = [
        'firstname'=>['inputType'=>'text'],
        'lastname'=>['inputType'=>'text'],
        'pseudo'=>['inputType'=>'text'],

        'adresse'=>['inputType'=>'text'],
        'telephone'=>['inputType'=>'tel'],
        'user_id'=>['inputType'=>'select'],

    ];





    // public string $created_by_user_id;
    // // public string $created_by_user_id = auth()->user()->id;


            // // public function __construct(){
            // public function mount(){
            //     dd('dd hey client-form!',auth()->user()->id);
            //     $this->created_by_user_id = auth()->user()->id;
            // }


    // public function setClientForm($clientId){
    public function setForm($clientId){
        // $this->site = $site;

        // dd(
        //     'hey auth()',
        //     auth()->user(),
        //     auth()->user()->id,
        //     // auth()->user()->is_admin,
        // );

        if ($clientId) {
            $client = Client::find($clientId);
            $this->client = $client;

            $this->firstname = $client->firstname??'';
            $this->lastname = $client->lastname??'';
            $this->pseudo = $client->pseudo??'';

            $this->adresse = $client->adresse??'';
            $this->telephone = $client->telephone??'';
            $this->user_id = $client->user_id??'';

            // $this->created_by_user_id = $client->created_by_user_id;??'';
        }else {
            $this->reset();
        }

    }


    public function update(){
        $this->validate();

        // Superviseur::update([
        $this->client->update([
            "firstname"=>$this->firstname,
            "lastname"=>$this->lastname,
            "pseudo"=>$this->pseudo,

            "adresse"=>$this->adresse,
            "telephone"=>$this->telephone,
            "user_id"=>$this->user_id,
            
            // "created_by_user_id"=>$this->created_by_user_id,
            "created_by_user_id"=>auth()->user()->id,
        ]);

        $this->reset(); 

    }


    public function store(){
        $this->validate();

        Client::create([
            "firstname"=>$this->firstname,
            "lastname"=>$this->lastname,
            "pseudo"=>$this->pseudo,

            "adresse"=>$this->adresse,
            "telephone"=>$this->telephone,
            "user_id"=>$this->user_id,

            // "created_by_user_id"=>$this->created_by_user_id,
            "created_by_user_id"=>auth()->user()->id,
        ]);

        $this->reset(); 

    }


}
