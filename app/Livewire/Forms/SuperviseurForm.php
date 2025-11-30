<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

use Livewire\Attributes\Rule;

use App\Models\Superviseur;

class SuperviseurForm extends Form
{
    //

    // public function __construct(){
    // // public function __construct(Superviseur $superviseur){

    // //         $this->pseudo=$superviseur->pseudo;
    // //         $this->telephone=$superviseur->telephone;
    // //         $this->user_id=$superviseur->user_id;

    // }

    public ?Superviseur $superviseur;
            // private ?Superviseur $superviseur;
            // protected ?Superviseur $superviseur;


    // private int $id;

    #[Rule('required')]
    public string $pseudo = '';

    #[Rule('required|numeric')]
    public string $telephone = '';
    // public int $telephone;

    #[Rule('required|exists:users,id')]
    public string $user_id = '';

        // public function setSuperviseurForm(Superviseur $superviseur){
    // public function setSuperviseurForm($superviseurId){
    public function setForm($superviseurId){
        // $this->superviseur = $superviseur;

        $superviseur = Superviseur::find($superviseurId);

        // if ($superviseurId) {
        if ($superviseurId && $superviseur) {

            # code...
        
            $this->superviseur = $superviseur;

            // $this->id = $superviseurId??'';

            $this->pseudo = $superviseur->pseudo??'';
            $this->telephone = $superviseur->telephone??'';
            $this->user_id = $superviseur->user_id??'';
        }else {
            $this->reset();
        }

    }
    // public function resetForm(){

    //     // $this->superviseur = null;

    //     // $this->pseudo = '';
    //     // $this->telephone = '';
    //     // $this->user_id = '';

    //     // $this->reset();

    // }

    public function update(){
        $this->validate();

        // Superviseur::update([
        $this->superviseur->update([
        // Superviseur::find($this->id)->update([

            "pseudo"=>$this->pseudo,
            "telephone"=>$this->telephone,
            "user_id"=>$this->user_id,

            // $this->pull()

        ]);

        $this->reset(); 

    }

    public function store(){
        $this->validate();

        Superviseur::create([
            "pseudo"=>$this->pseudo,
            "telephone"=>$this->telephone,
            "user_id"=>$this->user_id,

            // $this->pull()

        ]);

        $this->reset(); 

    }


}
