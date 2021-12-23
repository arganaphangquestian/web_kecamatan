<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;

class Delete extends ModalComponent
{
    public User $user;

    public function mount($id) {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view('livewire.user.delete');
    }

    public function submit() {
        $this->user->delete();
        $this->emit('reload');
        $this->closeModal();
    }
}
