<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    //
    #[Rule('required')]
    public string $pseudo = '';

    #[Rule('required|numeric')]
    public string $telephone = '';

    #[Rule('required|exists:users,id')]
    public string $user_id = '';

    public function store(){
        $this->validate();

        Superviseur::create([
            "pseudo"=>$this->pseudo,
            "telephone"=>$this->telephone,
            "user_id"=>$this->user_id,
        ]);

        $this->reset(); 

    }
    
}
