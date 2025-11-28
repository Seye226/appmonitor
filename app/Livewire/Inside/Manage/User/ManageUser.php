<?php

namespace App\Livewire\Inside\Manage\User;

use Livewire\Component;

use App\Models\User;

use Livewire\Attributes\Layout;

// #[Layout('layouts.app') ]

class ManageUser extends Component
{
    public $count;

    public $thesearch;

    public $userId;
    public $user;

    public $pageType;
    public function mount($userId,$pageType)
    {
        $this->userId = $userId;
        $this->pageType = $pageType;

        // $this->user = User::find($userId);
        // dd("pageType",$pageType);
        // if ($pageType==="Edit") { //"user-view"
        if ($pageType==="Create") { //"user-view"
            # code...
            $this->user = new User;

        }else {
            # code...
            $this->user = User::find($userId);

        }

    }

    public function render()
    {
        // return view('livewire.live-user');

        $this->count++;

        return view('livewire.inside.manage.user.manage-user')
            ->layout('layouts.app');


    return view('livewire.live-client')
        ->layout('layouts.app')
        ->slot('clients');


    }
}
