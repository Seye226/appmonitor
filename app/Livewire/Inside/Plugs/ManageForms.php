<?php

namespace App\Livewire\Inside\Plugs;

use Livewire\Component;

use App\Models\User;

use Livewire\Attributes\Layout;

use App\Livewire\Forms\UserForm;

// #[Layout('layouts.app') ]

class ManageForms extends Component
{
    public $count;

    // // public $users;
    // public $users=[];

    public $modelclass;
    // public UserForm $modelformclass;
    public $modelformclass;
        // public $clientId;
        // public $client;
        // public function mount($clientId)
    public function mount()
    {

        // dd(
        //     'modelclass',$modelclass,
        //     'modelformclass',$modelformclass,
        // );


    //     $this->clientId = $clientId;
    //     $this->client = Client::find($clientId);
    }

    public function render()
    {


            // return view('livewire.inside.plugs.manage-forms')
            //     ->layout('layouts.app');

        return view('livewire.inside.plugs.manage-forms');

    }

}
