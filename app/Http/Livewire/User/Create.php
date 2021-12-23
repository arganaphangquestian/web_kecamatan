<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;

class Create extends ModalComponent
{
    public User $user;

    public function mount() {
        $this->user = new User();
    }

    public function render()
    {
        return view('livewire.user.create');
    }

    public function submit() {
        $this->user->save();
    }
}
