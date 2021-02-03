<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Admin extends Component
{
    public function render()
    {

        $users = User::role('Admin')->get();

        return view('livewire.admin', ['users' => $users]);
    }
}
