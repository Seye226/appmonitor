<?php

namespace App\Livewire\Inside\Manage\User;

use Livewire\Component;

use App\Models\User;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageUsers extends Component
{
    public $count;

    public $thesearch;
    // public $users;
    public $users=[];

    public $modelclass;
    public function mount(){

        $this->modelclass = User::class;

    }

        public $manageCreateUserModal = false;

        public $manageEditUserModal = false;
        public $manageViewUserModal = false;
        public $manageUserModal;

        public function openModal()
        {
            // dd('here');
            $this->manageCreateUserModal = true;

            $model = new User;
                    // $model->fillable // but now working
                    // $model->fillable() // but now working.
            // dd('here fillable: '.json_encode($model->fillable));
                    // dd('here fillable: '.json_encode($model->fillable()));
            // dd('here fillable: '.json_encode($model->getFillable()));

        }

        // public function openManageUserModal()
        // public function openManageUserModal($modalid)
        public function openManageUserModal($modalid,$model_type)
        {
            // dd('here modalid: '.$modalid." model_type: ".$model_type);
            $this->manageViewUserModal = true;
            if ($model_type === "edit") {
                
                $this->manageEditUserModal = true;
            }else {
                
                $this->manageViewUserModal = true;
            }
            $this->manageUserModal = User::find($modalid);
        }

        public function updatedManageViewUserModal()
        {
            // dd('hei ici updated!');
            // $this->manageViewUserModal = false;
            $this->manageUserModal = null;
        }
        public function updatedManageEditUserModal()
        {
            // dd('hei ici updated!');
            // $this->manageViewUserModal = false;
            $this->manageUserModal = null;
        }

    // public $clientId;
    // public $client;
    // public function mount($clientId)
    // {
    //     $this->clientId = $clientId;
    //     $this->client = Client::find($clientId);
    // }

    public function render()
    {
        // return view('livewire.live-client');


        $this->count++;

        $this->users = User::all();
        // $this->users = User::find($clientId);

        return view('livewire.inside.manage.user.manage-users')
            ->layout('layouts.app');


    return view('livewire.live-client')
        ->layout('layouts.app')
        ->slot('clients');


    }
}
