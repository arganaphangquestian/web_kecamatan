<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;

class Edit extends ModalComponent
{
    public User $user;

    protected $rules = [
        'user.id' => 'required',
        'user.name' => 'required',
        'user.email' => 'required|email',
        'user.password' => 'required|confirmed',
    ];

    public function mount($id) {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view('livewire.user.edit');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $this->validate();
        $this->user->save();
        $this->emit('reload');
        $this->closeModal();
    }
}
