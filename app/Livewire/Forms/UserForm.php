<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

use Livewire\Attributes\Rule;

use App\Models\User;

class UserForm extends Form
{
    //

    public ?User $user;

    #[Rule('required')]
    public ?string $name;

    // #[Rule('required|email')]
    #[Rule('required|email|unique:users,email')]
    public ?string $email;

    #[Rule('required|password')]
    // #[Rule('required')]
    public ?string $password;

    // #[Rule('required')]
    // public ?string $confirm_password;

        
    public ?string $profile_photo_url;


    public $inputsTypeList = [
        'name'=>['inputType'=>'text'],
        'email'=>['inputType'=>'email'],
        'password'=>['inputType'=>'password'],

        // 'profile_photo_url'=>['inputType'=>'file'],
        'profile_photo_url'=>['inputType'=>'image'],

    ];



    public function setForm($userId){

        // $this->superviseur = $superviseur;
        $user = User::find($userId);
            
        if ($userId && $user) {
            $this->user = $user;

            $this->name = $user->name;
            $this->email = $user->email;
            $this->password = $user->password;
            
            $this->profile_photo_url = $user->profile_photo_url;
        }else {
            $this->reset();
        }

    }

    public function update(){

        // $this->validate();

        $this->validate([
            'name'=>[
                'required',
            ],
            'email'=>[
                'required',
                'email',
                'unique:users,email',
            ],
            'password'=>[
                'required',
                // 'password',
            ],

            // 'profile_photo_url'=>[],

        ]);

        // Superviseur::update([
        $this->user->update([
            "name"=>$this->name,
            "email"=>$this->email,
            "password"=>$this->password,

            "profile_photo_url"=>$this->profile_photo_url,
        ]);

        $this->reset(); 

    }


    public function store(){
        $this->validate();

        User::create([
            "name"=>$this->name,
            "email"=>$this->email,
            "password"=>$this->password,

            "profile_photo_url"=>$this->profile_photo_url,
        ]);

        $this->reset(); 

    }


}
