<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Admin extends Component
{

    use WithPagination;
    public $user, $name, $email, $password;
    public $updateMode = false;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::role('Admin')->paginate(10);

        return view('livewire.admin', ['users' => $users]);
    }
}
