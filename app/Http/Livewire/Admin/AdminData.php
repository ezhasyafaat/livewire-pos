<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class AdminData extends Component
{   

    public $name,$email,$role, $_id;
    public $isModal = 0;
    use WithPagination;

    public function render()
    {
        $users = User::role('Admin')->paginate(10);

        return view('livewire.admin.admin-data', ['users' => $users]);
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function resetInputField()
    {
        $this->name     = '';
        $this->email    = '';
        $this->password = '';
        $this->role     = '';
    }

    public function create()
    {
        $this->resetInputField();
        $this->openModal();
    }

    public function store()
    {
        $request = $this->validate([
            'name'     => 'required|max:225',
            'email'    => 'required|unique:users,email,' . $this->_id,
        ]);

        $createAdmin = User::updateOrCreate(['id' => $this->_id], [
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => Hash::make('password'),
        ]);
        if($createAdmin){
            $createAdmin->assignRole('Admin');
            session()->flash('success', $this->_id ? $this->name . ' Diperbaharui' : $this->name. ' Ditambahkan');
            $this->resetInputField();
            $this->closeModal();
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('success', $user->name. ' Dihapus');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $this->_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role  = $user->role;

        $this->openModal();
    }
}
