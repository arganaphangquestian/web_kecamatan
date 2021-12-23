<?php

namespace App\Http\Livewire\Activity;

use LivewireUI\Modal\ModalComponent;
use App\Models\Activity;

class Create extends ModalComponent
{
    public function render()
    {
        return view('livewire.activity.create');
    }
}
