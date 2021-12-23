<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;

class Edit extends ModalComponent
{
    public User $user;

    public function mount($id) {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view('livewire.user.edit');
    }

    public function submit() {
        $this->user->save();
        $this->emit('reload');
        $this->closeModal();
    }
}
