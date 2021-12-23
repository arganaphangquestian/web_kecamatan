<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;

class Delete extends ModalComponent
{
    public function render()
    {
        return view('livewire.user.delete');
    }
}
